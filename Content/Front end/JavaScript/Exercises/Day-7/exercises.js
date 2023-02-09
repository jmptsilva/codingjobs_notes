/* 
    Exercise 1

    - Fetch from the star wars API Luke's Skywalker info;
    - display his name, height and mass in the page in a new element;
*/

/* fetch("https://swapi.dev/api/people/1/").then((response) => {
  console.log(response);
  return response.json().then((data) => {
    const newDiv = document.createElement("div");
    document.body.appendChild(newDiv);
    newDiv.textContent = `The person's name is ${data.name} and is ${data.height} cm, with ${data.mass} Kg.`;
  });
});
 */

/* 
    Exercise 2

    - Fetch multiple characters from the star Wars API (GET /people/)
    - using a loop display their names in a UL list
*/

const ulElement = document.querySelector("ul");
const detailsContainer = document.querySelector("div");
const liElements = document.querySelectorAll("li");

fetch("https://swapi.dev/api/people/")
  .then((response) => {
    return response.json();
  })
  .then((people) => {
    console.log(people);
    people.results.forEach((character) => {
      const newLi = document.createElement("li");
      ulElement.appendChild(newLi);
      newLi.textContent = `The person's name is ${character.name} and is ${character.height} cm, with ${character.mass} Kg.`;
      newLi.addEventListener("click", function () {
        detailsContainer.textContent = `Hair: ${character.hair_color} / Eyes: ${character.eye_color}`;
        detailsContainer.style.backgroundColor = "lightgray";
      });
    });
  });


/*   newLi.addEventListener("click", function () {
    const newDiv = document.createElement("div"); // we could directly add newDiv.textContent and make the div change the info each time we click (more simple than creating a new div each time);
    detailsContainer.appendChild(newDiv);
    newDiv.textContent = `Hair: ${character.hair_color} \ Eyes: ${character.eye_color}`;
    newDiv.style.backgroundColor = "lightgray";
  }); */