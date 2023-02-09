
const fruits = [
  "tomato",
  "pineapple",
  "cucumber",
  "eggplant",
  "cherry",
  "strawberry",
  "pear",
  "blackberry",
];

const container = document.querySelector(".container");
const input = document.querySelector("input");

const createElements = function (list) {
  // the list parameter is used to replace the variables for the arrays - fruits and filteredFruits; like this we can create a function for both recreations of the elements on display;
  list.forEach(function (fruit) {
    const newDiv = document.createElement("div");
    container.appendChild(newDiv);
    newDiv.textContent = fruit;
  });
};

createElements(fruits);

input.addEventListener("input", () => {
  console.log(input.value);
  const filteredFruits = fruits.filter((fruit) => fruit.includes(input.value));
  console.log(filteredFruits);
  container.innerHTML = ""; // this serves to clear the orignal array elements (remove them to recreate the new elements filtered in search)
  createElements(filteredFruits);
});

// an alternative was to remove each row that didn't include the string we inserted; it means, instead of removing all the elements and recreating the list, we would only remove the elements that didn't have the input value;