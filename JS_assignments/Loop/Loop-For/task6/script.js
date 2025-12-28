let start = 0;
let swappedName = "elZerO";

swappedName = swappedName.split('');
console.log(swappedName.length);
for (let i = start; i < swappedName.length; i++) {
    if (swappedName[i] === swappedName[i].toLowerCase()) {
        swappedName[i] = swappedName[i].toUpperCase();
    } else {
        swappedName[i] = swappedName[i].toLowerCase();
    }
}
console.log(swappedName.join(""));
// Output
// "ELzERo"