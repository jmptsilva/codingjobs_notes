/* 
    Array filter
*/

// the filter method has a return

const nbrs = [5, 6, 20, 55, 160];

const nbrsFiltered = nbrs.filter(function (nbr) {
  if (nbr <= 20) {
    return true;
  } else {
    return false;
  }
});

// the new array will contain the array items that respect the condition (if the condition returns true)
console.log(nbrsFiltered);

// shorthand version:

const nbrsFiltered2 = nbrs.filter(function (nbr) {
  return nbr <= 20;
});

// even smaller shorthande version:

const nbrsFiltered3 = nbrs.filter((nbr) => nbr <= 20);