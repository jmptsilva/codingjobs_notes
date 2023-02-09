const allDivs = document.querySelectorAll(".the-class");
console.log(allDivs);

// this is how we can style elements: we just need to use .style.*CSS rule* = "...";
allDivs.forEach(function (div) {
  div.style.backgroundColor = "brown";
  div.style.border = "1px solid black";
  div.style.color = "white";
});

/* whem we deal with groups of elements, we use plural (like in the name of the variable);
inside the loop we use singular word (the same term as the variable, but in singular)
as it only works on an element at a time;
 */

allDivs.forEach(function (div) {
  div.textContent = "prefix " + div.textContent;
});
//  ! the full reference is needed (div.textContent); only div is not enough!!!

/* allDivs.forEach(function (div) {
  div.textContent += " for";
}); 
// to add after!*/

allDivs.forEach(function (div) {
  div.classList.add("new-class");
});
// to remove just use .remove instead of .add !

// If we only want to change a single div, we use the index parameter:
allDivs.forEach(function (div, index) {
  if (index === 0) {
    div.textContent = div.textContent + " first";
  } else {
    div.textContent = div.textContent + " suffix";
  }  
});