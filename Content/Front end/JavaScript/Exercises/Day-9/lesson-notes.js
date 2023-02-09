/* 
    Switch
*/

// status could be "connected" or "disconnected"

const invoiceStatus = "paid";

if (invoiceStatus === "created" || invoiceStatus === "create") {
  console.log("invoice is created");
} else if (invoiceStatus === "sent") {
  console.log("invoice is sent");
} else if (invoiceStatus === "paid") {
  console.log("invoice is paid");
} else if (invoiceStatus === "settled") {
  console.log("invoice is settled");
}

// switch equivalent

switch (invoiceStatus) {
  case "create":
  case "created":
    console.log("invoice is created");
    break;
  case "sent":
    console.log("invoice is sent");
    break;
  case "paid":
    console.log("invoice is paid");
    break;
  case "settled":
    console.log("invoice is settled");
    break;
  default:
    console.log("unknown status");
    break;
}

/* 
    Object "bracket notation"
    Property accessors
*/

const user = { firstName: "john", username: "john21" };
console.log(user.firstName);
console.log(user["firstName"]);

const preference = "firstName";

console.log(user[preference]); // this is used to get a value of a property contained in an object; on this case, it will get the firstName value, since it's the prefered property set by the user;

/* 
    Spread operator
*/

// copy of an array

const animals = ["cat", "dog", "elephant", "chicken"];
console.log(animals);

const animalsCopy1 = animals; // these are just two variables referring the same array (they link to it; if the array items change, it will change for all the variables refering it);

const animalsCopy2 = [...animals, "snake"]; // with the spread operator we can create two different arrays, each one refered by their own variable; this is safer to use in big projects when we need to use the original array;
console.log(animalsCopy2);

// creating a copy of an object (this is useful to update the properties and values in an object)
const invoice = { amount: 500, status: "paid" };
const invoiceCopy = { ...invoice, status: "unpaid", due: "today" };
console.log(invoice, invoiceCopy);
// mostly replaces Object.assign({}, invoice)

/*
    Destructuring
*/

// used to assign some arrays' items value to variables;
const [animal1, animal2] = ["cat", "dog", "elephant", "chicken"]; 
console.log(animal1, animal2); // this will give the value of the first two array positions [0 and 1] -> cat dog;

// works with objects too
const newInvoice = { amount: 500, status: "paid" };
const { amount, status } = newInvoice;
console.log(amount, status);
