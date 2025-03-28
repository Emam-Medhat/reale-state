const ratingContainers = document.querySelectorAll('.rating-container');

ratingContainers.forEach(container => {
  const stars = container.querySelectorAll('.star');

  stars.forEach(star => {
    star.addEventListener('click', function() {
      const value = parseInt(this.dataset.value);
      highlightStars(stars, value);
    });
  });
});

function highlightStars(stars, value) {
  stars.forEach(star => {
    if (parseInt(star.dataset.value) <= value) {
      star.classList.add('active');
    } else {
      star.classList.remove('active');
    }
  });
}