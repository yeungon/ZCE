<?php
    class A {};
    class B1 extends A {};
    
    class_alias('A', 'B2'); // tương đương class B2 có tên là A{};

    
    $b1 = new B1; echo get_class($b1);  // B1
    $b2 = new B2; echo get_class($b2); //A


    /*In PHP 5.3 objects instantiated with the aliased name are of the exact same kind of objects instantiated with the non-aliased name <?php class A {}; class_alias('A', 'B'); ?> is equivalent to <?php class A {}; class B extends A {}; ? >.*/


    //ví dụ 2

	class foo { }

	class_alias('foo', 'bar');

	$a = new foo;
	$b = new bar;

	// the objects are the same
	var_dump($a == $b, $a === $b);
	var_dump($a instanceof $b);

	// the classes are the same
	var_dump($a instanceof foo);
	var_dump($a instanceof bar);

	var_dump($b instanceof foo);
	var_dump($b instanceof bar);
	
	/*output
	bool(true)
	bool(false)
	bool(true)
	bool(true)
	bool(true)
	bool(true)
	bool(true)
	*/


    //It also works with Traits!
    trait Foo {}
	class_alias("Foo","Bar");
	echo trait_exists("Bar") ? 'yes' : 'no'; 

	// class_alias also works for interfaces!

	interface foo {}
	class_alias('foo', 'bar');
	echo interface_exists('bar') ? 'yes!' : 'no'; // prints yes!

?>
