function multiply(...n) {
    let res = 1;
    for (let i = 0; i < n.length; i++) {
        if (typeof n[i] == "number") {
            res *= parseInt(n[i]);
        } else {
            continue;
        }
    }
    console.log(res);
}

multiply(10, 20); // 200
multiply("A", 10, 30); // 300
multiply(100.5, 10, "B"); // 1000