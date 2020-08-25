var imgs = document.querySelectorAll(".abc");

imgs.forEach(function (img) {
  img.onmouseover = function (e) {
    const info = e.currentTarget;
    const myinfo = info.querySelector(".info");
    myinfo.style.visibility = "visible";
    myinfo.style.transform = "translateY(-112px)";
  };

  img.onmouseout = function (e) {
    const info = e.currentTarget;
    const myinfo = info.querySelector(".info");
    myinfo.style.transform = "translateY(-100px)";
    myinfo.style.visibility = "hidden";
  };
});

var serviceCard = document.querySelectorAll(".card");

serviceCard.forEach(function (mycard) {
  mycard.onmouseover = function (e) {
    const target = e.currentTarget;
    target.style.boxShadow = "1px 1px 2px 4px rgba(237, 242, 244, 0.5)";
    target.style.trasition = "all 0.8s ease-in";
    const svg = target.querySelector(".svgImg");
    const btn = target.querySelector(".redBtn");
    btn.classList.add("cardBtnshow");
    svg.style.fill = "#cc0000";
    svg.style.trasition = "all 0.5s";
  };
  mycard.onmouseout = function (e) {
    const target = e.currentTarget;
    target.style.boxShadow = "1px 1px 2px 4px rgba(237, 242, 244, 0.1)";
    target.style.trasition = "all 0.8s ease-in";
    const svg = target.querySelector(".svgImg");
    const btn = target.querySelector(".redBtn");
    btn.classList.remove("cardBtnshow");
    svg.style.fill = "#ffffff";
    svg.style.trasition = "all 0.8s ease-in";
  };
});

// shop scripts starts here
