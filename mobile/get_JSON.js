function get_IMDB_data() {
	$.getJSON("https://graph.facebook.com/?ids=http://www.imdb.com/title/tt1345836/" , function(imdb_data) {
		console.log(imdb_data);
		console.log(imdb_data['http://www.imdb.com/title/tt1345836/']['likes']);
		console.log(imdb_data['http://www.imdb.com/title/tt1345836/']['link']);
		$('#imdb-front').append('<h2>' + imdb_data['http://www.imdb.com/title/tt1345836/']['likes'] + ' Likes on facebook!!!' + '</h2>');
		$('#imdb-back').append('<p>' + imdb_data['http://www.imdb.com/title/tt1345836/']['description'] + '</p>');
		$('#imdb-link').attr("href", imdb_data['http://www.imdb.com/title/tt1345836/']['link']);
	});
}
function get_Facebook_data() {
		$.getJSON("https://graph.facebook.com/thinkuhi" , function(fb_data) {
			console.log(fb_data);
			
			//console.log(fb_data['likes']);
			//console.log(fb_data['link']);
			//$("<img/>").attr("src", fb_data['cover']['source']).appendTo("#image");
			//$('#facebook-front').append('<img src="' + fb_data['cover']['source'] + '"/>');
			//$('#facebook-back').append('<img src="' + fb_data['cover']['source'] + '"/>');
		});	
	}

/**** You need to set this up!! ********/	
function get_Facebook_full_data() {
		$.getJSON("facebook_feed.php" , function(fb_full_data) {
			console.log(fb_full_data);
			console.log(fb_full_data['data'][0]['from']['name']);
			console.log(fb_full_data['data'][0]['message']);
			/*console.log(fb_full_data['likes']);
			console.log(fb_full_data['link']);
			$("<img/>").attr("src", fb_full_data['cover']['source']).appendTo("#image");
			$('#facebook-front').append('<img src="' + fb_full_data['cover']['source'] + '"/>');
			$('#facebook-back').append('<img src="' + fb_full_data['cover']['source'] + '"/>');*/
		});	
	}
/******************************************/

function get_Google_data() {
	$.ajax({
		type:"GET",
		url:'https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=http://batman-news.com/category/the-dark-knight-rises/feed/',
		dataType:'jsonp',
		async:false,
		success:function(data){
			console.log(data);
			console.log(data['responseData']['feed']['entries'][0]['content']);
			console.log(data['responseData']['feed']['entries'][0]);
			$("#google-front").html(data['responseData']['feed']['entries'][0]['content']);
			$("#google-back").html(data['responseData']['feed']['entries'][3]['content']);
		}
	});	
}
function get_feed_data() {
		$.getJSON("data.php" , function(feed_data) {
			console.log(feed_data);
			console.log(feed_data['college'][0]);
			$('#feed-front').append('<h2>' + feed_data['college'][0]+'</h2><p>' + feed_data['adr1'][0] +'</p><p>'  + feed_data['town'][0] +'</p><p>'  + feed_data['county'][0]+ '</p><p>'  + feed_data['postcode'][0] + '</p>');
		});	
	}