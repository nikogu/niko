/**
*
* @author: niko
* @date: 2012.10.23
* @info: input type file to text value
*
**/

define(function(require, exports, module) {

	var $ = require('jquery');

    function FI ( from, to ) {
        function change() {
            from.change(function(){
                $(to).val(this.value);
            });
        }
        return {
            change: change
        }
    }

    module.exports = FI; 

});