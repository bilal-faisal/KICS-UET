const num = 8;
let isPrime = true;
if (num > 0) {
  num === 1 ? (isPrime = false) : (isPrime = true);
  for (let i = 2; i < num; i++) {
    if (num % i === 0) {
      isPrime = false;
    }
  }

  if (isPrime === true) {
    console.log(num + " is a prime number ");
  } else {
    console.log(num + " is not a prime number ");
  }
} else {
  console.log("Enter a positive number");
}
