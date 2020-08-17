window.addEventListener("scroll", () => {

  var menu = document.querySelector(".header")
  var y = window.scrollY
  if (y>16) {
    menu.classList.add("scroll")
  }
  else {
    menu.classList.remove("scroll")
  }
})
