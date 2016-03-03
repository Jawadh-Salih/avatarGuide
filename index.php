<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Avatar Guide</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/jplayer.blue.monday.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/main.css" type="text/css" media="all">

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.jplayer.min.js" type="text/javascript"></script>
<script src="main.js" type="text/javascript"></script>
	
		
	</head>
<body>
	<div class="page">
		<div class="header">
						<ul>
				<li class="selected">
					<a href="index.html">Home</a> 
				</li>
				<li>
					<a href="about.html">About</a> 
				</li>
				<li>
					<a href="news.html">News</a> 
				</li>
				<li>
					<a href="contact.html">Contact</a> 
				</li>
			</ul>
			<div class="featured">
				
			</div>
		</div>
		<div class="body">
			<div class="sidebar">
				<div>
					<h3>Connect</h3>
					<a href="" id="twitter">twitter</a> <a href="" id="fb">fb</a> <a href="" id="googleplus">google+</a>
				</div>
				<div>
					<div>
						<h3>How Can I Help?</h3>
						<ul>
							<li>
								<h4><a href="news.html">Link 1</a></h4>
							</li>
							<li>
								<h4><a href="news.html">Link 2</a></h4>
								
							</li>
							<li>
								<h4><a href="news.html">Link 3</a></h4>
								
							</li>
						</ul>
					</div>
				</div>
				</div>
				
					<?php require("VideoStream.php");
	//function streamVideo() {
  $video_path = 'media/bryan.mp4';
  $stream = new VideoStream($video_path);
  $stream->start(); 
  //}
?>
			<div class="content">
			<div class="jp-video jp-video-270p">
                <div class="jp-type-single">
                    <div id="jquery_jplayer_2" class="jp-jplayer"></div>
                    <div id="jp_interface_2" class="jp-interface">
                        <div class="jp-video-play"></div>
                        <ul class="jp-controls">
                            <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                            <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                            <li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
                            <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                            <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                        </ul>
                        <div class="jp-progress">
                            <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                            </div>
                        </div>
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                        </div>
                        <div class="jp-current-time"></div>
                        <div class="jp-duration"></div>
                    </div>
                    <div id="jp_playlist_2" class="jp-playlist">
                    </div>
                </div>
            </div>
<div>
			<input name="Button1" type="button" value="next" style="width: 68px; height: 25px" class="newStyle2" /></div>

	</div>
        </div>
        
		<div class="footer">
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="news.html">News</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
	</div>
</div>

	</body>
</html>