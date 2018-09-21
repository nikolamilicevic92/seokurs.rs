(function() {
  const menu = document.querySelectorAll('.menu-links li:not(:first-child)');
  let showMenu = false;
  document.getElementById('menuToggle').addEventListener('click', toggleMenu);
  
  function toggleMenu() {
      showMenu = !showMenu;
      if(showMenu) {
          for(let i = 0; i < menu.length; i++) {
              if(i !== 0) {
                menu[i].style.display = 'block';
              }
          }
      } else {
          for(let i = 0; i < menu.length; i++) {
              menu[i].style.display = 'none';
          }
      }
  }
})()