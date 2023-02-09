/* 
        Ajax
*/

// with XMLHttpRequest

function reqListener() {
  console.log(this.responseText);
}

const req = new XMLHttpRequest();
req.addEventListener("load", reqListener);
req.open("GET", "https://petstore.swagger.io/v2/pet/999");
req.send();

// using fetch()

fetch("https://petstore.swagger.io/v2/pet/999").then((response) => {
  // fetch creates a promise and then schedules an execution of a function after the fetch is finished!
  console.log(response);
  return response.json().then((data) => {
    console.log(data);
  });
}); // to use this data we would use a loop with data (ex: data.forEach ...); essentially we treat data as an array

