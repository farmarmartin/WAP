let img = document.getElementById("pic");

img.onmouseover = function() {bigger(img)};
img.onmouseout = function() {resetSize(img)}
function bigger(img) {
    img.style.width = "800px";
    img.style.height = "auto";
    img.style.left = "calc(50% - 400px)";
  }
  
  function resetSize(img) {
    img.style.width = "20em";
    img.style.height = "auto";
    img.style.left = "calc(50% - 10em)";
  }