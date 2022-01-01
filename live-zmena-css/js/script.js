let path = document.getElementById("source");
let i = 2;

document.getElementById("btn").onclick = function() {switch_css()};
function switch_css(){
    i == 1 ? (path.href = "css/style1.css", i = 2) : 
    i == 2 ? (path.href = "css/style2.css", i = 3) :
    i == 3 ? (path.href = "css/style3.css", i = 4) :
    i == 4 ? (path.href = "css/style4.css", i = 1) : null;
}