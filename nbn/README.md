#### module2-reflection

### Reflection 26/01/2021
```
## include(),require() và require_once()
	Theo em hiểu thì các hàm include(), require() và require_once() đều được dùng để nhập vào mã lệnh có trong một tập tin khác
	Nên sử dụng require khi ứng dụng yêu cần phải nhập vào một tập tin mang tính chất bắt buộc. Nếu tập tin này không tồn tại PHP sẽ chấm dứt hoạt động của chương trình đang chạy và hiển thị lỗi E_COMPILE_ERROR.

	Sử dụng require_once khi file nhập vào là bắt buộc phải có và tập tin này chỉ nên được nhập vào một lần đầu tiên, nếu file này tiếp tục được nhập vào sau đó (sử dụng một trong ba hàm require, include hay require_once PHP sẽ bỏ qua việc nhập vào.
	
	Sử dụng include khi bạn muốn nhập vào tập tin không mang tính chất bắt buộc, có cũng được không có cũng không sao
	
## Duyệt mảng liên kết
	Cách phổ biến nhất là dùng lệnh foreach, có hai trường hợp mỗi lần lặp trích xuất ra giá trị phần tử và trích xuất cả giá trị và chỉ số index

	// vòng lặp, lấy giá trị từng phần tử
	foreach ($bienmang as $value) {
    	var_dump($value);
	}

	// vòng lặp, lấy  giá trị  và chỉ số từng phần tử
	foreach ($bienmang as $key => $value) {
    	var_dump($key, $value);
	}

	Ví dụ:

	<?php
  	 	 $names = ["An", "Minh", "Nguyên"];
   		 foreach ($names as $k => $name)
  	  {
   		echo "chỉ số $k; giá trị $name", PHP_EOL;
 	   }
  	  /*
        chỉ số 0; giá trị An
        chỉ số 1; giá trị Minh
        chỉ số 2; giá trị Nguyên
  	  */
  	  foreach ($names as $name)
  	  {
   	     echo "$name ";
  	  }
  	  //An Minh Nguyên 
  	  
 ##
````
