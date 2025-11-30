let points = 10;
let t = true;
// Write Your Code Here
points = ((++points * ++t) / t) + t;

console.log(points); // 13

// Write Your Code Here
points = ++points - points / t-- + t;
console.log(points); // 8;