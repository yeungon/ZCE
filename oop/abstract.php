<?php


// Rule 1: Abstract Classes can't be instantiated.
// Rule 2: To use we may inherite it using extends

// Learned: AbstractClass has both implemented and only assigned methods.
// If the method assigned is on Abstract Class, it forces me to implement on extending class
abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    // This method is not implemented on AbstractClass
    // So, if I don't implement this method here, it will generate an error
    protected function getValue() {
        return "ConcreteClass1";
    }

    // Same here. This method is only assign on AbstractClass
    // So it forces me to implement on Extending class (ConcreteClass1)
    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

$concreteClass1 = new ConcreteClass1();
// echo $concreteClass1->prefixValue('Foo'); // FooConcreteClass1


// In this case, I'm using a method from Abstract (Parent) class from my extended (Children class)
// So, with Abstract it's possible to pass to childres implemented methods but only assigned it's
// forced to implement on it.
echo $concreteClass1->printOut();
// ConcreteClass1
