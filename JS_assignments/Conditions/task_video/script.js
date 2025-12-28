let a = 10;

(a < 10) ? console.log(10) : a >= 10 && a <= 40 ? console.log("10 To 40") : a > 40 ? console.log("> 40") : console.log("Unknown");

let str = "Elzero Web School";
if (String(str.length * 2) === "34") {
    console.log("Good");
}

if (str.charAt(str.indexOf("W")).toLowerCase() === "w") {
    console.log("Good");
}

if (typeof(str.length) !== "string") {
    console.log("Good");
}

if (typeof(str.length) === "number") {
    console.log("Good");
}

if (`${str.slice(0, 6).repeat(2)}` === "ElzeroElzero") {
    console.log("Good");
}