/* 
 // Exercise 1
 
for (let index = 0; index < 10; index++) {
  const newDiv = document.createElement("div");
  document.body.appendChild(newDiv);
  newDiv.classList.add("class");
  newDiv.textContent = "test";
  newDiv.textContent = newDiv.textContent.toUpperCase();
  console.log(newDiv);
} */

/* // Exercise 2

const fruits = ["banana", "apple", "kiwi", "tomato", "passionfruit"];

fruits.forEach(function (fruit) {
  const newP = document.createElement("p");
  document.body.appendChild(newP);
  newP.textContent = fruit;
}); */

// Exercise 3

/* const fruits = ["banana", "apple", "kiwi", "tomato", "passionfruit"];

const firstDiv = document.querySelector("div");
// inside the selector string, we use the same terminology as CSS: . for class; nothing for tag; # for id;

fruits.forEach(function (fruit) {
  const newP = document.createElement("p");
  firstDiv.appendChild(newP); // a variable cannot be a property of the objects document.body
  newP.textContent = fruit;
});
 */

// Exercise 4

/* - Add html button on the page;
   - get a refernce to the button (select it);
   - listen for clicks on the button;
   - console log a message when the button is clicked;*/
/* 
const purpleBtn = document.querySelector("button");

purpleBtn.addEventListener("click", function () {
  console.log("The button was clicked!");
});

 */

// Exercise 5
/* 
  - create an HTML input element in the page;
  - get a reference to this element;
  - listen on the input event of the listener;
  - inside the callback of the listener, console.log the input value;
 */

/* const inputSpace = document.querySelector("input");
const purpleBtn = document.querySelector("button");

purpleBtn.addEventListener("click", function () {
  console.log("The button was clicked!");
  console.log(inputSpace.value);
  
}); */

// Exercise 6

/* 
  - create an array of strings;
  - add a button in the page (with text load);
  - listen for a click on the button;
  - when the button is clicked display the strings in the page in p elements (you need a loop, 
    to create an element, to change its text and insert it in the page);
 */

const fruits = ["banana", "apple", "kiwi", "tomato", "passionfruit"];

const btn = document.querySelector("button");

btn.addEventListener("click", function () {
  fruits.forEach(function (fruit) {
    const newP = document.createElement("p");
    document.body.appendChild(newP);
    newP.textContent = fruit;
  });
});
