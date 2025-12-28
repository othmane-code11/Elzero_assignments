/*
    Loop Challenge
*/

let myAdmins = ["Ahmed", "Osama", "Sayed", "Stop", "Samera"];
let myEmployees = ["Amgad", "Samah", "Ameer", "Omar", "Othman", "Amany", "Samia", "Anwar"];

let count_admins = 0;
for (let i = 0; i < myAdmins.length; i++) {
    if (myAdmins[i] !== "Stop") count_admins++; else break;
}
document.write(`<div>We Have ${count_admins} Admins</div>`);
for (let i = 0; i < myAdmins.length; i++) {
    if (myAdmins[i] === "Stop") break;
    document.write("<p>" + `_`.repeat(80) + "</p>");
    document.write(`The Admin For Team ${i + 1} Is ${myAdmins[i]}`);
    document.write("<h3>Team Members:</h3>");
    let count = 0;
    for (let j = 0; j < myEmployees.length; j++) {
        if (myAdmins[i][0] == myEmployees[j][0]) {
            document.write(`<p>- ${++count} ${myEmployees[j]}</p>`);
        }
    }
}
