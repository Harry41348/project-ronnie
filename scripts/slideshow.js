var i = 0;
var images = [];
var time = 5000;

images[0] = 'imgs/header_images/image_1.jpg';
images[1] = 'imgs/header_images/image_2.jpg';
images[2] = 'imgs/header_images/image_3.jpg';
images[3] = 'imgs/header_images/image_4.jpg';
images[4] = 'imgs/header_images/image_5.jpg';


function changeImg() {
  var el = document.getElementById("landingpage-header");
  // Background image
  el.style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0,0,0,.3)), url(\"" + images[i] + "\")";
  // Animations
  el.style.animation = "none";
  el.offsetHeight;
  el.style.animation = "slideshowAnim 5s linear infinite";

  if(i < images.length-1){
    i++;
  } else {
    i = 0;
  }

  setTimeout("changeImg()", time);
}

window.onload = changeImg;