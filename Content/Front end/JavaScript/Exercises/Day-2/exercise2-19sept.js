const input1 = parseInt(prompt("Give me one number"));
const input2 = parseInt(prompt("Give me another number"));
const input3 = parseInt(prompt("Give me another number"));
const input4 = parseInt(prompt("Give me a last number"));

const inputListSmall = [];
const inputListGreater = [];

/* if (input1 <= 10) {
  inputListSmall.push(input1);
} else {
  inputListGreater.push(input1);
}

console.log(inputListSmall, inputListSmall.lenght);
console.log(inputListGreater, inputListGreater.lenght);

if (input2 <= 10) {
  inputListSmall.push(input2);
} else {
  inputListGreater.push(input2);
}

console.log(inputListSmall, inputListSmall.lenght);
console.log(inputListGreater, inputListGreater.lenght);

if (input3 <= 10) {
  inputListSmall.push(input3);
} else {
  inputListGreater.push(input3);
}

console.log(inputListSmall, inputListSmall.lenght);
console.log(inputListGreater, inputListGreater.lenght);

if (input4 <= 10) {
  inputListSmall.push(input4);
} else {
  inputListGreater.push(input4);
}

console.log(inputListSmall, inputListSmall.lenght);
console.log(inputListGreater, inputListGreater.lenght); */

function sort(a) {
  if (a <= 10) {
    inputListSmall.push(a);
  } else {
    inputListGreater.push(a);
  }
}

console.log(inputListSmall);
console.log(inputListGreater);

sort(input1);
sort(input2);
sort(input3);
sort(input4);

console.log(inputListSmall);
console.log(inputListGreater);

/* We could also insert the prompt line (const 'number' = prompt...) inside the function
(without defining the parameter 'a' inside the parenthesis);
then we just need to call the function 4 times - sort ();

function sort() {
  const nbr = parseInt(prompt('Give me a number'));
  if (nbr <= 10) {
    inputListSmall.push(nbr);
  } else {
    inputListGreater.push(nbr);
  }
}

console.log(inputListSmall);
console.log(inputListGreater);

sort();
sort();
sort();
sort();

console.log(inputListSmall);
console.log(inputListGreater);

*/
for (let index = 0; index < 4; index++) {
    
}