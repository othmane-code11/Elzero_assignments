let nums = [2, 12, 11, 5, 10, 1, 99];

// 500
console.log(nums.reduce((n, m) => m % 2 ? n + m : n * m, 1));