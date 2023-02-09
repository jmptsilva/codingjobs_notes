/**
 *
 * Loops
 *
 *
 */
// for loop to manipulate an array
// for loop is autonomous and has no knowledge that we use an array, it only counts from something to something else (from 0 to array's length -1 for example)
const array = [50, 56, 89, 54, 65];
console.log(array);
// traverse the array from 0 to length -1 (last index)
for (let index = 0; index < array.length; index++) {
  console.log(array[index]);
}
// traverse the array from third item to length -1 (last index)
for (let index = 2; index < array.length; index++) {
  console.log(array[index]);
}
// traverse the array from last item to first item (length -1 -> 0)
for (let index = array.length - 1; index >= 0; index--) {
  console.log(array[index]);
}

// for..of
for (const item of array) {
  console.log(item);
}

/**
 * Array methods
 */

// Array.forEach
const names = ["John", "Patricia", "Jack"];
names.forEach(function (element, index) {
  console.log(element, index);
});

/**
 * DOM
 * Document Object Model
 * https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model/Introduction
 *
 * https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model
 *
 *
 */
// document object contains tools/functions that we can use to manipulate or access the document elements
document;

const firstDiv = document.getElementById("firstdiv");
console.log(firstDiv);
const listOfDivs = document.getElementsByClassName("my-class");
console.log(listOfDivs);

const firstDiv2 = document.querySelector("div#firstdiv");
console.log(firstDiv2);
const listOfDivs2 = document.querySelectorAll(".my-class");
console.log(listOfDivs2);

/**
 * Objects
 *
 * order is guaranteed in an array
 * there is no guaranteed order in an object (it doesn't really matter)
 */
// declaring a new object
// it can contains anything!
const user = {
  lastName: "Monnet",
  isConnected: false,
  lastVisit: "2022-09-19T00:00:00Z",
  nbOfVisits: 200,
  firstName: "Guillaume",
  children: [{ name: "Boris 2" }, { name: "x ae a12" }],
  address: { street: "", city: "" },
  call: function () {
    // do something
  }
};
console.log(user);

// retrieving an object's property
console.log(user.nbOfVisits);
