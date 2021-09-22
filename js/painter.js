let canvas = document.getElementById('coordinate');
const radius = "R"
const half_radius = "R/2"

function draw_coordinate(context, x0, y0, x1, y1) {
    context.globalAlpha = 0.6;
    context.beginPath();
    context.lineWidth = 2;
    // draw X - coordinate
    context.moveTo(225, 10);
    context.lineTo(225, 440);
    // draw Y - coordinate
    context.moveTo(440, 225);
    context.lineTo(10, 225);
    context.stroke();
    // draw Rect
    context.fillStyle = "blue";
    context.fillRect(140, 225, 86, -172);
    context.stroke();
    // draw Arc
    context.moveTo(225, 225);
    context.arc(225, 225, 86, 5 * Math.PI / 2, 3 * Math.PI);
    context.stroke();
    //draw triangle
    context.moveTo(225, 225);
    context.lineTo(310, 225);
    context.lineTo(225, 310);
    context.fill();

    context.fillStyle = "black";
    context.font = "15px Arial serif";
    context.fillText("X", 440, 230);
    context.fillText("Y", 225, 15);
    context.font = "20px Arial serif";
    context.fillText(half_radius, 440 - (0.2 * 215) - (0.8 * 215 / 2), 255);
    context.fillText(half_radius, (10 + 0.2 * 215) * 2, 225 + 20);
    context.fillText(radius, 225 - 20, 0.2 * 215);
    context.fillText(half_radius, 225 - 30, 375 - (0.2 * 215));
}

draw_coordinate(canvas.getContext('2d'), 225, 10, 225, 440);
