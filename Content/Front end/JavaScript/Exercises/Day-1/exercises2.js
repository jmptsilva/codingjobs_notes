// create and select
let listNames = ["Joao", "Marta", "Theo", "Rachel", "Anastacia"];
console.log(listNames[3]);

// number of elements in array
console.log(listNames.length);

// add a new element
listNames.push("Carlos");
// or listNames[listNames.length] = 'Fabio';

console.log(listNames.length);

// last value from the array, without index number (useful for large arrays)

console.log(listNames[listNames.length - 1]);

console.log(listNames.slice(-1));