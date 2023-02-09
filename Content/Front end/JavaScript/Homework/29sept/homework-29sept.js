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
const ascBtn = document.querySelector(".ascend");
const dscBtn = document.querySelector(".descend");

const makeDivs = function (fruit) {
  const newDiv = document.createElement("div");
  container.appendChild(newDiv);
  newDiv.textContent = fruit;
}

fruits.forEach(function (fruit) {
  makeDivs(fruit);
});

ascBtn.addEventListener("click", () => {
  container.innerHTML = "";
  fruits.sort().forEach((fruit) => {
    makeDivs(fruit);
  })
});
dscBtn.addEventListener("click", () => {
  container.innerHTML = "";
  fruits.sort().reverse().forEach((fruit) => {
    makeDivs(fruit);
  })
});

/* if we want to sort numbers, we need to specify a function inside sort to define the comparison between the numbers: nbrs.sort(() => {}).forEach(() => {}); */