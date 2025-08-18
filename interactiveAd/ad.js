let img;
let imgH;
let imgW;
let imgX;
let imgY;
let font;


function setup(){
	createCanvas(800, 200);
	background(0);
	img = loadImage('../images/swan@2x.png');
	imgH = 150;
	imgW = 150;
	imgX = width/2;
	imgY = height/2;
	image(img, imgX, imgY - (imgH/2), imgH, imgW);
}

function draw(){
	clear();
	background(0);
	if (
			mouseX > imgX - imgW &&
			mouseX < imgX + imgW &&
			mouseY > imgY - imgH &&
			mouseY < imgY + imgH
		){
			imgX = random(0, width);
			imgY = random(0, height);
		}

	image(img, imgX, imgY - (imgH/2), imgH, imgW);
}
