let mix = [1, 2, 3, "E", 4, "l", "z", "e", "r", 5, "o"];

// Elzero
console.log(mix.map((e) => isNaN(e) ? e : "").reduce((n, m) => n + m));