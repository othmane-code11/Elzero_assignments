// Task 1
let job = "Support";
let salary = 0;

switch (job) {
    case "Manager":
        salary = 8000;
        break;
    case "IT":
    case "Support":
        salary = 6000;
        break;
    case "Developer":
    case "Designer":
        salary = 7000;
        break;
    default:
        salary = 4000;
}

console.log(salary);
// Task 2
let holidays = 11;
let money = 0;

if (holidays == 0) {
    money = 5000;
    console.log(`My Money is ${money}`);
} else if (holidays == 1 || holidays == 2) {
    money = 3000;
    console.log(`My Money is ${money}`);
} else if (holidays == 1 || holidays == 2) {
    money = 3000;
    console.log(`My Money is ${money}`);
} else if (holidays == 3) {
    money = 2000;
    console.log(`My Money is ${money}`);
} else {
    console.log('Unknown');
}