const topContainer = document.querySelector(".topanimecontainer");

fetch("https://api.jikan.moe/v4/top/anime")
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    data.data.slice(0, 8).forEach((anime) => {
      const colDiv = document.createElement("div");
      topContainer.appendChild(colDiv);
      colDiv.classList.add("col-12", "col-md-6", "col-xl-4", "col-xxl-3");
      const cardDiv = document.createElement("div");
      colDiv.appendChild(cardDiv);
      cardDiv.classList.add("card-movie", "d-flex", "flex-column", "g-4");
      const poster = document.createElement("img");
      poster.classList.add("clickable");
      poster.src = anime.images.jpg.large_image_url;
      cardDiv.appendChild(poster);
      const titleDiv = document.createElement("div");
      titleDiv.classList.add("d-flex", "g-3", "justify-content-between");
      cardDiv.appendChild(titleDiv);
      const h4Title = document.createElement("h4");
      h4Title.classList.add("clickable");
      h4Title.textContent = anime.title;
      titleDiv.appendChild(h4Title);
      const heartDiv = document.createElement("div");
      heartDiv.classList.add("heart");
      titleDiv.appendChild(heartDiv);
      const infoDiv = document.createElement("div");
      infoDiv.classList.add("d-flex", "g-3");
      cardDiv.appendChild(infoDiv);
      const durationP = document.createElement("p");
      durationP.textContent = anime.duration;
      infoDiv.appendChild(durationP);
      const sepP = document.createElement("p");
      sepP.textContent = "|";
      infoDiv.appendChild(sepP);
      const genreP = document.createElement("p");
      genreP.textContent =
        anime.themes.length === 0 ? "" : anime.themes[0].name;
      infoDiv.appendChild(genreP);
      
      poster.addEventListener("click", () => {
        const clickable = document.querySelector(".clickable");
        window.location.href = "../html/details.html" + "?id=" + anime.mal_id;
        
     

      });

      /* let elementArray = document.getElementsByClassName("clickable");
      elementArray.forEach((element) => {
        element.addEventListener("click", () => {});
      }); */
    });
    console.log(data);
  });
