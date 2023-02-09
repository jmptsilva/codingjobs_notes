/**
 * Complex objects
 */

const users = [
  {
    firstName: "Boris",
    username: "boris24",
    addresses: [{ street: "poney street", zipcode: "90210" }],
  },
  {
    firstName: "John",
    username: "john36",
    addresses: [{ street: "horses street", zipcode: "90210" }],
  },
];

/**
 * Pass by reference
 *
 * https://flexiple.com/javascript/javascript-pass-by-reference-or-value/
 */

const test = "string";
// test = 25; // changing the value of a const is prohibited for primitives
const user = { age: 2 };
user.name = "toto";
console.log(user);

let mystring = "test";
// primitives are copied, because variables containing primitives values contain the value itself
let anotherString = mystring;
mystring = 56;
console.log(anotherString);

// assigning a variable containing an object (or array, etc) is NOT creating a copy. it's copying the reference to the object (pass by reference), and both variables are pointing to the object. If you modify one, the other is modified too
const anotherUser = user;
user.age = 40;
console.log(anotherUser);

/**
 * Arrow function
 *
 */
const myfunction = () => {
  // body
};
const myfunction2 = function () {
  // body
};

// this is not a very good practice as it is storing the function in a global variable named "myfunction3"
function myfunction3() {}

/**
 * Array map
 */
const nbs = [10, 20, 30, 40, 50, 60];

const newNbs = nbs.map(function (nb) {
  return nb * 10;
});

console.log(newNbs);
