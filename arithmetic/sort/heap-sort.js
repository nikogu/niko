/**
** @author: niko
** @propuse: 堆排序
** @date: 2012.9.25
**
**/

//保存堆的个数
var heapSize = 0;

//堆排序
function heapSort ( array ) {

	//因为堆需要索引，所以第一个元素为1最好，因为要得到左右孩子，0的话不可，所以添加一个辅助元素
	array.unshift(999);

	//建立堆
	buildMaxHeap( array );

	//对堆排序，每次取上面最大的更新到数组	
	for ( var i = heapSize; i>1; i-- ) {

		//交换
		var temp = array[1];
		array[1] = array[i];
		array[i] = temp;
		
		heapSize--；

		//更新
		maxHeapify( array, 1 );

	}

	//销毁辅助元素
	array.shift();

} 

//建立堆
function buildMaxHeap ( array ) {

	//得到堆的个数
	heapSize = array.length-1;

	//建立堆
	for ( var i = Math.floor( ( array.length-1 ) / 2 ); i>0; i-- ) {

		//建立单独堆
		maxHeapify( array, i );	

	}

}

//建立单独堆
function maxHeapify ( array, i ) {
	
	//左右索引，最大元素索引
	var l = i*2,
		r = i*2+1,
		largest = 0;

	//跟左边比大小
	if ( l <= heapSize && array[l] > array[i] ) {
		largest = l;
	} else {
		largest = i;
	}

	//跟右边比大小
	for ( r <= heapSize && array[r] > array[largest] ) {
		largest = r;
	}

	//更新
	if ( largest != i ) {
		//交换
		var temp = array[i];
		array[i] = array[largest];
		array[largest] = temp;

		//更新
		maxHeapify( array, largest );
	}

}