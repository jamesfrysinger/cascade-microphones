
<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
	<title>Fat Head II Shockmount (Previous Model) | Cascade Ribbon Microphones</title>
	<meta name="description" content="The Cascade Fat Head II Ribbon Microphone Shockmount is a perfect replacement or upgrade for your Fat Head II Ribbon Microphone."/>

	
	<?php
		include('header.php'); 
	?>
	<script>
		var page = 'Microphones';
	</script>
<div class="container microphone-detail">
	<div class="minMax">
	
		<div class="breadcrumbs">
			<p><a href="microphones">Microphones</a> > Fat Head II Shockmount (Previous Model)</p>
		</div>



		<section class="prod-buy clearfix">
			<div class="prod-buy-photos left clearfix">
				<div class="prod-large-photo right">
					<img src="images/prod-images/fat-head-ii-shockmount-prev/fat-head-ii-shockmount-prev-main.png" alt="Fat Head II Shockmount (Previous Model) Product Image" />
				</div>
				
			</div>
			<div class="prod-buy-details right">
				<div class="prod-buy-details-vert">
					<h1>Fat Head II Shockmount <span>(Previous Model)</span></h1>
					<h4>Microphone Shockmount</h4>
					<div class="prod-buy-form">
						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<p class="select-color">Select color</p>
							<label for="select-color" style="display:none;">Select Color</label>
							<select class="dropkick" name="os0" id="select-color">
								<option value="#">Black Fat Head II Shockmount $49.00</option>
							</select>
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="A4BWDR39FB7NE">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" alt="">
							<button class="primary-btn">Buy Now</button>
							<p class="pay-pal"><sub>*You will be redirected to PayPal</sub></p>
						</form>
					</div>
				</div>
			</div>
			
		</section>

		<section class="product-details grey-bg clearfix">
			<div class="left left-col">
				<article class="prod-desc">
					<h4>Fat Head II Shockmount (Previous Model)</h4>
					<p>33mm Universal Shockmount. For use with previous model Fat Head II Microphone and similar sized microphones.</p>
					
				</article>

			</div>

			<div class="right right-col">
				<article class="prod-specs">
					<div class="prod-specs-list">
						<ul>
							<li class="prod-specs-list-cell">Type</li>
							<li class="prod-specs-list-cell">Metal Microphone Shockmount</li>
						</ul>
					</div>
					<div class="prod-includes">
						<h4>Included</h4>
						<ul>
							<li>Microphone Shockmount</li>
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

<? include('footer.php') ?>