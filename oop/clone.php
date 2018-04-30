<?php

class CloneableClass
{
    private $_internalObject;

    public function __construct()
    {
        // instantiate the internal member
        $this->_internalObject = new stdClass();
    }
}

$classA = new CloneableClass();
$classB = clone $classA;

var_dump($classB);


// in this exampe the internal member $_internalObject of both objects
// DON'T reference the same instance of stdClass in memory, but are inividual instances
class CloneableClass
{
    private $_internalObject;

    public function __construct()
    {
        // instantiate the internal member
        $this->_internalObject = new stdClass();
    }

    // on clone, make a deep copy of this object by cloning internal member;
    public function __clone()
    {
        $this->_internalObject = clone $this->_internalObject;
    }
}

$classA = new CloneableClass();
$classB = clone $classA;

echo "<hr>";

var_dump($classB);

