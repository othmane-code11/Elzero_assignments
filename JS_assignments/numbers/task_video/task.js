let a = 1_00;
let b = 2_00.5;
let c = 1e2;
let d = 2.4;

console.log(Math.min(a, b, c, d));

console.log(a ** Math.floor(d)); // a & d => 10000

// Get 2 from d with 4 methods
console.log(Math.round(d));
console.log(Math.trunc(d));
console.log(+((d).toFixed()));
console.log(parseInt(d));

// b & d 
console.log((parseInt(b) / Math.ceil(d)).toFixed(2)); //66.67 => string
console.log(+(parseInt(b) / Math.ceil(d)).toFixed()); //67 => number