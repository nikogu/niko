/**
*
* @author: niko
* @date: 2012.10.23
* @info: hover
*
**/

define(function(require, exports, module) {

	var $ = require('jquery');

    function hover() {
        var target = $("#grid li.item");

        if ( !target[0] ) {
            return;
        }

        target.live('mouseover', function() {
            if ( !this.e ) {
                this.e = $(this).find('div.entry-meta');
            }
            if ( !this.a ) {
                this.a = $(this).find('div.overly'); 
            }
            this.e.stop(true, true).fadeIn();
            this.a.stop(true, true).fadeIn();
        });

        target.live('mouseleave', function() {
            if ( !this.e ) {
                this.e = $(this).find('div.entry-meta');
            }
            if ( !this.a ) {
                this.a = $(this).find('div.overly'); 
            }
            this.e.stop(true, true).fadeOut();
            this.a.stop(true, true).fadeOut();
        });
    }

    module.exports = {
        hover: hover
    }        

});