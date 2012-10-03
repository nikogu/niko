/**
** @author: niko
** @propuse: 计数排序
** @date: 2012.10.03
**
**/

//传入目标数组和范围最大值k
function countSort ( array, k ) {

	//临时数组
	var B = array.concat(),
		//计数数组
		C = [],
		//计数器
		i = 0;

	//初始化计数数组
	for ( i = k+1; i--; ) {
		C[i] = 0;	
	}

	//统计数组元素的出现次数
	for ( i = B.length; i--; ) {
		C[B[i]]++;
	}

	//统计小于C[i]的数组元素个数
	for ( i = 1; i <= k; i++ ) {
		C[i] = C[i] + C[i-1];
	}

	//定位
	for ( i = B.length; i--; ) {
		array[C[B[i]]] = B[i];
		C[B[i]]--;
	}

	//去除第一个，因为索引计数从0开始，第一个为undefined
	array.shift();

}
















