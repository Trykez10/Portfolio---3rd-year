function openMenu() {
  const getMenuList = document.getElementById("MenuLists");

  // Navigation Bar Strokes
  const line1 = document.getElementById("line1");
  const line2 = document.getElementById("line2");
  const line3 = document.getElementById("line3");

  if (getMenuList.classList.contains("hidden")) {
    getMenuList.classList.remove("hidden");
    getMenuList.classList.add("flex");

    requestAnimationFrame(function () {
      getMenuList.classList.remove("opacity-0", "translate-x-20");
      getMenuList.classList.add("opacity-100", "translate-x-0");
      line1.classList.add("translate-y-5");
      line2.classList.add(
        "absolute",
        "transform",
        "translate-y-1/2",
        "rotate-45"
      );
      line3.classList.add(
        "absolute",
        "transform",
        "translate-y-1/2",
        "-rotate-45"
      );
    });
  } else {
    getMenuList.classList.remove("opacity-100", "translate-x-0");
    getMenuList.classList.add("opacity-0", "translate-x-20");
    line1.classList.remove("translate-y-5");
    line2.classList.remove(
      "absolute",
      "transform",
      "translate-y-1/2",
      "rotate-45"
    );
    line3.classList.remove(
      "absolute",
      "transform",
      "translate-y-1/2",
      "-rotate-45"
    );
    setTimeout(function () {
      getMenuList.classList.add("hidden");
    }, 400);
  }
}
