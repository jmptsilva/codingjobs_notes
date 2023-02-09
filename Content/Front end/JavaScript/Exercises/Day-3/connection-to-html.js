// We manipulate the elements in HTML by establishing a relation with a reference.
// First, we get the reference:

const firstDiv = document.getElementById("firstdiv");
console.log(firstDiv, firstDiv.classList);

const listOfDivs = document.getElementsByClassName("my-class");
console.log(listOfDivs);

const firstDiv2 = document.querySelector("div#firstdiv");
console.log(firstDiv2);
const listOfDivs2 = document.querySelectorAll("div#firstdiv");
console.log(listOfDivs2);

