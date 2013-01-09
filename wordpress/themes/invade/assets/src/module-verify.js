/**
*
* @author: niko
* @date: 2012.10.23
* @info: verify the form
*
**/

define(function(require, exports, module) {

	var $ = require('jquery');

	function Verify ( target ) {

		var form = target,
			verify = form.find('.v-verify');

		//verify
		function isNull ( val ) {
			var v = val.replace(/\s/ig,"");
			return (v.length>0) ? false : true;	
		}

		function isNum ( val ) {
			return /^[0-9-]+$/ig.test(val);
		}

		function isEmail ( val ) {
			return /^.+@[\w\.]+\.[\w]+$/ig.test(val);
		}	

		function isUrl ( val ) {
			return /^[\w(\/\/):-_]+(\.[\w]+)+$/i.test(val);
		}

		function init () {

			verify.bind('change', function(){
				verifing(this);
			});

			form.submit(function(){
				autoVerify();

				var errorMsg = form.find('.has-error');

				if ( errorMsg[0] ) {
					return false;
				}
			});

		}//end init

		function autoVerify () {
			verify.each(function(index, item){
				$(item).change();
			});	
		}

		function verifing ( that ) {
			var type = that.getAttribute('data-v-type') ? that.getAttribute('data-v-type').split(' ') : ['null'],
				i = 0;

			for ( i=type.length; i--; ) {
				switch( type[i] ) {
					case 'null': 
						isRight(that, 'v-error-null');
					break;
				}	
			}

		}

		function isRight ( that, _className, message ) {
			if ( isNull ( that.value ) ) {
				if ( !that._vCache ) {
					that._vCache = $(that).parent().find('.v-error');
				}
				that._vCache.html('');
				that._vCache.append('<b class="' + _className + ' has-error"> please enter ' + that.getAttribute('name') + '</b>');
			} else {
				that._vCache.find('.' + _className).remove();
			}	
		}

		return {
			init: init
		}

	}//end Verify


    module.exports = Verify

});