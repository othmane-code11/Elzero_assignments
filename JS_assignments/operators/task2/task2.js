let num = 3;
let b = true;
// Solution One
console.log(num * ++b); // 6

// Solution Two
console.log(+`${num * b}`); // 6

// Soultion Three
console.log(num + num); // 6

// Soultion Four
console.log(+`${num + num++}`); // 6

// Solution Five
console.log(num++ + b); // 6

// Solution Six
console.log(++num); // 6