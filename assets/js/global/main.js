document.addEventListener('DOMContentLoaded', function() {
  const aboutMeSection = document.querySelector('.aboutme');

  // Create an observer to monitor the visibility of the aboutme section
  const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              aboutMeSection.classList.add('in-view');
          }
      });
  });

  // Observe the aboutme section
  observer.observe(aboutMeSection);
});
  