
const asideTrigger = $('#toggleAside');
const aside = $('.aside');

asideTrigger.on('click', () => {
  if(aside.hasClass('active')) {
    aside.removeClass('active');
    asideTrigger.text('O kursu');
    asideTrigger.removeClass('active');
  } else {
    aside.addClass('active');
    asideTrigger.text('Sakrij');
    asideTrigger.addClass('active');
  }
});

const video = $('.course-full video');

if(window.innerWidth >= 1200) {
  video.css({height: '675px', width: '1200px'});
} else {
  video.css({height: 'auto', width: window.innerWidth + 'px'});
}


const _sections = $('.section'); 
const tests = {};
const videos = {};
const sections = {};
const videoTitle = $('#videoTitle');
const videosWatched = $('#videosWatched');
const videosCount = $('#videosCount');
const videosProgression = $('#videosProgression');
const testsDone = $('#testsDone');
const testsCount = $('#testsCount');
const testsProgression = $('#testsProgression');

if(_sections) {

  _sections.each(section => {
    const _tests = section.get('.test');
    const _videos = section.get('li.video');
    const sectionName = section.get('h2').text();
    let sources = [];

    if(_videos) {
      _videos.each(video => {
        sources.push(video.attr('id'));
        videos[video.attr('id')] = {
          section: sectionName,
          title: video.get('.video-title').text(),
          watched: video.get('.checkbox').hasClass('watched'),
          duration: video.get('.duration').text(),
          checkbox: video.get('.checkbox'),
          id: video.get('input').value()
        };
      })
    }

    let testNames = [];

    if(_tests) {
      _tests.each(test => {
        const testName = test.get('.test-name').text();
        testNames.push(testName); 
        tests[testName] = {
          section: sectionName,
          done: test.get('.checkbox').hasClass('done'),
          checkbox: test.get('.checkbox'),
          id: test.get('.test-id').value()
        }
      })
    }

    sections[sectionName] = {
      videos: sources,
      tests: testNames
    }
  })

}

console.log(tests);
console.log(videos);
console.log(sections);


const vc = getVideosCount();
videosCount.text(vc);
updateVideosProgression();




const tc = getTestsCount();
testsCount.text(tc);
updateTestsProgression();



initializeLandingVideo();


const timer = $('#timer');
let timerInterval;
let timerValue;
let currentVideoSrc = '';

video.on('play', video => {
  const src = video.attr('src');
  localStorage.videoSource = src;
  initVideo(src);
});

video.on('pause', video => {
  if(video.dom().currentTime != video.dom().duration) {
    clearInterval(timerInterval);
  }
});

function play(src) {
  video.attr('src', src);
  // window.scrollY += video.getBoundingClientRect().top;
  // window.scrollY = 0;
  window.scrollTo(0, window.scrollY + video.dom().getBoundingClientRect().top - 50);
  video.dom().play();
}

function initVideo(src) {
  if(src != currentVideoSrc) {
    if(videoWasWatched(src)) {
      timer.text('');
    }
    
    currentVideoSrc = src;
    setVideoTitle(src);

    clearInterval(timerInterval);

    if(!videoWasWatched(src)) {
      startTimer(getTime(src) - 1, src);
    } else {
      timer.text('');
    }
  } else {
    if(!videoWasWatched(src)) {
      startTimer(timerValue, src);
    } else {
      timer.text('');
    }
  }
}

function onVideoWatched(src) {
  const id = getVideoId(src);
  _post('/video-user', { id_video: id })
    .then(res => {
      updateCSRF(res.csrf);
      markWatchedVideo(src);
      updateVideosProgression();
      const next = nextVideo(src);
      if(next) play(next);
    })
}

function updateCSRF(csrf) {
  $('head>meta[name="csrf"]').attr('value', csrf);
}

function startTimer(time, src) {
  timerValue = time;
  timerInterval = setInterval(() => {
    if(timerValue <= 0) {
      clearInterval(timerInterval);
      onVideoWatched(src);
    }
    timer.text(timeToString(timerValue--));
  }, 1000);
}

function markWatchedVideo(src) {
  videos[src].watched = true;
  const checkbox = videos[src].checkbox;
  if(!checkbox.hasClass('watched')) {
    checkbox.addClass('watched');
  }
}

function videoWasWatched(src) {
  return videos[src].watched;
}

function timeToString(time) {
  let min = parseInt(time / 60);
  let sec = time % 60;
  if(min < 10) min = '0' + min;
  if(sec < 10) sec = '0' + sec;
  return min + ':' + sec;
}

function getTime(src) {
  const duration = videos[src].duration.split(':');
  const min = parseInt(duration[0]);
  const sec = parseInt(duration[1]);
  return min * 60 + sec;
}

function getVideoId(src) {
  return videos[src].id;
}


const testLinks = $('.test .test-name');

if(testLinks) {
  testLinks.each(link => {
    link.on('click', (link, event) => {
      if(tests[link.text()].done) {
        event.preventDefault();
        return;
      }
      if(!testCanBeDone(link.text())) {
        event.preventDefault();
        alert('Morate odgledati sve snimke iz sekcije ' + tests[link.text()].section);
      }
    })
  })
}


function testCanBeDone(test) {
  return sectionIsWatched(tests[test].section);
}

function sectionIsWatched(section) {
  for(let i = 0; i < sections[section].videos.length; i++) {
    const videoSource = sections[section].videos[i];
    const video = videos[videoSource];
    if(!video.watched) return false;
  }
  return true;
}


function firstUnseenVideo() {
  let src;
  for(let _src in videos) {
    src = _src;
    if(!videos[_src].watched) {
      break;
    }
  }
  return src;
}

function initializeLandingVideo() {
  const src = firstUnseenVideo();
  if(!src) {
    console.log('Landing video cannot be initialized');
  } else {
    video.dom().src = src;
    setVideoTitle(src);
  }
}

function setVideoTitle(src) {
  console.log(src, videos);
  if(!videos[src]) return;
  videoTitle.text(videos[src].section + ' - ' + videos[src].title);
}

function getVideosCount() {
  let counter = 0;
  for(let src in videos) counter++;
  return counter;
}

function getVideosWatchedCount() {
  let counter = 0;
  for(let src in videos) {
    if(videos[src].watched) counter++;
  }
  return counter;
}

function getTestsCount() {
  let counter = 0;
  for(let test in tests) counter++;
  return counter;
}

function getTestsDoneCount() {
  let counter = 0;
  for(let test in tests) {
    if(tests[test].done) counter++;
  }
  return counter;
}

function updateVideosProgression() {
  const vwc = getVideosWatchedCount();
  videosWatched.text(vwc);
  videosProgression.dom().style.width = (vwc / vc) * 100 + '%'; 
}

function updateTestsProgression() {
  const tdc = getTestsDoneCount();
  testsDone.text(tdc);
  testsProgression.dom().style.width = (tdc / tc) * 100 + '%'; 
}

function nextVideo(src) {
  let found = false;
  for(let _src in videos) {
    if(found) {
      return _src;
    }
    if(src == _src) {
      found = true;
    }
  }
  return false;
}