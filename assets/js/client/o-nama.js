const tabs = $('.tabs li');
const tabsContent = $('.tabs-content li');

tabs.each((tab, i) => {
  tab.on('click', () => {

    tabs.removeClass('active');
    tab.addClass('active');

    tabsContent.each((content, j) => {
      if(i === j) {
        content.addClass('active');
      } else {
        content.removeClass('active');
      }
    })
  })
})