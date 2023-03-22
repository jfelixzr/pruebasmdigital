<?php get_template_part('template-parts/categorias'); ?>
<section id="soon" class="soon-container">
    <div class="soon-header">
      <h2 class="soon-title texto-blanco">Soon</h2>
     
    </div>

    <article class="soon-movieList">
    
    </article>
  </section>
  <script>
    const api = axios.create({
  baseURL: 'https://api.themoviedb.org/3/',
  headers: {
    'Content-Type': 'application/json;charset=utf-8',
  },
  params: {
    'api_key': '5d51b3dd0a43ecffdc6f1a206cbc5812',
  },
});
async function getSoonMovies() {
    const { data } = await api('trending/movie/day');
  const movies = data.results;
  console.log(movies)
  movies.forEach(movie => {
    const soonMoviesContainer = document.querySelector('#soon .soon-movieList')
    
    const movieContainer = document.createElement('div');
    movieContainer.classList.add('movie-container');
   //capturar nombres de peliculas 
   const movieName = document.querySelector('#movie-select');
    const dateCategory = document.querySelector('#date-category');
    const sessionCategory=document.querySelector('#session-category');
    let optionMovie= document.createElement('option')
    let optionDate= document.createElement('option')
    
    optionMovie.value = movie.title;
    optionMovie.innerText = movie.title;
    optionDate.value = movie.release_date;
    optionDate.innerText = movie.release_date;
    movieName.appendChild(optionMovie)
    dateCategory.appendChild(optionDate)
    const movieImg = document.createElement('img');
    movieImg.classList.add('movie-img');
    movieImg.setAttribute('alt', movie.title);
    movieImg.setAttribute(
      'src',
      'https://image.tmdb.org/t/p/w300' + movie.poster_path,
    );

    movieContainer.appendChild(movieImg);
    soonMoviesContainer.appendChild(movieContainer);

 
  });
}

getSoonMovies();
    </script>