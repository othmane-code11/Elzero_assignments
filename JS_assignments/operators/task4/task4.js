let points = 10;
let t = true;
points += points / ++t - t;
// Write Your Code Here

console.log(points); // 13

points = ++points - points / t + --t;
// Write Your Code Here

console.log(points); // 8;