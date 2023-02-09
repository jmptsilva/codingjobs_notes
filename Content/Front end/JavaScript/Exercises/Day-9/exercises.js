/* 
    Exercise 1 (sort array of numbers)

    - sort an array of numbers
*/

/* const nbrs = [1, 41, 3, 64, 112, 1512, 9, 40];

nbrs.sort((a, b) => {
  if (a < b) {
    return -1;
  }

  if (a > b) {
    return 1;
  }

  return 0;
}); */ // we can only have one return in a function, so it stops at the first return in an if (the one where the condition is satisfied); the others are disregarded;
/* 
console.log(nbrs); */

// with an object
/* 
const fruits = [
  { name: "tomato" },
  { name: "pineapple" },
  { name: "cucumber" },
  { name: "eggplant" },
  { name: "cherry" },
  { name: "strawberry" },
  { name: "pear" },
  { name: "blackberry" },
];

fruits.sort((a, b) => {

  if (a.name < b.name) {
    return -1;
  }

  if (a.name > b.name) {
    return 1;
  }

  return 0;
});

console.log(fruits);
 */

/* 
    Exercise 2 (https://api.jikan.moe/v4/anime?q=naruto)

    - create an input with a button to submit;
    - call the api to fetch the data to search for the anime list;
    - display the list of anime titles in a ul;
    - after a click on an li, display the details in another container (synopsis, duration, etc.)  
*/

const subBtn = document.querySelector("button");
const input = document.querySelector("input");
const ulElement = document.querySelector("ul");
const detailsCont = document.querySelector(".details-cont");

subBtn.addEventListener("click", () => {
  ulElement.innerHTML = "";
  detailsCont.innerHTML = "";
  console.log(input.value);
  fetch(`https://api.jikan.moe/v4/anime?q=${input.value}`)
    .then((response) => {
      return response.json();
    })
    .then((animeData) => {
      console.log(animeData);
      animeData.data.forEach((anime) => {
        const newLi = document.createElement("li");
        ulElement.appendChild(newLi);
        newLi.textContent = anime.title;
        const newImg = document.createElement("img");
        ulElement.appendChild(newImg);
        newImg.setAttribute("src", `${anime.images.webp.small_image_url}`);
        newLi.addEventListener("click", () => {
          detailsCont.innerHTML = "";
          const newDiv = document.createElement("div");
          detailsCont.appendChild(newDiv);
          newDiv.textContent = `Type: ${anime.type}; Duration: ${anime.duration}.          Synopsis: ${anime.synopsis}`;
        });
      });
    });
});
