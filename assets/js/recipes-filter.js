const filters = document.querySelectorAll('.recipe-filters select');
const cards = document.querySelectorAll('.recipe-card');

filters.forEach(filter => {
  filter.addEventListener('change', applyFilters);
});

function applyFilters() {
  const cuisine = document.getElementById('cuisineFilter').value;
  const diet = document.getElementById('dietFilter').value;
  const difficulty = document.getElementById('difficultyFilter').value;

  cards.forEach(card => {
    const matchCuisine = cuisine === 'all' || card.dataset.cuisine === cuisine;
    const matchDiet = diet === 'all' || card.dataset.diet === diet;
    const matchDifficulty = difficulty === 'all' || card.dataset.difficulty === difficulty;

    card.style.display = (matchCuisine && matchDiet && matchDifficulty)
      ? 'block'
      : 'none';
  });
}
