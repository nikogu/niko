/**
*
* @author: niko
* @date: 2012.11.08
* @info: Auto Extend
*
**/

define(function(require, exports, module) {

	var $ = require('jquery');

    function AutoExtend ( target, old ) {
        var target = target,
            old = old || 200;

        function init () {

            if ( target[0] && (target[0].scrollHeight>$(target).height()) ) {
                target[0].style.height = (target[0].scrollHeight + 10) + 'px';
            }

            target.bind('keydown', function(){
                if ( $(this).height() < this.scrollHeight ) {
                    this.style.height = (this.scrollHeight + 10) + 'px';
                }
            });
        }
        return {
            init: init
        }

    }

    module.exports = AutoExtend;

});