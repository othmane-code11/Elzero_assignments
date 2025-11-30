let num = "10";
let t = true;

// Solution One
console.log(num * ++t); // 20

// Solution Two
console.log(+`${num * t}`); // 20

// Solution Three
console.log(+num + +num); // 20

// Solution Four
console.log(+`${+num + +num}`); // 20