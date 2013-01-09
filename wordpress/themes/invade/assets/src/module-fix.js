/**
*
* @author: niko
* @date: 2012.10.23
* @info: fix the browser
*
**/

define(function(require, exports, module) {

	var $ = require('jquery');

    function fix() {
    	$('[title="red-bg"]').addClass('red-bg').removeAttr('title');
    	if ( !$('#menu .current-menu-item')[0] && !$('#single-portfolio')[0] ) {
    		$('#menu .nav-home').addClass('home-active');
    	}
    	window.onresize = function() {
    		var width = document.documentElement.clientWidth;
    		if ( width <= 480 ) {

    		} else if ( width < 960 ) {
    			
    		} else {
    			$('#slider').show();
    		}
    	}
        var oldMessage = $('#message').val();
        $('#message').focus(function(){
            if ( this.value === oldMessage ) {
                this.value = '';
            }
        });
    }

    module.exports = {
        fix: fix
    }        

});