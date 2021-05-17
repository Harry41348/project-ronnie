function myFunction(x) {
  x.classList.toggle("change");

  var menu = document.getElementById("menu");
  if (menu.style.opacity != 0){
    menu.classList.toggle("nav__active");
  } else {
    menu.classList.toggle("nav__active");
  }
}

function hover(element, location) {
  element.setAttribute('src', location);
}

function changeImage(imgs) {
  var expandImg = document.getElementById("expandedImg");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}