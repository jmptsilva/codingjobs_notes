/* in the case below, we din't need to define as a constant:
we are not going to use it for something else;
 */
const divId = (document.getElementById("firstdiv").textContent = "hello John");

const allDivs = document.querySelectorAll("div.otherdivs");
console.log(allDivs);

// we cannot use allDivs to style because it's an array;

allDivs.forEach(function (element) {
  element.style.backgroundColor = "red";
});

//NOTE: the forEach doesn't exist with getElementsByClass

/* we could do this one by one:
allDivs[0].style.backgroundColor = "red";
allDivs[1].style.backgroundColor = "red";
allDivs[2].style.backgroundColor = "red";
allDivs[3].style.backgroundColor = "red";

With forEach we simplify the code*/