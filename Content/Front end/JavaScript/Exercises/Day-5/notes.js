/* 
    Complex Objects - Objects inside objects, as arrays
*/

const users = [
  {
    firstName: "Boris",
    username: "boris24",
    addresses: [{ street: "poney street", zipcode: "90120" }],
  },
  {
    firstName: "John",
    username: "john36",
    addresses: [{ street: "downey street", zipcode: "45325" }],
  },
];

/* 
    Pass by reference
*/

const test = "string";
// test = 25;  // changing the value of a const is prohibited for primitives;

const user = { age: 2 };
user.name = "toto";
console.log(user);

let mystring = "test";
// primitives are copied, because variables containing primitives values contain the value itself;
let anotherString = mystring;
mystring = 56;
console.log(anotherString);

/* although we changed the value of mystring, since anotherString was copied before changing,
the log will show what was stored in the memory;
 */

const anotherUser = user;
user.age = 40;
console.log(anotherUser);

/* anotherUser will update with the change in user, because variables are connected */
/* (they have the same memory allocated, maybe?) */

/* primitives contain values and don't allocate space in the memory for further use
(we have to store them mannualy); */

// variables are "allocations" in the memory (they assign a space in memory for content);

// an object can be changed even if we use const; a primitive not!;

/* 
    Arrow function
*/

const myfunction = () => {};

/* the same as:

const myfunction = function() {

}

*/

function myfunction2() {
  // THIS IS NOT A GOOD PRACTICE AS js STORES IT IN THE GLOBAL SCOPE!
}

/* 
    Array map
*/

const nbrs = [10, 20, 30, 40, 50];

const newNbrs = nbrs.map(function (nb) {
  // map is used to create a new array by transforming, that we need to store (with the same number of elements)
  return nb * 10; // unlike forEach, that only performs a loop for external purposes
}); // if we don't return, the new array will be undefined in each index

console.log(newNbrs);
