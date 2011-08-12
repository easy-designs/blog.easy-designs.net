tweets = [];
int numTweets = 100;
int stl;
int[] colorArray;
int[] found;
int[] foundCount;
int width = window.innerWidth - 30;
int height = window.innerHeight - 30;
int centerX = width / 2;
int centerY = height / 2;
float cols = 0;
float rows = 0;
int circle_size = 15;
int circleID = numTweets+1;
boolean circleOver = false; 
float radius = height/3;
float circum = 3.6;
float radius2 = 0;
float circum2 = 0;
float degree = 0;
float radian = 0;
float degree2 = 0;
float radian2 = 0;
float x = 0;
float y = 0;
float x2 = 0;
float y2 = 0;
float counter = 0;
float rot = 0;
int[] col = {0, 0, 0};
float curveScale = 0;

// My audio demo in here is not so hot, so taking out until perfected...
/*
boolean dance = false;
float startedAt;
float now;
int beatIndex = 0;
int pos = 0;
int[] beatArray = {109,2141,2848,4863,5564,8273,8978,11021,11714,12382,13077,13747,13792,14445,14454,15113,15121,15809,16475,16486,17168,17839,18533,19200,19212,19896,20580,20591,21262,21918,22624,23292,23986,24657,25351,26021,26714,27382,27359,29077,29448};
float sd = 0;
window.Processing.data.sd = 0;
*/


void setup()
{
 	size(width, height);
 	frameRate(30);
	smooth();
	stroke(128);
	background(20);
	ellipseMode(CENTER);
	//rectMode(CENTER_RADIUS);
	
	//java -jar ttf2svg.jar ANNA____.ttf -o ana.svg
	font = loadFont;
	var arial = loadFont("ana.svg"); 
    textFont(arial, 14);
	
	init();
}

void init()
{
	stl = searchTermContext.length;
	
	colorArray = new int[stl];
	found = new int[stl];
	foundCount = new int[stl];
	
	
	for (int i = 0; i < colorArray.length; i++)
	{
		int c[] = new int[3];
		c[0] = random(30,255);
		c[1] = random(30,255);
		c[2] = random(30,255);
		colorArray[i] = c;
	}
	
	for (i = 0; i < found.length; i++)
	{
		found[i] = 0;
		foundCount[i] = 0;
	}	
  	TweetController.setCanvas(this);
	TweetController.init(searchTerm, searchTermContext, numTweets);
}

void draw()
{		
	for (int i = 0; i < tweets.length; i++)
	{	
		if(dist(tweets[i].myx, tweets[i].myy, mouseX, mouseY) < circle_size)
		{
			circleOver = true;
			circleID = i;
			update(tweets[i].foundContext);
		}
		else
		{
			window.Processing.data.updateVars = false;
		}
	}
	
	if(circleOver)
	{
		circleOver = false;
		strokeWeight(3);
		tweets[circleID].draw(true);
		showAvatar(tweets[circleID].imageUrl, tweets[circleID].myx, tweets[circleID].myy+20);
		
		int fp;
		int fc;
		
		if(tweets[circleID].foundContext > -1)
		{
			col[0] = colorArray[tweets[circleID].foundContext][0];
			col[1] = colorArray[tweets[circleID].foundContext][1];
			col[2] = colorArray[tweets[circleID].foundContext][2];
			fp = tweets[circleID].foundContext;
			fc = foundCount[fp];
		}
		else
		{
			col[0] = 100;
			col[1] = 100;
			col[2] = 100;
			fc = 1;
		}
		
		
		//console.log(fc)
		window.Processing.data.curveScale = fc;
		window.Processing.data.col = col;
		window.Processing.data.updateVars = true;
		
		circleID = numTweets+1;
	}
	strokeWeight(1);
	
	//Audio
	/*
	if(dance)
	{
		now = millis();
		if((now - startedAt) >= beatArray[beatIndex])
		{	
			
			sd = random(10,250);
			window.Processing.data.sd = sd;

			beatIndex++;
		}
		
		if(beatIndex >= beatArray.length)
		{
			dance = false;
		}
		*/
}

/*
void playAudio()
{
	startedAt = millis();
	$('#audio').get(0).play();
	dance = true;
}
*/

void update(int id)
{
	background(20);
	//PImage b;
	//b = loadImage("data/bg.jpg");
	//image(b, 0, 0);
	int c = (numTweets/2)-1;
	int e = 0;
	int offset = (numTweets/2)-10;
	/*
	cols = width / searchTermContext.length;
	rows = height / searchTermContext.length;
	
	noStroke();
	for (int i = 0; i < searchTermContext.length; i++)
	{
		for(int j = 0; j < searchTermContext.length; j++)
		{
			int rc = round(random(colorArray.length - 1));
			fill(colorArray[rc][0], colorArray[rc][1], colorArray[rc][2], 10);
			rect((j * cols), (i * rows), cols, rows);
		}
		
	}
	*/
	for (i = 0; i < tweets.length; i++)
	{	
		if(tweets[i].foundContext > -1)
		{
			fill(colorArray[tweets[i].foundContext][0], colorArray[tweets[i].foundContext][1], colorArray[tweets[i].foundContext][2], 70);
			if(i == circleID)
			{
				stroke(255, 255, 255, 100);
			}
			else
			{
				stroke(colorArray[tweets[i].foundContext][0], colorArray[tweets[i].foundContext][1], colorArray[tweets[i].foundContext][2], 60);
			}
			
			tweets[i].draw(false);
			//line(tweets[i].myx, tweets[i].myy, centerX, centerY);
			if(i < (numTweets/2)-1)
			{
				bezier(tweets[i].myx, tweets[i].myy, tweets[c].myx, tweets[c].myy, tweets[i+offset].myx, tweets[i+offset].myy, centerX, centerY);
				c++;
			}
			else
			{
				bezier(tweets[i].myx, tweets[i].myy, tweets[e].myx, tweets[e].myy, tweets[i-offset].myx, tweets[i-offset].myy, centerX, centerY);
				e++;
			}
			
			//Tweet oldTweet = tweets[i];
			//bezier(tweets[i].myx, tweets[i].myy, tweets[i].myx+(sin(tweets[i].myx)*i), tweets[i].myy+(cos(tweets[i].myy)*i), tweets[i].myx, tweets[i].myy, centerX, centerY)
		}
		else
		{
			fill(50);
			stroke(100,100,100,50);
			if(i < (numTweets/2)-1)
			{
				bezier(tweets[i].myx, tweets[i].myy, tweets[c].myx, tweets[c].myy, tweets[i+offset].myx, tweets[i+offset].myy, centerX, centerY);
				c++;
			}
			else
			{
				bezier(tweets[i].myx, tweets[i].myy, tweets[e].myx, tweets[e].myy, tweets[i-offset].myx, tweets[i-offset].myy, centerX, centerY);
				e++;
			}
			tweets[i].draw(false);
		}
		fill(50);
		stroke(255);
		tweets[i].draw(false);
	}
	
	fill(0);
	ellipse(centerX, centerY, circle_size*2, circle_size*2);
	fill(255);
	ellipse(centerX, centerY, circle_size, circle_size);
	
	text('Searched 100 Twitter posts for ' + searchTerm, 10, 10);
	text('Searched results for:', 10, 30);
	for (i = 0; i < searchTermContext.length; i++)
	{
		fill(200,200,200,50);
		if(i == id) rect(78, 50 + 20 * i, 100, 20);
		(found[i] == 1) ? fill(colorArray[i][0], colorArray[i][1], colorArray[i][2]) : fill(60);
		text(searchTermContext[i] + ': ' + foundCount[i], 80, 50 + 20 * i);
		//curveScale = (foundCount[i] + 0.1);
		
		stroke(50);
		if(found[i] == 0) line(80, 60 + 20 * i, 170, 60 + 20 * i);
		
	}
	fill(255);
	text('Rollover nodes to see tweet.', 10, 70 + 20 * i);
	text('Click nodes to visit.', 10, 90 + 20 * i);
	
	line(300, 0, 300, height);
}

void mouseClicked()
{
	for (int i = 0; i < tweets.length; i++)
	{
		if(dist(tweets[i].myx, tweets[i].myy, mouseX, mouseY) < circle_size)
		{
			link('http://twitter.com/' + tweets[i].user, '_blank');
		}
	}
}

void addTweet(userId, fromUser, imageUrl, text, foundContextTerm)
{
	degree = circum * counter;
	radian = (degree/180) * PI;
	
	degree2 = circum2 * counter;
	radian2 = (degree2/180) * PI;
	
	x = cos(radian)*radius + centerX;
	y = sin(radian)*radius + centerY;
	
	x2 = cos(radian2)*radius2 + centerX;
	y2 = sin(radian2)*radius2 + centerY;
	
	
	tweets[tweets.length] = new Tweet(userId, fromUser, imageUrl, text, x, y, rot, foundContextTerm, x2, y2);
	
	rot += TWO_PI / numTweets;
	counter += 100/numTweets;
	
	circum2 += 0.1;
	radius2 += 1.8;
}

void foundSubSearchItem(int index)
{
	found[index] = 1;
	foundCount[index]++;
}

void setMax()
{
	int max = 0;
	for(int i = foundCount.length; i > 1; i--)
	{
		int min = foundCount[i];
		max = (max > foundCount[i-1]) ? max : foundCount[i-1];
	}
	window.Processing.data.max = max;
	//console.log('max: ' + window.Processing.data.max);
}

void showAvatar(String url, int x, int y)
{
	//console.log("Loading: " + url);
	$(function ()
	{
	  var img = $('#pic').attr('src', url);
	});
	$("#avatar").css( { "left": (x + 12) + "px", "top": y + "px", "visibility": "visible" } );
}

class Tweet
{
	String message;
	String user;
	int userId;
	int id;
	String imageUrl;
	String[] lines = [];
	float myx;
	float myy;
	float myx2;
	float myy2;
	float myRot;
	int foundContext;
	
	Tweet(int userId, String user, String imageUrl, String message, float x, float y, float rotation, int foundContextTerm, float x2, float y2)
	{
		this.imageUrl = imageUrl;
		this.userId = userId;
		this.user = user;
		this.message = message;
		myx = x;
		myy = y;
		myx2 = x2;
		myy2 = y2;
		id = counter;
		myRot = rotation;
		this.foundContext = foundContextTerm;
		//console.log("found " + this.foundContext);
		splitLines();
	}
	
	void draw(boolean value)
	{
		pushMatrix();
		translate(myx, myy);
		if(foundContext > -1)
		{
			fill(colorArray[foundContext][0], colorArray[foundContext][1], colorArray[foundContext][2], 50);
			stroke(colorArray[foundContext][0], colorArray[foundContext][1], colorArray[foundContext][2]);
		}
		
		if(!value)
		{
			ellipse(0, 0, circle_size, circle_size);
			fill(255);
			rotate(myRot);
			text(user,10, -10);
			popMatrix();
		}
		else
		{
			if(foundContext > -1)
			{
				fill(colorArray[foundContext][0], colorArray[foundContext][1], colorArray[foundContext][2], 100);
			}
			ellipse(0, 0, circle_size, circle_size);
			rotate(myRot);
			text(user, 10, -10);
			popMatrix();
			fill(0);
			rect(myx + 5, myy + 5, 280, 100);
			fill(255);
			for (int i=0; i < lines.length; i++)
			{
				text(lines[i], myx + 70, myy + 10 + (15*i));				
			}
		}
		//strokeWeight(1);
		//stroke(255);
		//noStroke();
		//ellipse(myx2, myy2, circle_size/2, circle_size/2);
	}
	
	String splitLines()
	{
		String s = "";
		for(int i = 0; i < message.length; i++)
		{
			if (s.length > 30 || (s.length > 20 && message.substr(i, 1) == " "))
			{
				lines[lines.length] = s;
				if (lines.length > 5)
				{
					return;
				}
				s = "";
			}
			else
			{
				s = s + message.substr(i, 1);
			}
		}
		lines[lines.length] = s;
	}
}