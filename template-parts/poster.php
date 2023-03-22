<section id="poster" class="poster-container">
    <div class="poster-header">
      <h2 class="poster-title texto-blanco">Poster</h2>
     
    </div>

    <article class="poster-movieList">
  
    </article>
    <div class="movies-by-categories">

    </div>
  </section>
  <script>

async function getPosterMovies() {
    const { data } = await api('genre/movie/list');
  const categories = data.genres;

console.log(categories)
  categories.forEach(category => {  
    const categoryContainer = document.createElement('div');
    categoryContainer.classList.add('category-container');
const posterList=document.querySelector('.poster-movieList')
    const categoryTitle = document.createElement('h3');
    categoryTitle.classList.add('category-title');
    categoryTitle.setAttribute('id', 'id' + category.id);
    categoryTitle.addEventListener('click', async() => {
      
      const { data } = await api('trending/movie/day');
      const movies = data.results;
      console.log(movies)
      movies.forEach(movie => {
        const moviesByCategories = document.querySelector('.movies-by-categories');
        const posterContainer = document.createElement('div');
        posterContainer.classList.add('poster-container', 'movie-container');
        moviesByCategories.classList.add('soon-movieList');
        const posterImg = document.createElement('img');
        posterImg.classList.add('poster-img');
        posterImg.setAttribute('alt', movie.title);
        posterImg.setAttribute(
          'src','https://image.tmdb.org/t/p/w300' + movie.poster_path
         )
         posterContainer.appendChild(posterImg);
         moviesByCategories.appendChild(posterContainer)
})
    });
    const categoryTitleText = document.createTextNode(category.name);

    categoryTitle.appendChild(categoryTitleText);
    categoryContainer.appendChild(categoryTitle);
    posterList.appendChild(categoryContainer);
  });
}

getPosterMovies();
    </script>
    