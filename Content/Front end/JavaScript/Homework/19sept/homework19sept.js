const oddNumbers = [];

function ask(nbr) {
  const nbr = parseInt(prompt("Give me a number"));
  if (nbr % 2 === 1) {
    oddNumbers.push(nbr);
  }
}

for (let index = 0; index < 7; index++) {
  ask(nbr);
}

console.log(
  "You've successfully entered " + oddNumbers.length + " odd numbers!"
);

/* 
// alternative function without prompt and push included
function isOdd(nbr) {
  if (nbr % 2 === 1) {
    return true;
  } else {
    return false;
  }
}

// the same as (if gives a true or false conclusion; so we can simplify and return immediatly the operation):
function isOdd(nbr) {
  return nbr % 2 === 1;
} */

/* Another alternative: we define general functions for each task

function isOdd() {
  return nbr % 2 === 1);
}

function push(nbr) {
  if (isOdd(nbr)) {
    oddNumbers.push(nbr);
  }
}

for (let index = 0; index < 4; index++) {
  const nbr = parseInt(prompt("Give me a number"))
  isOdd(nbr);
  push(nbr);
}

*/
