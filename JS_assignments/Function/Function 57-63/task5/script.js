function createSelectBox(startYear, endYear) {
    // Your Code Here
    document.write(`<section>`);
    for (let i = startYear; i <= endYear; i++) {
        document.write(`<option value="${i}">${i}</option>`);
    }
    document.write(`</section>`);
}
createSelectBox(2000, 2021);