const aside = document.querySelector('.aside');
aside.classList.add('active');

const video = document.querySelector('video');


if(window.innerWidth >= 1200) {
  video.style.height = '675px';
  video.style.width = '1200px';
} else {
  video.style.height = 'auto';
  video.style.width = window.innerWidth + 'px';
}