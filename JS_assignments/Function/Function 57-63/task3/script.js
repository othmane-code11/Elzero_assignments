function ageInTime(theAge) {
    // Your Code Here
    if (theAge < 10 || theAge > 100) {
        console.log("Age Out Of Range");
    } else {
        let Months = theAge * 12;
        let weeks = theAge * 52;
        let days = theAge * 365;
        let hours = days * 24;
        let min = hours * 60;
        let Seconds = min * 60;
        console.log(`Your Age in months => ${Months},\nin weeks => ${weeks},\nin days => ${days},\nin hours => ${hours},\nin minutes => ${min},\nin seconds => ${Seconds}`);
    }
}

// Needed Output
ageInTime(110); // Age Out Of Range
ageInTime(38); // Months Example => 456 Months