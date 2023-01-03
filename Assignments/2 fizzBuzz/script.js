const FizzBuzz = function (num) {
  if (typeof num !== "number") {
    return "Not a number";
  } else if (num % 3 === 0 && num % 5 === 0) {
    return "FizzBuzz";
  } else if (num % 3 !== 0 && num % 5 !== 0) {
    return num;
  } else if (num % 3 === 0) {
    return "Fizz";
  } else if (num % 5 === 0) {
    return "Buzz";
  }
};

console.log("-33 -> ", FizzBuzz(-33));
console.log(" 56 -> ", FizzBuzz(56));
console.log(" 45 -> ", FizzBuzz(45));
console.log("  0 -> ", FizzBuzz(0));
