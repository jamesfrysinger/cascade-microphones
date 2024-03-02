
<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
	<title>Stereo Blumlein Bar | Cascade Ribbon Microphones</title>
	<meta name="description" content="The Cascade Stereo Blumlein Bar is a perfect replacement or upgrade for your stereo microphone placement setup."/>


	<?php
		include('../header.php'); 
	?>
	<script>
		var page = 'Microphones';
	</script>
<div class="container microphone-detail">
	<div class="minMax">
	
		<div class="breadcrumbs">
			<p><a href="microphones">Microphones</a> > Stereo Blumlein Bar</p>
		</div>



		<section class="prod-buy clearfix">
			<div class="prod-buy-photos left clearfix">
				<div class="prod-large-photo right">
					<img src="../images/prod-images/blumlein-bar/blumlein-bar-main.png" alt="Stereo Blumlein Bar Product Photo" />
				</div>
				
			</div>
			<div class="prod-buy-details right">
				<div class="prod-buy-details-vert">
					<h1>Stereo Blumlein Bar</h1>
					<h4>Microphone Shockmount</h4>
					<div class="prod-buy-form">
						<!--<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<p class="select-color">Select color</p>
							<select class="dropkick">
								<option>Stereo Blumlein Bar $115.00</option>
							</select>
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="RFHR2LZCYT79L">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							<button class="primary-btn" name="submit" alt="PayPal - The safer, easier way to pay online!">Buy Now</button>
							<p class="pay-pal"><sub>*You will be redirected to PayPal</sub></p>
						</form>-->
						<p class="select-color">Temporarily out of stock</p>
					</div>
				</div>
			</div>
			
		</section>

		<section class="product-details grey-bg clearfix">
			<div class="left left-col">
				<article class="prod-desc">
					<h4>Stereo Blumlein Bar</h4>
					<p>Stereo microphone attachment.</p>
					
				</article>

			</div>

			<div class="right right-col">
				<article class="prod-specs">
					<div class="prod-specs-list">
						<ul>
							<li class="prod-specs-list-cell">Type</li>
							<li class="prod-specs-list-cell">Stereo Blumlein Bar</li>
						</ul>
					</div>
					<div class="prod-includes">
						<h4>Included</h4>
						<ul>
							<li>Stereo Blumlein Bar</li>
						</ul>
					</div>
				</article>
			</div>
		</section>	

		<section></section>	

	</div>
</div>



<script>
	// 2. This code loads the IFrame Player API code asynchronously.
	var tag = document.createElement('script');

	tag.src = "//www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	// 3. This function creates an <iframe> (and YouTube player)
	//    after the API code downloads.
	var player;
	function onYouTubeIframeAPIReady() {
		player = new YT.Player('player', {
			height: '390',
			width: '640',
			videoId: 'nBeQCI5nMaI',
			playerVars: {
				'rel': 0, 
				'showinfo': 0
			},
			events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange,
			}
		});
	}

	// 4. The API will call this function when the video player is ready.
	function onPlayerReady(event) {

		var $videoPlayer = $('.video-player');

		var showVideo = function() {
			$videoPlayer.addClass('playing');
		}
		$videoPlayer.on('click', function() {
			event.target.playVideo();
			showVideo();
		});

		$('.video-thumb').on('click',function() {
			player.loadVideoById($(this).data('video'));
			showVideo();
		});

	}

	// 5. The API calls this function when the player's state changes.
	//    The function indicates that when playing a video (state=1),
	//    the player should play for six seconds and then stop.

	function onPlayerStateChange(event) {

	}
	function stopVideo() {
		player.stopVideo();
	}

</script>

<?php include('../footer.php') ?>