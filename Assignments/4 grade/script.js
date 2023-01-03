const arr = [80, 78, 50];

let sum = 0;
for (let i = 0; i < arr.length; i++) {
  sum += arr[i];
}

let average = sum / arr.length;

let grade = "";
if (average <= 100 && average >= 90) {
  grade = "A";
} else if (average < 90 && average >= 80) {
  grade = "B";
} else if (average < 80 && average >= 70) {
  grade = "C";
} else if (average < 70 && average >= 60) {
  grade = "D";
} else if (average < 60 && average >= 50) {
  grade = "E";
} else {
  grade = "F";
}

console.log("Your Grade is: " + grade);
