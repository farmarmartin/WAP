var ball = {
    x:0,
    y:0,
    r:40,
    direction: p5.Vector.random2D(),
    speed: 5,
    move: function (){
        let newx = this.x += this.direction.x * this.speed;
        let newy = this.y += this.direction.y * this.speed;
        if(newx<0 || (newx + this.r) > 600 ){
            this.direction.x  *= -1;
           /* this.speed += 3;*/
        }
        if(newy < 0 || (newy + this.r) > 400){
            this.direction.y *= -1;
            /*this.speed += 3;*/
        }
    },
    draw: function(){
        ellipse(this.x, this.y, 2 * this.r);
    },
};



function setup(){
    createCanvas(600, 400)
    ball.x = 600 / 2;
    ball.y = 400 / 2;
}

function draw(){
    background(0);
    ball.move();
    if(ball.speed > 80){
        ball.speed = 3;
    }
    ball.draw();
}