$(function () {
  let imgArr = [
    "images/2.jpg",
    "images/1.jpg",
    "images/0.jpg",
    "images/3.jpeg",
    "images/4.jpeg",
  ];
  let i = 0;

  function changeImg() {
    $("img").fadeOut(400, function () {
      $("img").attr("src", imgArr[i % imgArr.length]);
      $("img").fadeIn(500);
    });
  }

  function enable(target) {
    $(target).css("opacity", "1").css("cursor", "pointer");
  }

  function disable(target) {
    $(target).css("opacity", "0.7").css("cursor", "default");
  }

  $("#icon1").on("click", function () {
    if (i !== 0) {
      enable("#icon2");
      i--;
      changeImg();
      if (i === 0) {
        disable("#icon1");
      }
    }
  });

  $("#icon2").on("click", function () {
    if (i !== imgArr.length - 1) {
      enable("#icon1");
      i++;
      changeImg();
      if (i === imgArr.length - 1) {
        disable("#icon2");
      }
    }
  });
});
