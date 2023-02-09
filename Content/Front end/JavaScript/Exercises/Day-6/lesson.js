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
