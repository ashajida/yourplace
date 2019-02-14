const filter_search_form = document.querySelector('.filter-search-form');
const filter = document.querySelector('.filter-btn');

filter.addEventListener('click', () => {
    filter_search_form.classList.toggle('filter-active');
});

console.log('loaded');
