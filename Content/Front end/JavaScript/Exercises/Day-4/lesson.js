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
