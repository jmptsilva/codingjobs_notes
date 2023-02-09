/* const array = [50, 56, 89, 54, 65];

for (let index = 0; index < array.length; index++) {
  const element = array[index];
  
} */
/* this will index each element in the console; if the iterations exceed the number
  of elements in the array, it will give an undefined entry; e.g. in this array we have 5 items, if we
  do 6 iterations, the list will be: 50, 56, 89, 54, 65, undefined; (the were no more numbers after 65, so undefined*/

const carBrand = ["opel", "mazda", "mercedes", "toyota", "citroen"];

for (let index = 0; index < carBrand.length; index += 2) {
  console.log(carBrand[index].toUpperCase());
}

for (let index = carBrand.length - 1; index >= 0; index -= 2) {
  console.log(carBrand[index].toUpperCase());
}

/* we could use the array.reverse to display it backwards, but it would remove/substitute
the original array */

// -----

for (let index = 0; index < carBrand.length; index++) {
  console.log(carBrand[index].toUpperCase());
}

// or using the forEach loop

carBrand.forEach(function (element, index) {
  if (index % 2 === 1) {
    console.log("forEach, 2on2 ", element, index);
  }
});

// ------- // -------------

// for ... of loop
for (const item of carBrand) {
  // can be read: for each item of the array carBrand create a new constant and display it on console;
  console.log("for...of ", item);
}

for (const item of carBrand) { // we can't use index in for-of loop , because is doesn't have access to it
  if (index % 2 === 1) {
    console.log(item);
  }
}

// Array.methods

// forEach

/* const nameList = ['John', 'Telma', 'Louise', 'Sadia'];
  nameList.forEach(function (element, index) { // for each item of the array, call our function
    console.log(element, index);
  }); */
