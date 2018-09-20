(function() {
  
  const slides = document.querySelectorAll('.toc-part');
  
  for(let i = 0; i < slides.length; i++) {
      const slide = slides[i];
      const h3 = slide.querySelector('h3');
      const content = slide.querySelector('.toc-part-content');
      content.addEventListener('mouseenter', () => slideTocContent(content));
      content.addEventListener('mouseleave', () => slideTocContent(content));
      h3.addEventListener('mouseenter', () => slideTocContent(content));
      h3.addEventListener('mouseleave', () => slideTocContent(content));
      h3.addEventListener('click', () => slideTocContent(content));
  }
  
  function slideTocContent(content) {
      if(content.classList.contains('toc-content-slide')) {
          content.classList.remove('toc-content-slide');
      } else {
          content.classList.add('toc-content-slide');
      }
  }
  
})()