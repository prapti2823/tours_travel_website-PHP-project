// Toggle submenu
document.querySelectorAll('.dropdown').forEach((item) => {
    item.addEventListener('click', (event) => {
      event.stopPropagation();
      item.querySelector('.submenu').classList.toggle('show');
    });
  });
  
  // Close submenu when clicking outside
  window.addEventListener('click', (event) => {
    document.querySelectorAll('.submenu').forEach((item) => {
      if (!item.contains(event.target)) {
        item.classList.remove('show');
      }
    });
  });