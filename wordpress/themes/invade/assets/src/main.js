/**
*
* @author: niko
* @date: 2012.10.23
* @info: execute
*
**/

define(function(require) {

	var $ = require('jquery');

	//loader
	$(function(){

		$('#loading').hide();

		if ( ($.browser.msie && $.browser.version < 10 ) || typeof document.querySelector !== 'function' ) {
			location.href = $('#logo').attr('href') + '/wp-content/themes/invade/browser.html';
			return false;
		}

		$('#wrapper').show();
		$('#footer').show();

		$('.to-search').click(function(){
			$('#s').focus();
		});

		$('.to-cat').click(function(){
			$('#category').click();
		});

		$('.to-top').click(function(){
			$('html, body').stop().animate( {scrollTop:0}, 500);
		});

		$('.to-bottom').click(function(){
			$('html, body').stop().animate( {scrollTop: $(document).height()+'px'}, 500);
		});

		$('.to-comment').click(function(){
			$('html, body').stop().animate( {
				scrollTop: $(document).height()+'px'
			}, 500, function(){
				$('#author').focus();
			});
		});

		var Monitor = require('./module-monitor');

		//trigger appendNode-className Monitor
		var bookMonitor = new Monitor($('#book-post-list .item'), 'info', $('#book-desc'), 0);
		bookMonitor.init();

		//about page
		var aboutMonitor = new Monitor($('#about'), 'info', $('#book-desc'), 0);
		aboutMonitor.init();

		//cat book	
		var bookCat = new Monitor($('#category'), 'info', $('#book-desc'), 0);
		bookCat.init();
	});

});