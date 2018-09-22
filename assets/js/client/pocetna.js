(function() {
  
  window.onload = () => {
      $('.hero-container')
        .append([
            make('video', 'Vaš browser ne podržava video tag')
                .attr('autoplay', true)
                .attr('controls', true)
                .attr('src', 'assets/media/hero-video.mp4')
        ])
  }
  
})()