/**
** @author: niko
** @propuse: 归并算法
** @date: 2012.9.24
** @info: 归并算法中的计数需要注意，就是从哪里分离从哪里合并，
**		要搞清楚，不然索引一乱就很麻烦
**
**/

//开始
function mergeSort ( array, p, r ) {

	//归并完结条件
	if ( p < r ) {

		//取中点分节
		var q = Math.floor( ( p + r ) / 2 );

		//上半部再分节
		mergeSort( array, p, q );

		//下半部再分节
		mergeSort( array, q+1, r );

		//合并上下部分（归并）
		merge( array, p, q, r );

	}

}

//合并
function merge( a, p, q, r ) {

	//将上下两部分分成数组，便于操作
	var arrayL = a.slice( p, q+1 ),
		arrayR = a.slice( q+1, r+1 );

	//哨兵——用于比较的时候确定次数，不用判断每上下部分为空
	arrayL.push( 999 );
	arrayR.push( 999 );

	//计数器
	var i = 0, 
		j = 0;

	//比较上下两个有序部分，合并成一个大的有序部分
	for ( var k = p; k < r+1; k++ ) {

		if ( arrayL[i] <= arrayR[j] ) {

			a[k] = arrayL[i];
			i++;

		} else {

			a[k] = arrayR[j];
			j++;

		}

	}


}