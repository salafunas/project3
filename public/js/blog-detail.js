document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu toggle
  const menuToggle = document.querySelector('.navbar-toggler');
  const navMenu = document.querySelector('.nav-menu');
  
  if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', function() {
      navMenu.classList.toggle('active');
    });
  }

  // Close mobile menu when clicking on a link
  document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', () => {
      navMenu.classList.remove('active');
    });
  });

  // Highlight active menu item
  const currentPage = location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-menu a').forEach(link => {
    const linkPage = link.getAttribute('href').split('/').pop();
    if (currentPage === linkPage || 
        (currentPage === '' && linkPage === 'index.php')) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
});