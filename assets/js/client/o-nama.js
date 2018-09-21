const tabs = $('.o-nama li');
const firstTab = $('.o-nama li:first-child');
const windowWidthAtTransition = 1110;

let adjucted = false;
let lastTabIndex = 0;

//Sliding in the first card on entering the page, if layout is inline
if(window.innerWidth >= windowWidthAtTransition) {
  const content = firstTab.get('.content');
  slideIn(firstTab, content);
  adjucted = true;
}

window.addEventListener('resize', () => {
  //On transitioning to vertical layout, we open the slide that was slided in on inline layout
  if(window.innerWidth < windowWidthAtTransition) {
    tabs.each(tab => {
      if(tab.hasClass('active')) {
        const content = tab.get('.content');
        slideDown(tab, content);
      }
    })
    adjucted = false;
  } else if(!adjucted) {
    //On transitioning to inline layout we slide in the last opened card in vertical layout and close all others
    adjuctTransition(lastTabIndex);
    adjucted = true;
  }
})

tabs.each((tab, i) => {
  tab.on('click', (tab, event) => {
    lastTabIndex = i;
    const content = tab.get('.content');
    //If it's inline layout, only one tab can be active, so we slide it in and slide out others
    if(window.innerWidth >= windowWidthAtTransition) {
      slideIn(tab, content);
      //Closing the other tabs
      slideOutOtherTabs(i);
    } else {
      if(tab.hasClass('active')) {
        slideUp(tab, content); 
      } else { 
        slideDown(tab, content);
      }
    }
  })
})

function slideIn(tab, content) {
  tab.addClass('active');
  content.css({ left : '330px' });
}

function slideOut(tab, content) {
  tab.removeClass('active');
  content.css({ left: '1500px' });
}

function slideDown(tab, content) {
  tab.addClass('active');
  content.css({ maxHeight : content.dom().scrollHeight + 50 + 'px' })
}

function slideUp(tab, content) {
  tab.removeClass('active');
  content.css({ maxHeight: null });
}

function slideOutOtherTabs(currentIndex) {
  tabs.each((tab, index) => {
    if(currentIndex !== index) {
      const content = tab.get('.content');
      slideOut(tab, content);
    }
  })
}

function adjuctTransition(tabIndex) {
  tabs.each((tab, i) => {
    const content = tab.get('.content');
    if(i === tabIndex) {
      slideDown(tab, content);
      slideIn(tab, content);
      // previousTab = tab;
    } else {
      slideUp(tab, content);
      slideOut(tab, content);
    }
  })
}