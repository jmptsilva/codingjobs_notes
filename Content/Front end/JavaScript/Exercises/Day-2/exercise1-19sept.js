/* const age = 21;

if (age >= 21) {
  console.log("you are old enough");
} else {
    // < 21 
    console.log('you are too young')
}
 */

/* const secretNumber = 42;

let userInput = parseInt(prompt("Give me a number")); */
// or we could use let userInput = +prompt("Give me a number"); but check notes below *

/* if (secretNumber === userInput) {
  console.log("Congrats, you got it!");
} else {
  console.log("Ohh, try again!");
} */

/* if (secretNumber === userInput) {
  console.log("Congrats, you got it!");
} else if (userInput < secretNumber) {
  console.log("Try a bigger number!");
} else {
  console.log("Try a smaller number!");
} */

/* * We can use a + sign behind a prompt (or others) to force its input string to change the type to a number!
However, it can be confusing on a big file of code (difficult to find amongst the lines of code) so we use parseInt
command behind the prompt command */

// Functions

function sum(a, b) {
  const calc = a + b;
  return calc;
}

sum(8, 2);
let result = sum(8, 2);
console.log(result);

/* console.log(a, b);
//gives an error (not defined) because it only exists inside the fucntion */

function mod(a, b) {
  const calc = a % b;
  return calc;
}

let input1 = parseInt(prompt("Give me a number"));
let input2 = parseInt(prompt("Give me another number to divide"));

mod(input1, input2);
console.log(mod(input1, input2));

/* Or we could create a variable to store the result and display it in a console log 
ex.:

const finalResult = mod(input1, input2)
console.log(finalResult);
*/
