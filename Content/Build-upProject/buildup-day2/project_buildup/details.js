
const detailTitle = document.querySelector(".animetitle");
const detailContainer = document.querySelector(".detailscontainer");
const animeId = location.search.slice(4,10);
console.log(animeId);




fetch("https://api.jikan.moe/v4/anime/"+ animeId)
  .then((response) => {
    return response.json();
  })
  .then((data) => {
  console.log(data);
      detailTitle.textContent = data.data.title;
      const description = document.createElement("div");
      description.classList.add("col-12", "col-md-6", "col-xl-6");
      detailContainer.appendChild(description);
      const contentDiv = document.createElement("div");
      contentDiv.classList.add("d-flex", "flex-column");
      description.appendChild(contentDiv);
      const animePoster = document.createElement("img");
      animePoster.src = data.data.images.jpg.large_image_url;
      contentDiv.appendChild(animePoster);
      const infoDiv = document.createElement("div");
      description.appendChild(infoDiv);

      const japTitleP = document.createElement("p");
      japTitleP.textContent = "Original Title: " + data.data.title_japanese;
      infoDiv.appendChild(japTitleP);
      const episodesP = document.createElement("p");
      episodesP.textContent = "Episodes: " + data.data.episodes;
      infoDiv.appendChild(episodesP); 
      const durationP = document.createElement("p");
      durationP.textContent = "Duration: " + data.data.duration;
      infoDiv.appendChild(durationP);
      const YearP = document.createElement("p");
      YearP.textContent = "Year: " + data.data.year;
      infoDiv.appendChild(YearP);
      const synopsis = document.createElement("div");
      synopsis.classList.add("col-12", "col-md-6", "col-xl-6");
      detailContainer.appendChild(synopsis);
      const synopsisP = document.createElement("p");
      synopsisP.textContent = data.data.synopsis;
      synopsis.appendChild(synopsisP);
      
       
      
  

    /* let elementArray = document.getElementsByClassName("clickable");
      elementArray.forEach((element) => {
        element.addEventListener("click", () => {});
      }); */
  });

