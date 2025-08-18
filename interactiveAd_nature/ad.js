let img;
let imgH;
let imgW;
let font;
let imgX = [];
let imgY = [];
let imgA;
let numImages = 20;
let wereDoneHhere;


function setup(){
	createCanvas(800, 200);
	background(0);
	img = loadImage('../images/natureExperience.png');
	imgH = 150;
	imgW = 150;
	
	
	imgX[0] = width/2 + 100;
	imgY[0] = height/2;

	
	for (let i=1; i<=numImages; i++){
		imgX[i] = random(0, width);
		imgY[i] = random(0, height);
	}
	
	//limited clicks
	numClicks = 0;	
	
	weredoneHere = false;
}

function draw(){
	clear();
	background(0);	
	
	imgA = 255;
	
	// base image
	
	if(numClicks == 0){
		tint(255, 255, 255, imgA);
		image(img, imgX[0], imgY[0] - (imgH/2), imgH, imgW);
	}
	
	
	for (let i=1; i<=numClicks; i++){	
		imgA -= 10;
		tint(82, 161, 35, imgA);
		image(img, imgX[i], imgY[i] - (imgH/2), imgH, imgW);		
	}
	
	if(numClicks >= numImages){
		tint(255, 255, 255, 255);
		image(img, imgX[0], imgY[0] - (imgH/2), imgH, imgW);
		wereDoneHere = true;
	}
	
	console.log(numClicks);

}


function mousePressed() {  
	for (let i=0; i<=numClicks; i++){
		if(
			mouseX > imgX[i] - imgW &&
			mouseX < imgX[i] + imgW &&
			mouseY > imgY[i] - imgH &&
			mouseY < imgY[i] + imgH
		){
		 	if(numClicks <= numImages){
			 	numClicks += 1;
			}
		}
	}
	
	if(wereDoneHere){
		if(
			mouseX > imgX[0] - imgW &&
			mouseX < imgX[0] + imgW &&
			mouseY > imgY[0] - imgH &&
			mouseY < imgY[0] + imgH
		){
		 	window.open("https://www.youtube.com/watch?v=Hm3JodBR-vs&feature=emb_title", "_blank");
		}
	}
}

