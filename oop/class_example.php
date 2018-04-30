<?php

class Student {

}

echo "<pre>";
print_r(get_declared_classes());

echo "</pre>";

echo "<br>";

$classes = get_declared_classes(); // hàm này cho biết các class đã có, kể cả class stdclass và class student

/*Array
(
    [0] => stdClass
    [1] => Exception
    [2] => ErrorException
    [3] => Error
    [4] => ParseError
    [5] => TypeError
    [6] => ArgumentCountError
    [7] => ArithmeticError
    [8] => DivisionByZeroError
    [9] => Closure
    [10] => Generator
    [11] => ClosedGeneratorException
    [12] => DateTime
    [13] => DateTimeImmutable
    [14] => DateTimeZone
    [15] => DateInterval
    [16] => DatePeriod
    [17] => LogicException
    [18] => BadFunctionCallException
    [19] => BadMethodCallException
    [20] => DomainException
    [21] => InvalidArgumentException
    [22] => LengthException
    [23] => OutOfRangeException
    [24] => RuntimeException
    [25] => OutOfBoundsException
    [26] => OverflowException
    [27] => RangeException
    [28] => UnderflowException
    [29] => UnexpectedValueException
    [30] => RecursiveIteratorIterator
    [31] => IteratorIterator
    [32] => FilterIterator
    [33] => RecursiveFilterIterator
    [34] => CallbackFilterIterator
    [35] => RecursiveCallbackFilterIterator
    [36] => ParentIterator
    [37] => LimitIterator
    [38] => CachingIterator
    [39] => RecursiveCachingIterator
    [40] => NoRewindIterator
    [41] => AppendIterator
    [42] => InfiniteIterator
    [43] => RegexIterator
    [44] => RecursiveRegexIterator
    [45] => EmptyIterator
    [46] => RecursiveTreeIterator
    [47] => ArrayObject
    [48] => ArrayIterator
    [49] => RecursiveArrayIterator
    [50] => SplFileInfo
    [51] => DirectoryIterator
    [52] => FilesystemIterator
    [53] => RecursiveDirectoryIterator
    [54] => GlobIterator
    [55] => SplFileObject
    [56] => SplTempFileObject
    [57] => SplDoublyLinkedList
    [58] => SplQueue
    [59] => SplStack
    [60] => SplHeap
    [61] => SplMinHeap
    [62] => SplMaxHeap
    [63] => SplPriorityQueue
    [64] => SplFixedArray
    [65] => SplObjectStorage
    [66] => MultipleIterator
    [67] => ReflectionException
    [68] => Reflection
    [69] => ReflectionFunctionAbstract
    [70] => ReflectionFunction
    [71] => ReflectionGenerator
    [72] => ReflectionParameter
    [73] => ReflectionType
    [74] => ReflectionNamedType
    [75] => ReflectionMethod
    [76] => ReflectionClass
    [77] => ReflectionObject
    [78] => ReflectionProperty
    [79] => ReflectionClassConstant
    [80] => ReflectionExtension
    [81] => ReflectionZendExtension
    [82] => SessionHandler
    [83] => __PHP_Incomplete_Class
    [84] => php_user_filter
    [85] => Directory
    [86] => AssertionError
    [87] => ZipArchive
    [88] => LibXMLError
    [89] => DOMException
    [90] => DOMStringList
    [91] => DOMNameList
    [92] => DOMImplementationList
    [93] => DOMImplementationSource
    [94] => DOMImplementation
    [95] => DOMNode
    [96] => DOMNameSpaceNode
    [97] => DOMDocumentFragment
    [98] => DOMDocument
    [99] => DOMNodeList
    [100] => DOMNamedNodeMap
    [101] => DOMCharacterData
    [102] => DOMAttr
    [103] => DOMElement
    [104] => DOMText
    [105] => DOMComment
    [106] => DOMTypeinfo
    [107] => DOMUserDataHandler
    [108] => DOMDomError
    [109] => DOMErrorHandler
    [110] => DOMLocator
    [111] => DOMConfiguration
    [112] => DOMCdataSection
    [113] => DOMDocumentType
    [114] => DOMNotation
    [115] => DOMEntity
    [116] => DOMEntityReference
    [117] => DOMProcessingInstruction
    [118] => DOMStringExtend
    [119] => DOMXPath
    [120] => PDOException
    [121] => PDO
    [122] => PDOStatement
    [123] => PDORow
    [124] => SimpleXMLElement
    [125] => SimpleXMLIterator
    [126] => XMLReader
    [127] => XMLWriter
    [128] => CURLFile
    [129] => finfo
    [130] => mysqli_sql_exception
    [131] => mysqli_driver
    [132] => mysqli
    [133] => mysqli_warning
    [134] => mysqli_result
    [135] => mysqli_stmt
    [136] => PharException
    [137] => Phar
    [138] => PharData
    [139] => PharFileInfo
    [140] => Student
)

*/
echo "Classes: " . implode(', ', $classes) . "<br />";

$class_names = ['Product', 'Student', 'student'];
foreach($class_names as $class_name) {
  if(class_exists($class_name)) {
    echo "{$class_name} is a declared class.<br />";
  } else {
    echo "{$class_name} is not a declared class.<br />";
  }
}


//class đơn giản để cộng trừ nhân chia;
        class MyCalculator {  
		  private $_fval, $_sval;  
		  
		  public function __construct( $fval, $sval ) {  
		    $this->_fval = $fval;  
		    $this->_sval = $sval;  
		  }  
		  
		  public function add() {  
		    return $this->_fval + $this->_sval;  
		  }  
		  
		  public function subtract() {  
		    return $this->_fval - $this->_sval;  
		  }  
		  
		  public function multiply() {  
		    return $this->_fval * $this->_sval;  
		  }  
		
		  public function divide() {  
		    return $this->_fval / $this->_sval;  
		  }  
		}  
		$mycalc = new MyCalculator(12, 6);   
		echo $mycalc-> add(); 
		echo "<br>";
		echo $mycalc-> multiply(); 
		echo "<br>";
		echo $mycalc-> subtract(); 
		echo "<br>";
		echo $mycalc-> divide();


    class A {
    	function f() { echo get_class($this); }
	}

(new A)->f(); 



?>
