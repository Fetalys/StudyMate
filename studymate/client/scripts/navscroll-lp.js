// Select the header
const header = document.querySelector('header');

// Smooth scrolling for navigation links and buttons
const scrollLinks = document.querySelectorAll('header nav a,section h3, pricing-section');

scrollLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    const href = link.getAttribute('href');
    if (href && href.startsWith('#')) {
      e.preventDefault();
      const targetId = href.substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - header.offsetHeight,
          behavior: 'smooth'
        });
      }
    }
    // If not a hash link, let the browser handle it (e.g., login.html)
  });
});