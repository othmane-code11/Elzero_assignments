let myString = "EElllzzzzzzzeroo";

// Elzero
console.log(myString.split("").filter((e, index) => e != myString[--index]).join(""));