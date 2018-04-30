<?php

class MyBase {
  public static $Var="B";
  public $var="B";
  function say($text) {
    echo $this->var;
  }
}

class MyClass {
  public static $Var="S";
  public $var=null;
  function __construct($var=null) {
    $this->var = $var;
    if ($var != null) 
      echo strtoupper($var);
  }
  function __destruct() {
      echo "D";
  }
  public function __call($name, $arguments) {
      echo "C";
  }

  public static function __callStatic($name, $arguments) {
      echo "c";
   }

  function __invoke($x) {
      echo strtolower($x);
  }
}

$obj = new MyClass();
$obj->say('Hello');
$obj('a');
$obj=null;
MyClass::say('Bye Bye');

/*
    Na linha 35 $obj = new MyClass();
        O objeto eh criado. Sempre q um objeto eh criado, __construct() eh chamado.
    Como nao temos parametros no objeto, se olhamos o que __construct faz, 
    ele nao entra no if em que verifica se ele eh diferente de null. Como eh
    null ele nao vai entrar no if.

    Na linha 36: $obj->say('Hello');
        Nao temos o method say dentro da classe MyClass(). E como MyClass nao esta
    extendendo MyBase, nao podemos confundir com o method da MyBase. Assim que 
    say eh chamado, o magic method __call eh executado. Assim, ele vai printar na tela:
    "C".

    Na linha 37: $obj('a');
        Um pouco estranha essa sintaxe. O nome que damos a isso eh "chamar um objeto 
    como funcao". O que acontece eh que existe o magic method __invoke que eh 
    chamado toda vez que um objeto eh camado como funcao. Dentro do method invoke
    temos um echo strtolower('a') que imprime o parametro passado em minusculo.
    "a"

    Na linha 38: $obj=null;
        Nosso objeto foi definido como null. Sendo assim, o magic method
    __destruct() eh chamado e imprime:
    "D"

    Na linha 39: MyClass::say('Bye Bye');
        Aqui temos uma chamada do method estatico say(). Mais uma vez, nao temos
    o method say dentro da classe MyClass. Como o method nao existe, ele chamaria
    o magic method __call(). So que como estamos chamando um method static, ele 
    executa o __callStatic() imprimindo:
    "c"

    Saida entao fica: CaDc
 */
