<?php

require(__DIR__.'/vendor/autoload.php');

use DI\Container;

class Mailer
{
    public function mail($recipient, $content)
    {
        // send an email to the recipient
    }
}

class UserManager
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function register($email, $password)
    {
        // The user just registered, we create his account
        // ...

        // We send him an email to say hello!
        $this->mailer->mail($email, 'Hello and welcome!');
    }
}


//$container = new Container();

//print_r(get_class_methods($container));

// cách bình thường
/*$mailer = new Mailer();
$userManager = new UserManager($mailer);*/

/*dùng DI*/
//$userManager = $container->get('UserManager');


//print_r(get_class_methods($userManager));


	interface hethong{
		public function speak();
	}
	class A implements hethong{
		public function speak()
		{
			echo "xin chào từ class A<br>";
		}
	}

	class B implements hethong{
		public function speak()
		{
			echo "xin chào từ class B<br>";
		}
	}

	class C{
		public $hethong;
		public function __construct(hethong $hethong)
		{
			$this->hethong = $hethong;
		}
		public function spe ak(){
			return $this->hethong->speak();
		}
	}

	$a = new A;
	$b = new C($a);
	$b->speak();

	$container = new Container();
	$container->set('hethong', \DI\create('B'));
	$test = $container->get('C');
	$test->speak();

	/*tạo container 2 và gắn với class A*/
	$containerb = new Container();
	$containerb->set('hethong', \DI\create('A'));
	$test2 = $containerb->get('C');
	$test2->speak();

	

	//print_r(get_class($test));

	/**
	* Giả sử ta xây dựng Dependecy Injection với Interface. Hệ thống như sau:
	- Xây dựng một interface chứa function xử lý.
	- Class chức năng A, B implements interface này.
	- Class C trực tiếp sử dụng và sẽ kế thừa tính năng của class A, B. Tuy nhiên, thay vì kế thừa trực tiếp (chỉ kế thừa được 1 class), ta kế thừa thông qua interface. Trong hàm __construct() ta khởi tạo một object của interface. Các tính năng của class C sẽ được lấy từ class A, B nhưng thông qua interface thay vì kế thừa trực tiếp. Trong  class C này, ta cũng phải xây dựng hàm tương tự như trong interface. Trong hàm này thực chất ta sẽ return lại kết quả hành động từ object của interface khi gọi hàm.
	- Vậy giờ ta chỉ cần tạo các object từ class A hoặc class B, rồi khởi tạo object từ class C trực tiếp dùng là được. (Quan sát $a = new A; và $b = new C($a)).
	- Nhưng nếu mỗi lần dùng class A hoặc B, ta lại phải khởi tạo hai lần object. Giờ ta dùng container để nối. Trong ví dụ này mình dùng PHP-DI là container. Quan sát ví dụ:

	1) Bình thường:

	$a = new A;
	$b = new C($a);
	$b->speak();

	2) Nối bằng container "hethong"  với class B.

	$container = new Container();
	$container->set('hethong', \DI\create('B'));
	$test = $container->get('C');
	$test->speak();

	3) Nối bằng container container "hethong"  với class A

	$containerb = new Container();
	$containerb->set('hethong', \DI\create('A'));
	$test2 = $containerb->get('C');
	$test2->speak();

	Container giúp hệ thống uyển chuyển hơn hẳn.






	*/

