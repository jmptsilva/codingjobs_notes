const input = document.querySelector("input");
const subBtn = document.querySelector("button");
const resultList = document.querySelector(".results-list");
const searchFDiv = document.querySelector(".search-fail");
const movieDescrip = document.querySelector(".movie-description");
const moviePoster = document.querySelector(".movie-poster");

const displayDetails = function (movie) {
  //create a div for the movie title inside the description;
  const newTitleDiv = document.createElement("div");
  newTitleDiv.textContent = movie.show.name;
  movieDescrip.appendChild(newTitleDiv);
  newTitleDiv.classList.add("title-details");

  //create a div for the movie summary inside the description;
  const newSummaryDiv = document.createElement("div");
  newSummaryDiv.innerHTML = `${movie.show.summary}`;
  movieDescrip.appendChild(newSummaryDiv);

  //create a div for the movie poster next to the description;
  const newPosterImg = document.createElement("img");
  moviePoster.appendChild(newPosterImg);
  newPosterImg.src = movie.show.image.original;
};

const clearDetailsHtml = function () {
  // clear the html to reset the content from details;
  movieDescrip.innerHTML = "";
  moviePoster.innerHTML = "";
};

subBtn.addEventListener("click", (event) => {
  event.preventDefault();
  resultList.innerHTML = "";
  searchFDiv.innerHTML = "";
  clearDetailsHtml();
  console.log(input.value);
  fetch(`https://api.tvmaze.com/search/shows?q=${input.value}`)
    .then((response) => {
      return response.json();
    })
    .then((movieData) => {
      if (movieData.length === 0) {
        searchFDiv.textContent = "No results found!";
      } else {
        console.log(movieData);
        displayDetails(movieData[0]);
        movieData.forEach((movie) => {
          // create a new div for each result
          const newDiv = document.createElement("div");
          newDiv.textContent = movie.show.name;
          resultList.appendChild(newDiv);
          newDiv.addEventListener("click", () => {
            clearDetailsHtml();
            displayDetails(movie);
          });
        });
      }
    });
});
