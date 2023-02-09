/* 
    Exercise 1

    - filter the array to keep elemens that contain an "a";
*/

/* const fruits = ["tomato", "pineapple", "cucumber", "eggplant", "cherry"];

const fruitsA = fruits.filter((fruit) => fruit.includes("a")); */

// we can use logic operrators && || ! ex.: fruit.includes("a")) && fruit.includes("p"));

/*

// if we searched for the items with the first letter:

return fruit.startsWith("a");

OR

return fruit[0] === "a";

*/

/* console.log(fruitsA); */

// if we wanted to use a function to do multiple searchs, we could use:
/* function filterItems(array, query) {
  return array.filter((element) =>
    element.toLowerCase().includes(query.toLowerCase())
  );
} */

// then:

/* console.log(filterItems(fruits, "ap"));
console.log(filterItems(fruits, "cu"));
console.log(filterItems(fruits, "er"));
 */

/* 
    Exercise 2

    Filter the array by calories, and only keep fruits with calories > 20
*/

/* const fruits = [
  { name: "tomato", calories: 10 },
  { name: "apple", calories: 34 },
  { name: "orange", calories: 57 },
  { name: "strawberry", calories: 37 },
]; */

/* const fruitsCal = fruits.filter((fruit) => fruit.calories > 20);

console.log(fruitsCal); */

/* 
    Exercise 3

    - Create a Dog class that has a name and a bark() method
    - the bark method should console.log "Woof woof, I am Fluppy!"
    - create a new instance of the Dog
    - call the bark method on the Dog instance
*/

class Dog {
  
  constructor(name) {
    this.name = name;
  }

  bark() {
    return `Woof woof, I am ${this.name}!`;
  }

}


const dog1 = new Dog("Luffy");
const dog2 = new Dog("Dart");

console.log(dog1, dog1 instanceof Dog); // better to check with a comparison between prototypes - check if they have the same inheritance;

dog1.bark();
console.log(dog1.bark());

dog2.bark();
console.log(dog2.bark());


