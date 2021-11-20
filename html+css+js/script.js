function day(){
    document.getElementsByTagName("body")[0].style.background = "#003CFF";
    document.getElementsByClassName("desert")[0].style.background = "#E8E800";
    document.getElementsByClassName("pyramid")[0].style.background = "#EBB842";
    document.getElementsByClassName("pyramid2")[0].style.background = "#E2B240";
    document.getElementsByClassName("sun")[0].style.opacity = "100%";
    document.getElementsByClassName("moon")[0].style.opacity = "0%";
    console.log("Day");
}

function night(){
    document.getElementsByTagName("body")[0].style.background = "rgb(8, 8, 37)";
    document.getElementsByClassName("desert")[0].style.background = "darkgoldenrod";
    document.getElementsByClassName("pyramid")[0].style.background = "rgb(153, 152, 74)";
    document.getElementsByClassName("pyramid2")[0].style.background = "rgb(112, 111, 52)";
    document.getElementsByClassName("sun")[0].style.opacity = "0%";
    document.getElementsByClassName("moon")[0].style.opacity = "100%";
    console.log("Night");
}

document.getElementById("butt").onclick = function() {day()};
document.getElementById("butt2").onclick = function() {night()};