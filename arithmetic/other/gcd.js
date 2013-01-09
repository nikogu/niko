/**
** @author: niko
** @propuse: 欧几里得最大公约数
** @date: 2012.11.22
**
**/
function gcd ( p, q ) {

	var r = 0;

	if ( q == 0 ) {
		return p;
	}

	r = p % q;

	return gcd(q, r);

}