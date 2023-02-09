/**
 * - Create an array with five elements
 * - Retrieve and console log the fourth element
 * - Console log the length of the array
 * - find a way to add an element at the end of the array
 * - console log the new length
 * - let's imagine you don't know the size of your array. Find a way to get the last element.
 *
 */
const fruits = ["apple", "banana", "tomato", "cherry", "pear"];
console.log(fruits, fruits.length);
// automatically push at the end
fruits.push("pineapple");
console.log(fruits, fruits.length);
// create element at the end
fruits[fruits.length] = "kiwi";
console.log(fruits, fruits.length);
// get the last
console.log(fruits[fruits.length - 1]);
