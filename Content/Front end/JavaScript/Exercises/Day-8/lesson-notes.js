/* 
    Ternary Operator
*/

const isConnected = false;

if (isConnected) {
  console.log("You are connected");
} else {
  console.log("You are not connected");
}

// with a ternary

console.log(isConnected ? "You are connected" : "You are not connected"); // ? is like an if; : is like an else.

// in a template string (backticks)

const message = `You are ${isConnected ? "" : "not "}connected`;
console.log(message);

// in an object declaration
// without ternary
const user = { username: "toto", status: null };

if (isConnected) {
  user.status = "connected";
} else {
  user.status = "disconnected";
}

// with a ternary
const user2 = {
  username: "toto2",
  status: "isConnected" ? "connected" : "disconnected",
};

/* 
      Forms
  */

// forms have a specific event "submit";
// buttons of type submit are automatically submiting the parent form after a click;

const form = document.querySelector("form");
form.addEventListener("submit", (event) => {
  event.preventDefault();
  console.log("Form was submitted", event);
});
