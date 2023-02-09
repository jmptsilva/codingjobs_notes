/* Create an array of objects (fruits or anything else), each of the object having a "name" property, and another one (it's up to you).
example: const fruits1 = [{ name: "tomato", calories: 10 }, { name: "banana", calories: 50 }, { name: "cherry", calories: 40 }];

- create an HTML table
- For each object in your array, create a new table row and as many cells as you need to display the info using JS (probably 2, in my example, one for the name, one for the calories)
- set a different background color for odd and even lines, using a class that you add with JS but not directly with CSS (so, we don't use the ":nth-child(2n+1)" CSS selector
- when clicking on a line, remove it from the document (you need an event listener, and to search for how to remove an HTML element from the page) */

const fruits = [
  { name: "tomato", calories: 10 },
  { name: "apple", calories: 34 },
  { name: "orange", calories: 57 },
  { name: "strawberry", calories: 37 },
];

const listBody = document.querySelector("#list tbody");

function capFirstLetter(string) {
  return string[0].toUpperCase() + string.slice(1).toLowerCase();
}

fruits.forEach((fruit, index) => {
  const row = document.createElement("tr");
  listBody.appendChild(row);
  row.innerHTML = `<td>${fruit.name}</td><td>${fruit.calories}</td>`;
  if (index % 2 === 1) {
    row.classList.add("dark-row");
  }
  row.addEventListener("click", () => {
    row.remove();
  });
});
