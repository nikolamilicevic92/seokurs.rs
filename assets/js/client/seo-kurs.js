const aside = document.querySelector('.aside');
aside.classList.add('active');

const video = document.querySelector('video');
const container = document.querySelector('.video-container');
const aspectRatio = 16 / 9;
const maxWidth = 1200;

(function(aspectRatio, maxWidth, container, video) {

  container.style = 'position:relative;width:100%;overflow:hidden;';
  video.style = 'position:absolute;width:100%;height:100%;object-fit:cover;';

  window.addEventListener('resize', () => adjuctContainerHeight())

  adjuctContainerHeight();

  function adjuctContainerHeight() {
    let width = maxWidth;
    if(window.innerWidth < maxWidth) {
      width = window.innerWidth;
    }
    container.style.height = parseInt(width / aspectRatio) + 'px';
  }

})(aspectRatio, maxWidth, container, video);
