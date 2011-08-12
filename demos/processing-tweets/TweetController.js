var TweetController = {
	searchTerm:null,
	searchTermContext:null,
	canvas:null,
	timer:null,
	numTweets:0,
	
	setCanvas:function(canvas)
	{
		this.canvas = canvas;
	},

	init:function(searchTerm, searchTermContext, numTweets)
	{	
		this.searchTerm = searchTerm;
		this.numTweets = numTweets;
		this.searchTermContext = searchTermContext;
		var self = this;
		
		window.setTimeout(function() { self.getTweets(self.searchTerm, self.searchTermContext, self.numTweets); }, 100);
	},
	
	getTweets:function(searchTerm, searchTermContext, numTweets)
	{
		var self = this;
		
		var canPlayType = $('#audio')[0].canPlayType("audio/ogg");
		if(canPlayType.match(/maybe|probably/i)) {
			$('#audio').attr('src', 'Beat4.ogg');
		} else {
			$('#audio').attr('src', 'Beat4.mp3');
		}
		
		// start
		if(typeof HTMLAudioElement == 'object' || typeof HTMLAudioElement == 'function') {
			$('#audio').bind('canplay', function() {
				jQuery.ajax({
			        url: 'http://search.twitter.com/search.json?rpp=' + numTweets + '&q=' + escape(searchTerm),
			        dataType: 'jsonp',
			        success: function (data) {
						self.sortData(data);
						self.stop();
			        }
			    });		
			});
		} else {
			jQuery.ajax({
		        url: 'http://search.twitter.com/search.json?rpp=' + numTweets + '&q=' + escape(searchTerm),
		        dataType: 'jsonp',
		        success: function (data) {
					self.sortData(data);
					self.stop();
		        }
		    });
		}	
	},
	
	sortData:function(data)
	{
		var self = this;
		for (var i = 0; i < data.results.length; i++) {
			var result = data.results[i];
			//console.log(result);
			result.text = result.text.toLowerCase();
			result.foundContextTerm = -1;
			for(var j = 0; j < self.searchTermContext.length; j++)
			{
				if(result.text.search(self.searchTermContext[j]) != -1)
				{
					result.foundContextTerm = j;
					self.canvas.foundSubSearchItem(j);
					break;
				}
				if(result.foundContextTerm == j) break;
			}					
		}
		data.results.sort(self.arraySort);
		for (i = 0; i < data.results.length; i++)
		{
			result = data.results[i];
			self.canvas.addTweet(result.from_user_id, result.from_user, result.profile_image_url, result.text, result.foundContextTerm);
		}
		self.canvas.update();
		self.canvas.setMax();
		//Audio
		//self.canvas.playAudio();
	},
	
	arraySort:function(a,b)
	{
		a = a.foundContextTerm;
		b = b.foundContextTerm;
		return a == b ? 0 : (a < b ? -1 : 1);
	},
	
	stop:function()
	{
		if (this.timer)
		{
			//console.log("Stopping...");
			window.clearInterval(this.timer);
			this.timer = null;
		}
	}
};