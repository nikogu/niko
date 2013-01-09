/**
*
* @author: niko
* @date: 2012.10.23
* @info: Slider show what you want to show~
*        Need CSS3 Animate
*
**/

define("main/0.1.0/module-monitor-debug", ["#jquery/1.7.2/jquery-debug"], function(require, exports, module) {

	var $ = require('#jquery/1.7.2/jquery-debug');

	function Moniter ( trigger, _className, target, toLeft) {
		var _trigger = trigger,
			_className = _className,
			_monitor = target,
			_toLeft = 0,
			_left = 0,
			_contentWrap = $('#book-desc-content'),
			_closeBtn = $('#book-desc-close');

		function init () {
			_left = parseInt(_monitor.css('left'));

			_trigger.bind('click', function(e) {
				e.preventDefault();
				var that = $(this);
				appendContent( that );
				showMonitor();
			});

			_closeBtn.bind('click', function(e) {
				hideMonitor();
			});
		}

		//put content to monitor
		function appendContent ( that ) {
			var content = that.find('.' + _className),
				newNode = content.clone();
			_contentWrap.html('');
			_contentWrap.append(newNode);
		}

		function showMonitor () {
			_monitor.show();
			_monitor.css('left', _toLeft + 'px');
		}

		function hideMonitor() {
			_monitor.css('left', _left + 'px');
		}

		return {
			init: init
		}

	}

	module.exports = Moniter;

});

/**
*
* @author: niko
* @date: 2012.10.23
* @info: execute
*
**/

define("main/0.1.0/main-debug", ["./module-monitor-debug", "#jquery/1.7.2/jquery-debug"], function(require) {

	var $ = require('#jquery/1.7.2/jquery-debug');

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

		var Monitor = require('./module-monitor-debug');

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