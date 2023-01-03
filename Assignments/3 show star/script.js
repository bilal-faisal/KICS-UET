function showStars(a) {
  for (let i = 1; i <= a; i++) {
    str += "*".repeat(i) + "\n";
  }
}
let str = "";
showStars(5);
console.log(str);
