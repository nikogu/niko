/**
** @author: niko
** @propuse: 快速排序
** @date: 2012.9.26
**
**/

function quickSort( array, p, r ) {

	//当然不能大于数组的元素个数了
	if ( p < r ) {

		//获得中间的q，对数组进行分离
		var q = partition( array, p, r );

		//分开继续排序，q是中点，不需要排序了
		quickSort( array, q, p-1);
		quickSort( array, p+1, r);

	}

}

function partition( array, p, r ) {

	//保存末尾值
	var x = array[r],
	//索引计数，用来对小于x的数值进行索引
		i = p-1;

	//分离出比x小的和大的值，分布在x的两边
	for ( var j = p; j <= r-1; j++ ) {

		//如果小于x
		if ( array[j] <= x ) {

			//计数
			i++;

			//互换位置，为了分离比q大的和小的
			var temp = array[i];
			array[i] = array[j];
			array[j] = temp;

		}

	}

	//把中间值放在中间，保证左右两边的数是左边的小于它，右边的大于它
	var temp1 = array[i+1];
	array[i+1] = array[r];
	array[r] = temp1;

	//返回索引
	return i+1;
	
}
