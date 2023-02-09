const form = document.querySelector(".form");
const input = document.querySelector(".inp");
const mybigdiv = document.querySelectorAll(
  ".col-12.col-md-6.col-xl-4.col-xxl-3"
);
const mymoviescard = document.querySelectorAll(
  ".card-movie.d-flex flex-column g-4"
);
const myimages = document.querySelectorAll(".poster");
const myh4 = document.querySelectorAll(".titreh4");
const mydiv2 = document.querySelector(".infoanime");

console.log(myimages);
form.addEventListener("submit", (event) => {
  event.preventDefault();
  fetch(" https://api.jikan.moe/v4/anime?q=" + input.value)
    .then((response) => {
      console.log(response);
      return response.json();
    })
    .then((datas) => {
      datas.data.slice(0, 12).forEach((serie, index) => {
        myimages[index].src = serie.images.jpg.image_url;
        myh4[index].textContent = serie.title;

        const elementp = document.createElement("p");
        elementp.textContent = `${serie.duration} | ${serie.type} `;
        mydiv2.appendChild(elementp);
      });
    });
});
