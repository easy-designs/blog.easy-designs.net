int width = 300;
int height = 250;
int range = 0;
float x;
float y;
float sd;
float val;
float mean;
int[] col = {0, 0, 0};
String drawMethod = "PATTERN"; 

void setup()
{
 	size(width, height);
 	frameRate(30);
	smooth();
	background(20);
	
	font = loadFont;
	var arial = loadFont("ana.svg"); 
    textFont(arial, 14);
	
	x = 0; 
	y = height; 
	sd = 200;
	range = width; 
	sd = height;
	mean = (range / sd);
	drawCurve(drawMethod);
}

void draw()
{
	if(window.Processing.data.updateVars) updateVars();
}

void updateVars()
{
	float destination = (height / window.Processing.data.max) * window.Processing.data.curveScale;
	
	float distance = destination - sd;
	sd += distance / 2;
	
	mean = (range / sd);
	background(20);
	
	stroke(40);
	
	fill(255);
	
	for(int i = height; i > 0; i-=(height/window.Processing.data.max))
	{
		line(0, i, width, i)
	}
	
	text(0 + '.', 1, height-15);
	text(round(window.Processing.data.max) + '.', 1, 0);
	
	col = window.Processing.data.col;
	stroke(col[0], col[1], col[2]);
	
	drawMethod = "PATTERN";
	drawCurve(drawMethod);
	drawMethod = "PI";
	stroke(50);
	drawCurve(drawMethod);
	
}

void drawCurve(String drawMethod)
{
	for (x = 0; x < range; x++)
	{
		switch(drawMethod)
		{
			case "PI" :
				val = sq(sin(((x*PI) - mean) / (range)))*sd;
			break;
			case "TWO_PI" :
				val = sq(sin(((x*TWO_PI) - mean) / (range)))*sd;
			break;
			case "HALF_PI" :
				val = sq(sin(((x*HALF_PI) - mean) / (range)))*sd;
			break;
			case "FLIP" : 
				val = sq(cos(((x*PI) - mean) / (range)))*sd;
			break;
			case "DROP_OFF" :
				val = sq(sin(((x*PI) - mean) / (range)))*sd;
				val = sqrt(val*sd);
			break;
			case "PINCH" :
				val = sq(sin(((x*PI) - mean) / (range)))*sd;
				val = sq(val)/sd;
			break;
			case "PATTERN" :
				val = sq(sin(((x*PI) - mean) / (range)))*sd;
				val = sq(val * cos(x))/sd;
			break;
		}
		point(x, y - val);
	}
}









