
function setup(){
    frameRate(3)
    createCanvas(windowWidth, windowHeight)
    textSize(30)
    textFont('Courier New')
    background(0)
   
}
function draw(){
    text("MARTIN", mouseX - 40, mouseY)
    fill(random(255), random(255), random(255))
}

function mouseClicked(){
    location.reload()
}
