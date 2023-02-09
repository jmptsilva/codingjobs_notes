/**
 * 1. Declare two variable containing strings and add them together (concatenation). Store this in a third variable.
 * 2. output the result of a concatenation of multiple variables of different types (nb + nb + bool). what happens?
 */
let firstName = "Guillaume";
let lastName = "Monnet";
let fullName = firstName + " " + lastName;
console.log(fullName);

let age = 5;

let result = fullName + age;
console.log(result);
console.log(typeof result);

/**
 * Prompt the user two times for two numbers
 * multiply the numbers together
 * console.log the result
 *
 */
let firstNb = prompt("give me a number");
let secondNb = prompt("give me a number");
let multiply = firstNb * secondNb;
console.log(multiply, typeof multiply);
