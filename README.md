#### module2-reflection

### Reflection 28/01/2021
```
Nên sử dụng JSON khi nào
Đó là khi bạn muốn lưu trữ dữ liệu đơn thuần dưới dạng metadata ở phía server. 
Chuỗi JSON sẽ được lưu vào database và sau đó khi cần dữ liệu thì sẽ được giải mã. 
Ví dụ với PHP, nó cung cấp các hàm liên quan đến JSON 
để mã hóa hoặc giải mã là json_encode và json_decode.

Chuỗi JSON được bao lại bởi dấu ngoặc nhọn {}
Các key, valuecủa JSON bắt buộc phải đặt trong dấu nháy kép {“}, 
nếu bạn đặt nó trong dấu nháy đơn thì đây không phải là một chuỗi JSON đúng chuẩn. 
Nếu trường hợp trong value của bạn có chứa dấu 
nháy kép " thì hãy dùng dấu (\) để đặt trước nó, ví dụ  \"json là gì\".
Nếu có nhiều dữ liệu thì dùng dấu phẩy , để ngăn cách.

public function __construct($pathFile)//đường dẫn đến file json.json
    {
        $this->pathFile = $pathFile;
    }
//đọc file json
    function readFile()
    {
        $dataJson = file_get_contents($this->pathFile);
        return json_decode($dataJson, true);
    }
//lưu vào file json, $data là 1 mảng.
    function saveFile($data) {
        $dataJson = json_encode($data);
        file_put_contents($this->pathFile, $dataJson);
    }

```
### Reflection 27/01/2021

```
1) Khái quát nội dung
Access Modifiers 	Class 		Sub Class 	World
Public 		Yes 		Yes 		Yes
Protected 		Yes 		Yes 		No
Private 		Yes 		No 		No

    public- thuộc tính hoặc phương thức có thể được truy cập từ mọi nơi. Đây là mặc định

    protected - thuộc tính hoặc phương thức có thể được truy cập trong lớp và bởi các lớp dẫn xuất từ lớp đó

    private - thuộc tính hoặc phương thức chỉ có thể được truy cập trong lớp

2) Ví dụ cụ thể

    Public:

    <?php  
		class Fruit {
			public $name;
			public $color;

			function setName($name) {
				$this->name = $name;
			}

			function setColor($color) {
				$this->color = $color;
			}

			function getName() {
				return $this->name;
			}

			function getColor() {
				return $this->color;
			}
		}

		class A extends Fruit {
			function call() {
				return $this->name;
			}
		}

		$fruit = new Fruit();
		$fruit->setName('a');
		echo $fruit->name; // OK
        echo $fruit->getName(); // OK 
        $a = new A();
        $a->setName('demo');
        echo $a->call(); // OK
	?>

Quyền truy cập là public, chúng ta có thể gọi ở bất kỳ vị trí nào:

    Bên ngoài gọi được bên trong Class mà không bị lỗi: echo $fruit->name;
    Tương tự Class con có thể gọi được và bên trong Class

    Protected:

    <?php  
		class Fruit {
			protected $name;
			public $color;

			function setName($name) {
				$this->name = $name;
			}

			function setColor($color) {
				$this->color = $color;
			}

			function getName() {
				return $this->name;
			}

			function getColor() {
				return $this->color;
			}
		}

		class A extends Fruit {
			function call() {
				return $this->name;
			}
		}

		$fruit = new Fruit();
		$fruit->setName('a');
		echo $fruit->name; // Error
        echo $fruit->getName(); // OK
        $a = new A();
        $a->setName('demo');
        echo $a->call(); // OK
	?>

Khi quyền truy cập là protected:

    Trong Class và Class con, ta có thể gọi và sử dụng
    Ở ngoài Class, khi gọi đến và hiển thị ra màn hình. Sẽ báo lỗi do quyền truy cập thiết lập không đúng.

    Private:

    <?php  
		class Fruit {
			private $name;
			public $color;

			function setName($name) {
				$this->name = $name;
			}

			function setColor($color) {
				$this->color = $color;
			}

			function getName() {
				return $this->name;
			}

			function getColor() {
				return $this->color;
			}
		}

		class A extends Fruit {
			function call() {
				return $this->name;
			}
		}

		$fruit = new Fruit();
		$fruit->setName('a');
		echo $fruit->name; // Error
        echo $fruit->getName(); // OK
        $a = new A();
        $a->setName('demo');
        echo $a->call(); // Error
	?>

Quyền truy cập private:

    Class con và gọi từ bên ngoài sẽ báo lỗi do quyền truy cập không khả thi
    Từ trong Class, ta vẫn gọi được bình thường. Quyền truy cập là nội bộ, ở trong hàm có thể gọi được

```
### Reflection 25/01/2021

```
## Website động và website tĩnh
Website tĩnh là loại website cơ bản mà có thể tạo ra dễ dàng. 
Bạn không cần sử dụng tới các ngôn ngữ lập trình web như Java, PHP, JSP … 
hay thiết kế cơ sở dữ liệu để tạo ra website tĩnh. Những trang web của nó 
được viết bằng mã HTML, hoặc thêm CSS, Javascript để thêm các hiệu ứng nếu muốn.

Website động là tập hợp của những trang web mà nội dung có khả năng thay đổi. 
Sự thay đổi có thể là tùy theo thời gian, tùy theo người dùng, tùy theo ngữ cảnh. 
Website động có nội dung được lấy từ cơ sở dữ liệu hoặc hệ thống quản trị nội dung (CMS). 
Do đó, khi bạn cập nhật nội dung của cơ sở dữ liệu hoặc
 CMS thì nội dung của trang web cũng thay đổi theo.
Để tạo được website động, chúng ta thường sử dụng các 
ngôn ngữ lập trình phía server (server-side), như Java, PHP, Python, C#, v.v...
Website thường được đặt (hosting) trên một máy chủ dịch vụ web (Web Server).
Website động sử dụng kết hợp ngôn ngữ lập trình 
phía máy khách (Client), máy chủ (Server) để tạo ra nội dung động.

## LAMP

    Linux: Một họ các hệ điều hành (tương tự như Windows mà chúng ta thường thấy) mã nguồn mở (FOSS),
     thường được sử dụng để cài đặt cho các máy chủ trong các doanh nghiệp. 
     Gọi Linux là một "họ" là bởi vì có rất nhiều hệ điều hành Linux (bản phân phối), có thể kể đến như 
     Redhat, Fedora, Debian, Ubuntu, CentOS, ... Mỗi bản phân phối Linux này có những đặc điểm riêng,
      thế mạnh riêng và hướng đến đối tượng sử dụng riêng.

    Apache: Phần mềm máy chủ web (Web Server) được sử dụng rất phổ biến. 
    Web Server là nơi đón nhận các request (yêu cầu) của người dùng, xử lý và trả về kết quả. 
    Apache là một phần mềm mã nguồn mở và miễn phí. Hiện nay,
     ngoài Apache thì cũng có một số Web Server khác, chẳng hạn như là Nginx, IIS, ...

    MySQL: Một hệ quản trị cơ sở dữ liệu quan hệ mã nguồn mở. 
    Hệ quản trị CSDL có chức năng lưu trữ dữ liệu, bảo mật, 
    cung cấp công cụ để truy xuất dữ liệu và nhiều tính năng khác. 
    Ngoài MySQL thì còn có rất nhiều các hệ quản trị CSDL khác, 
    chẳng hạn như SQL Server, Oracle DB, PostgreSQL, MariaDB...

    PHP: Ngôn ngữ lập trình phía server (server-side). Chức năng của PHP là xử lý yêu cầu của người dùng
     và sinh ra kết quả để trả về cho người dùng (thường các trang PHP sẽ sinh ra mã HTML 
     để hiển thị trên các trình duyệt). 
     Ngoài PHP thì còn có rất nhiều ngôn ngữ khác làm được công việc tương tự, chẳng hạn Perl, Python, Java...
```
