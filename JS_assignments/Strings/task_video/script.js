let a = "Elzero Web School";

// Include this Methods [slice, charAt]
console.log(a.charAt(2).toUpperCase() + a.slice(3, 6)); // Zero

// 8 H
console.log(a.charAt(13).toUpperCase().repeat(8));

//return array
console.log(a.split(" ", 1)); // ['Elzero']

//Use Only substr Method + template literals
console.log(`${a.substr(0, 6)} ${a.substr(-6)}`);

// Solution Must be dynamic and string may change
console.log(`${a.charAt(0).toLowerCase()}${a.substring(1, a.length - 1).toUpperCase()}${a.charAt(a.length - 1).toLowerCase()}`);