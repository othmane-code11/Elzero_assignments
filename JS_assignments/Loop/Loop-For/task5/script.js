let friends = ["Ahmed", "Sayed", "Eman", "Mahmoud", "Ameer", "Osama", "Sameh"];
let letter = "a";

let zero = letter.length - letter.length;
let count = zero;
for (let i = zero; i < friends.length; i++) {
    if (friends[i][zero].toLowerCase() !== letter) {
        console.log(`${++count} => ${friends[i]}`);
    }
}
// Output
// "1 => Sayed"
// "2 => Eman"
// "3 => Mahmoud"
// "4 => Osama"
// "5 => Sameh"