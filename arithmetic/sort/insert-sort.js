/**
** @author: niko
** @propuse: 插入排序
** @date: 2012.9.23
**
**/

//插入排序开始
function InsertSort ( array ) {

	//接受一个数组，并且复制它
	var newArray = array.concat();

	//算法开始
	//把当前的每个元素当成是新插入的元素
	for (var j=1; j<newArray.length; j++ ) {

		//保存新元素的值
		var key = newArray[j];

		//当前要比较元素的起始索引
		var i = j-1;

		//如果还有比较元素 而且 前面的元素还是大于新插入的元素值(需要改变顺序，小的放前面)
		while ( i>=0 && newArray[i] > key ) {
			//把大的依次往后推
			newArray[i+1] = newArray[i];
			//对比下一次
			i--;
		}

		//找到位置了，插到它的后面
		newArray[i+1] = key;

	}

	//返回新数组
	return newArray;

}