



var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

if(isMobile.any()) {
	$('html').addClass('mobile');
}



var CMClassManager = CMClassManager || {

	_init:function() {

		$('.nav-item').has('.navigation-dropdown').addClass('has-menu');

	}
}
CMClassManager._init();


var DropKick = DropKick || {
	_init:function() {

		DropKick.$dropKick = $('.dropkick')
		DropKick.$jumpTo = $('.dropkick-jump');
		DropKick.$htmlBody = $('html,body');

		DropKick.$dropKick.dropkick();

		DropKick.$jumpTo.dropkick({
			change: function (value, label) {
				var targetPosition = $('#'+this.value).offset().top-30;
				DropKick.$htmlBody.animate({ scrollTop: targetPosition}, 600);
			}
		});
	}
}
DropKick._init();



var CMMobileNav = CMMobileNav || {

	_init:function() {

		CMMobileNav.$mobileNavBtn = $('.mobile-nav-btn');
		CMMobileNav.$mobileNavMenu = $('nav.header-nav');
		CMMobileNav.$body = $('body');
		CMMobileNav.$window = $(window);
		CMMobileNav.className = 'open';
		CMMobileNav._openCloseMenu();
	},
	_openCloseMenu:function() {
		CMMobileNav.$mobileNavBtn.on('click', function() {
			if(!CMMobileNav.$mobileNavMenu.hasClass(CMMobileNav.className)) {

				CMMobileNav.$mobileNavMenu.addClass(CMMobileNav.className);
				CMMobileNav.$mobileNavBtn.addClass(CMMobileNav.className);
				CMMobileNav.$body.css({overflow: 'hidden'});

			} else {

				CMMobileNav.$mobileNavMenu.removeClass(CMMobileNav.className);
				CMMobileNav.$mobileNavBtn.removeClass(CMMobileNav.className);
				CMMobileNav.$body.css({overflow: 'auto'});

			}
		});

		CMMobileNav.$window.on('resize',function() {
			if(CMMobileNav.$window.width() > 768) {

				CMMobileNav.$mobileNavMenu.removeClass(CMMobileNav.className);
				CMMobileNav.$mobileNavBtn.removeClass(CMMobileNav.className);
				CMMobileNav.$body.css({overflow: 'auto'});
				
			}
		});

		CMMobileNav.$mobileNavMenu.on('click', function() {
			CMMobileNav.$mobileNavMenu.removeClass(CMMobileNav.className);
			CMMobileNav.$mobileNavBtn.removeClass(CMMobileNav.className);
		});
	}
}
CMMobileNav._init();



var SetPage = {
	_init:function() {

		SetPage.page = page;

		$('.nav-item > a').each(function() {
			
			var $this = $(this);

			if($this.text() == SetPage.page) {
				$this.addClass('active')
			}

		});

	}
}
SetPage._init();



var loadGallery = {
	init:function() {
		$('a.gallery').featherlightGallery({
			previousIcon: '«',
			nextIcon: '»',
			galleryFadeIn: 300,

			openSpeed: 300
		});
	}
}


if($('.microphone-detail').length) loadGallery.init();


var audioPlayers = {
	init:function() {
		document.addEventListener('DOMContentLoaded', function() {
		    new GreenAudioPlayer('.audio-video-page .ready-player-1', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-2', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-3', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-4', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-5', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-6', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-7', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-8', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-9', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-10', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-11', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-12', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-13', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-14', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-15', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-16', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-17', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-18', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-19', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-20', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-21', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-22', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-23', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-24', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-25', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-26', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-27', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-28', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-29', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-30', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-31', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-32', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-33', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-34', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-35', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-36', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-37', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-38', { stopOthersOnPlay: true });
		    new GreenAudioPlayer('.audio-video-page .ready-player-39', { stopOthersOnPlay: true });
		});

			
		

		audioPlayers.collapseAudioSamples();
	},
	collapseAudioSamples:function() {

		$('.audio-sample-list').each(function() {

			var $this = $(this);
			var $loadMore = null;

			if($this.children('li').length > 3) {
				$this.addClass('collapse');
				$loadMore = $this.find('li:nth-child(3)').append('<span class="load-more" />');
			}
		
			$this.find('.load-more').on('click', function() {
				$this.removeClass('collapse');
			});

		});

		
	}
}


var changeMainProdImg = {
	init:function() {

		$('.microphone-detail .dropkick').dropkick({
		  change: function () {
		    value = this.value;
		    
		    $('select.dropkick option').each(function() {
		    	var $this = $(this);

		    	if($this.attr('value') == value) {
		    		$('.prod-large-photo img').attr('src',$this.data('src'))
		    	}
		    })
		  }
		});

	}
}
changeMainProdImg.init();


if($('.audio-video-page').length) audioPlayers.init();




