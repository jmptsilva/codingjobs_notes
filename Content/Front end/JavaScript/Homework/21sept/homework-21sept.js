const allDivs = document.querySelectorAll("div");

// Timeout = delay the start

/* setTimeout(() => {
        allDivs.forEach(function (div) {
        div.style.backgroundColor = "brown";
        div.style.color = "white";
      });
}, 3000); */

// Interval = execute every x ms
// we have to define an increament for each iteration or else it will run all the iterations at the same time;

/* setTimeout(() => {
    allDivs.forEach(function (div, index) {
      div.style.backgroundColor = "brown";
      div.style.color = "white";
    });
}, index*1000); */     // will not work, index is out of scope

allDivs.forEach(function (div, index) {
  setTimeout(function (){
    div.style.backgroundColor = "brown";
    div.style.color = "white";
  }, (index+1)*1000)
});
/* this is the best approach, with less code and a simple logic - we use the index to increament more
time at each iteration (application of style on one div);
with setInterval we have to create a const with the fucntion to clearInterval later;
we also need a counter variable to make the executions one by one and stop the cycle*/
