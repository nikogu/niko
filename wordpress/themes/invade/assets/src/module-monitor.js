/**
*
* @author: niko
* @date: 2012.10.23
* @info: Slider show what you want to show~
*        Need CSS3 Animate
*
**/

define(function(require, exports, module) {

	var $ = require('jquery');

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