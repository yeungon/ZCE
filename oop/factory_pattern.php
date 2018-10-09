<?php


    /**
     * All animal should extend this abstract animal class
     */
    abstract class AnimalAbstract 
    {
        protected $species;
     
        public function getSpecies() {
            return $this->species;
        }
    }
     
    /**
     * used to represent a cat
     */
    class Cat extends AnimalAbstract 
    {
        protected $species = 'cat';
    }
     
    /**
     * used to represent a dog
     */
    class Dog extends AnimalAbstract 
    {
        protected $species = 'dog';
    }
     
    /**
     * The is the factory which creates animal objects
     */
    class AnimalFactory 
    {
        public static function factory($animal) 
        {
            switch ($animal) {
                case 'cat':
                    $obj = new Cat();
                    break;
                case 'dog':
                    $obj = new Dog();
                    break;
                default:
                    throw new Exception("Animal factory could not create animal of species '" . $animal . "'", 1000);
            }
            return $obj;
        }
    }
     
    try {
     
        $cat = AnimalFactory::factory('cat'); // object(Cat)#1
        echo $cat->getSpecies(); // cat
     
        $dog = AnimalFactory::factory('dog'); // object(Dog)#1
        echo $dog->getSpecies(); // dog
     
        $hippo = AnimalFactory::factory('hippopotamus'); // This will throw an Exception
     
    } catch(Exception $e) {
        echo $e->getMessage(); // AnimalFactory could not create animal of species 'hippopotamus'
    }

    //reference: https://www.jakowicz.com/factory-pattern-in-php/