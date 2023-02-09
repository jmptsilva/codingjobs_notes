/**
 * Arrays
 *
 * can contain multiple data types
 * but they should contain only elements of same type or shape (if objects)
 */

// JS is very permissive and allows for list of elements of different data types. But don't do this!
const mixedTypes = [56, "text", true, {}, function () {}];
// elements with uniform types
const numbers = [1, 2, 3];
const words = ["one", "two", "three"];

/**
 * Conditions
 *
 * Comparison operators
 * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Expressions_and_Operators
 *
 * strict equality (best practice): ===
 * (==)
 * strict inequality (best practice): !==
 * (!=)
 * >
 * <
 * >=
 * <=
 */
const age = 21;

if (age >= 21) {
  console.log("you are old enough");
} else {
  // < 21
  console.log("you are too young)");
}

// not equal to
if (age !== 0) {
  console.log("you are born");
}

// multiple conditions with else if
let temperature;
if (typeof temperature === "number") {
  if (temperature > 50) {
    console.log("very hot");
  } else if (temperature > 30) {
    console.log("hot");
  } else if (temperature <= 0) {
    console.log("very cold");
  } else {
    // all the "normal temperature"
    console.log("ok");
  }
}

/**
 * Logical operators
 *
 * && || !
 */

// ! reverts a condition
const isConnected = false;

// shorthand with booleans, we can omit the comparison (=== true) because the variable is already a boolean
if (isConnected) {
  console.log("you are connected");
} else {
  console.log("you are not connected");
}

// if the user is not(!) connected = if variable isConnected is false
if (!isConnected) {
  console.log("you are not connected");
} else {
  console.log("you are connected");
}

// cumulate conditions: && (AND) || (OR)
const isUserReturning = false;
const isUserConnected = true;

if (isUserConnected && isUserReturning) {
  console.log("welcome back connected user");
} else if (isUserConnected && !isUserReturning) {
  console.log("welcome new connected user");
} else {
  console.log("please connect");
}

const userAge = 23;
// || OR
if (userAge < 24 || userAge > 30) {
  console.log("please go somewhere else");
}

/**
 * Truthy / falsy values
 *
 */
// falsy values
// null, undefined, false, 0, ''
// truthy: numbers, non-empty strings, true

const height = 0;

if (height) {
  // if condition will be true, but we HAVE a height
  console.log("please indicate the height");
}

// instead
if (height >= 0) {
  // do something
}

/**
 * Functions
 *
 */

function functionName() {
  console.log("hello from inside the function");
}
// function call
functionName();

function sum(a, b) {
  const calc = a + b;

  return calc;
}

// JS replaces the function call by the return value defined by us (here the result of the calculation)
const result = sum(8, 2);
console.log(result);

// parameters only exists in the context of the function (in its scope)
// console.log(a, b); // gives an error

/**
 * Loops
 *
 */

for (let index = 1; index <= 10; index++) {
  console.log("hello" + index);
}
/* 
const fruits = ["tomato", "banana", "apple"];
for (let index = 0; index < fruits.length; index++) {
  // instructions
}
 */