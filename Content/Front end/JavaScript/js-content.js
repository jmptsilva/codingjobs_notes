
// Selectors

// We manipulate the elements in HTML by establishing a relation with a reference.
// First, we get the reference:

const firstDiv = document.getElementById("firstdiv");
console.log(firstDiv, firstDiv.classList);

const listOfDivs = document.getElementsByClassName("my-class");
console.log(listOfDivs);

const firstDiv2 = document.querySelector("div#firstdiv");
console.log(firstDiv2);
const listOfDivs2 = document.querySelectorAll("div#firstdiv");
console.log(listOfDivs2);



/* ------------------------------------------------------------------------------------ */



// Arrays

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

/* 
    Array map
*/

const nbrs = [10, 20, 30, 40, 50];

const newNbrs = nbrs.map(function (nb) {
  // map is used to create a new array by transforming, that we need to store (with the same number of elements)
  return nb * 10; // unlike forEach, that only performs a loop for external purposes
}); // if we don't return, the new array will be undefined in each index

console.log(newNbrs);

/* Exercise 3

    - Reverse array (2 different approaches)
 */

// const nbrs = [1, 2, 3, 4, 5]

/* // using reverse();
const reversedNbrs = nbrs.reverse();
console.log(reversedNbrs); */

console.log(nbrs);

let newNbrsx = [];

for (let index = nbrs.length - 1; index >= 0; index--) {
    newNbrs.push(nbrs[index]);
}

console.log(newNbrsx);

/* Exercise 1

    - console log the username of the second user;
    - console log the street of the first user;
    - console log the second zipcode of the second user;

*/

/* const users = [ // array with objects. property without "", string with "", seprated by a : . pairs are separated with , .
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

console.log(users[0].username);

console.log(users[0].addresses[0].street);

console.log(users[1].addresses[0].zipcode);
 */
/* 
    Exercise 2

    - transform all the usernames into uppercases;
    - add a city inside addresses

*/

/* for (let index = 0; index < users.length; index++) {     // this could be simpler with a forEach loop;
  users[index].username = users[index].username.toUpperCase();
  users[index].addresses.forEach(function (addr) {
    addr.city = "NY";
  });
}

console.log(users);
 */

/* 
    Exercise 3

    - Reverse array (2 different approaches)
*/

// const nbrs = [1, 2, 3, 4, 5]

/* // using reverse();
const reversedNbrs = nbrs.reverse();
console.log(reversedNbrs); */

/* console.log(nbrs);

let newNbrs = [];

for (let index = nbrs.length - 1; index >= 0; index--) {
    newNbrs.push(nbrs[index]);
}

console.log(newNbrs); */

/* 
    Exercise 4

*/

/* We want to display a list of animals in the page with their weights in parenthesis ("Cat (4kg)")
    - create a container to add all the items;
    - for each element in the array create an element containing the text ("Xxxxx (xxxkg)") and insert it in the container. The weight here should be in a child element of the li (a SPAN); */

    const animals = [
        { name: "cat", weight: 2 },
        { name: "dog", weight: 10 },
        { name: "parrot", weight: 3 },
      ];
      
      /* let container = document.querySelector(".container");
      
      const newUl = document.createElement("ul");
      container.appendChild(newUl);
      
      animals.forEach(function (animal) {
        const newLi = document.createElement("li");
        const span = document.createElement("span");
        container.appendChild(newLi);
        newLi.textContent = `${animal.name} `;    // we need to appendChild after or text
        newLi.appendChild(span);
        span.textContent = `(${animal.weight} Kg)`;
        span.style.fontWeight = "600";
      }); */
      
      
      /* 
          Exercise 5
      
          - using a map, create a new array, based on animals, where the name is capitalized and the weight is converted to 
      */
      
      function capFirstLetter(string) {
          return string[0].toUpperCase() + string.slice(1).toLowerCase();
      }
      
      const newAnimals = animals.map(function (animal) {
          animal.name = capFirstLetter(animal.name);
          animal.weight = animal.weight * 1000;
          return animal
      })
      
      console.log(newAnimals);


/**
 * Array filter
 */
 const nbs = [5, 6, 10, 80, 12, 150, 2];
 const filteredNbs = nbs.filter(function (nb) {
   if (nb <= 10) {
     return true;
   } else {
     return false;
   }
 });
 // new array will contain the element we keep with the return true [5, 6, 10, 2]
 console.log(filteredNbs);
 
 // many shorthands can be used
 //1. return only the boolean expression
 //2. use an arrow function
 //3. if there is only one param, parentheses can be omitted (prettier will put them back)
 //4. we can use an implicit return, by omitting the curly braces and removing the return keyword
 const filteredNbs2 = nbs.filter((nb) => nb <= 10);
 console.log(filteredNbs2);

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




/* ------------------------------------------------------------------------------------ */


// loops

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
  
  const nameList = ['John', 'Telma', 'Louise', 'Sadia'];
    nameList.forEach(function (element, index) { // for each item of the array, call our function
      console.log(element, index);
    });
  


/* ------------------------------------------------------------------------------------ */


// conditions (if, else if, else)

const age = 21;

if (age >= 21) {
  console.log("you are old enough");
} else {
    // < 21 
    console.log('you are too young')
}


const secretNumber = 42;

let userInput = parseInt(prompt("Give me a number"));
// or we could use let userInput = +prompt("Give me a number"); but check notes below *

if (secretNumber === userInput) {
  console.log("Congrats, you got it!");
} else {
  console.log("Ohh, try again!");
}

if (secretNumber === userInput) {
  console.log("Congrats, you got it!");
} else if (userInput < secretNumber) {
  console.log("Try a bigger number!");
} else {
  console.log("Try a smaller number!");
}

/* * We can use a + sign behind a prompt (or others) to force its input string to change the type to a number!
However, it can be confusing on a big file of code (difficult to find amongst the lines of code) so we use parseInt
command behind the prompt command */

/* Comparison operators
 https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Expressions_and_Operators

strict equality (best practice): ===
(==)
strict inequality (best practice): !==
(!=)
>
<
>=
<= */


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



/* ------------------------------------------------------------------------------------ */


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


 // sorting numbers from input


  /* user inputs to sort numbers */

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



  /* ------------------------------------------------------------------------------------ */


// Object

/* * order is guaranteed in an array
* there is no guaranteed order in an object (it doesn't really matter)
*/
// declaring a new object
// it can contains anything!
const user = {
 lastName: "Monnet",
 isConnected: false,
 lastVisit: "2022-09-19T00:00:00Z",
 nbOfVisits: 200,
 firstName: "Guillaume",
 children: [{ name: "Boris 2" }, { name: "x ae a12" }],
 address: { street: "", city: "" },
 call: function () {
   // do something
 }
};
console.log(user);

// retrieving an object's property
console.log(user.nbOfVisits);

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

  /* ------------------------------------------------------------------------------------ */




    /**
 * Creating and inserting elements
 *
 * https://developer.mozilla.org/en-US/docs/Web/API/Document/createElement
 */
// creates an element in the memory
const newDiv = document.createElement("div");
console.log(newDiv);

// we have then to insert it in the body (or in another element)
document.body.appendChild(newDiv);

// exercise

const fruits = ["banana", "apple", "kiwi", "tomato", "passionfruit"];

const firstDivx = document.querySelector("div");
// inside the selector string, we use the same terminology as CSS: . for class; nothing for tag; # for id;

fruits.forEach(function (fruit) {
  const newP = document.createElement("p");
  firstDivx.appendChild(newP); // a variable cannot be a property of the objects document.body
  newP.textContent = fruit;
});

// Exercise

/* 
  - create an array of strings;
  - add a button in the page (with text load);
  - listen for a click on the button;
  - when the button is clicked display the strings in the page in p elements (you need a loop, 
    to create an element, to change its text and insert it in the page);
 */

    const fruitsx = ["banana", "apple", "kiwi", "tomato", "passionfruit"];

    const btn = document.querySelector("button");
    
    btn.addEventListener("click", function () {
      fruitsx.forEach(function (fruit) {
        const newP = document.createElement("p");
        document.body.appendChild(newP);
        newP.textContent = fruit;
      });
    });


  /* ------------------------------------------------------------------------------------ */




/**
 * Events
 *
 * https://developer.mozilla.org/en-US/docs/Web/Events
 */

document.body.addEventListener("click", function () {
  console.log("body was clicked");
});
// be careful, some events are triggered a huge amount of time (here for each pixel scrolled)
document.addEventListener("scroll", function () {
  console.log("scrolling");
});
// the event listener is giving us an "event" object as the first parameter of our callback
document.body.addEventListener("click", function (event) {
  console.log("body was clicked", event);
});



  /* ------------------------------------------------------------------------------------ */



/**
 * Timers
 */
// execute our function after 5s (5000ms)
setTimeout(function () {
  console.log("thing");
}, 5000);

// execute our function every 200 ms
setInterval(function () {
  console.log("thing2");
}, 200);


  /* ------------------------------------------------------------------------------------ */


/**
 * Classes
 * https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Classes
 *
 */

// basic JS object
const user = {
    firstName: "John",
    lastName: "Doe",
    username: "jd24",
    connected: true,
  };
  
  class Human {
    height;
    weight;
  }
  
  class User extends Human {
    firstName;
    lastName;
    username;
    connected;
  
    // automatically called when you create a new instance
    constructor(firstName, lastName, username) {
      // super is used to initialized parent classe(s)
      super();
      this.firstName = firstName;
      this.lastName = lastName;
      this.username = username;
      this.connected = false;
    }
  
    // function inside a class = method (no function keyword)
    sayMyName() {
      console.log(`My name is ${this.firstName} ${this.lastName}`);
    }
  }
  
  // create 3 instances of the User class
  const user1 = new User("John", "Doe", "jd24");
  const user2 = new User("Jane", "Doe", "jd36");
  const user3 = new User("Patricia", "Jackson", "pj56");
  console.log(user1);
  console.log(user2);
  console.log(user3);
  user2.sayMyName();
  
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
  