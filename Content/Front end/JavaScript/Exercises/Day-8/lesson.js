/**
 * https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX
 */

// with XMLHttpRequest (not used that much, it's old, but still good)
// https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest
function reqListener() {
  console.log(this.responseText);
}

const req = new XMLHttpRequest();
req.addEventListener("load", reqListener);
req.open("GET", "https://petstore.swagger.io/v2/pet/999");
//req.send();

// with a fetch()
// https://developer.mozilla.org/en-US/docs/Web/API/fetch
fetch("https://petstore.swagger.io/v2/pet/999")
  .then((response) => {
    console.log(response);
    return response.json();
  })
  .then((pet) => {
    console.log(pet);
  });

console.log("end of code");
