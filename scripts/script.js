function myFunction(x) {
  x.classList.toggle("change");

  var menu = document.getElementById("menu");
  if (menu.style.opacity != 0){
    menu.style.opacity = 0;
    menu.style.visibility = "hidden";
  } else {
    menu.style.opacity = 1;
    menu.style.visibility = "visible";
  }
} 