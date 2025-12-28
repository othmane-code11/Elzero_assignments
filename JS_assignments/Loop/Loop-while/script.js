let friends = ["Ahmed", "Sayed", "Ali", 1, 2, "Mahmoud", "Amany"];
let index = 0;
let counter = 0;

for (let i = index; i < friends.length; i++) {
    if (typeof friends[i] === "string" && friends[i][index] !== friends[index][index]) {
        counter++;
        console.log(`${counter} => ${friends[i]}`);
    }
}
// Output
// "1 => Sayed"
// "2 => Mahmoud"