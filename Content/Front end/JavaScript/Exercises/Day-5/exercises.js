/* Exercise 1

    - console log the username of the second user;
    - console log the street of the first user;
    - console log the second zipcode of the second user;

*/

/* const users = [
  {
    firstName: "Boris",
    username: "boris24",
    addresses: [{ street: "poney street", zipcode: "90120" }],
  },
  {
    firstName: "John",
    username: "john36",
    addresses: [{ street: "downey street", zipcode: "45325" }],
  },
];

console.log(users[0].username);

console.log(users[0].addresses[0].street);

console.log(users[1].addresses[0].zipcode);
 */
/* 
    Exercise 2

    - transform all the usernames into uppercases;
    - add a city inside addresses

*/

/* for (let index = 0; index < users.length; index++) {     // this could be simpler with a forEach loop;
  users[index].username = users[index].username.toUpperCase();
  users[index].addresses.forEach(function (addr) {
    addr.city = "NY";
  });
}

console.log(users);
 */

/* 
    Exercise 3

    - Reverse array (2 different approaches)
*/

// const nbrs = [1, 2, 3, 4, 5]

/* // using reverse();
const reversedNbrs = nbrs.reverse();
console.log(reversedNbrs); */

/* console.log(nbrs);

let newNbrs = [];

for (let index = nbrs.length - 1; index >= 0; index--) {
    newNbrs.push(nbrs[index]);
}

console.log(newNbrs); */

/* 
    Exercise 4

*/

/* We want to display a list of animals in the page with their weights in parenthesis ("Cat (4kg)")
    - create a container to add all the items;
    - for each element in the array create an element containing the text ("Xxxxx (xxxkg)") and insert it in the container. The weight here should be in a child element of the li (a SPAN); */

const animals = [
  { name: "cat", weight: 2 },
  { name: "dog", weight: 10 },
  { name: "parrot", weight: 3 },
];

/* let container = document.querySelector(".container");

const newUl = document.createElement("ul");
container.appendChild(newUl);

animals.forEach(function (animal) {
  const newLi = document.createElement("li");
  const span = document.createElement("span");
  container.appendChild(newLi);
  newLi.textContent = `${animal.name} `;    // we need to appendChild after or text
  newLi.appendChild(span);
  span.textContent = `(${animal.weight} Kg)`;
  span.style.fontWeight = "600";
}); */


/* 
    Exercise 5

    - using a map, create a new array, based on animals, where the name is capitalized and the weight is converted to 
*/

function capFirstLetter(string) {
    return string[0].toUpperCase() + string.slice(1).toLowerCase();
}

const newAnimals = animals.map(function (animal) {
    animal.name = capFirstLetter(animal.name);
    animal.weight = animal.weight * 1000;
    return animal
})

console.log(newAnimals);