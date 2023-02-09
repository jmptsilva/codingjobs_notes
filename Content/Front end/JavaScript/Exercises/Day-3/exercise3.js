const animal = { // an object is full of variables (the properties);
  name: "scooper",
  type: "dog",
  age: 3,
  legs: 4,
  wings: 0,
};

/* animal.name.toUpperCase(); won't work!
we need to overwrite the previous entry, like with index = index + 1 (sames as: index = index + 1)
as shown below:
*/

animal.name = animal.name.toUpperCase();

console.log(animal.name);

if (animal.wings === 0) {
    console.log("I have " + animal.legs + " legs and no wings!");
  } else {
    console.log("I have " + animal.legs + " legs and" + animal.wings + " wings!");
    // alternative console.log(`I have ${animal.legs} legs and ${animal.wings} wings!`);
  }

