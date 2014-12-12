<?php
/*
function __autoload ($name) {
  include $name.".class.php";
}
*/

class P {
    function __construct($n) {
        $this->n = $n;
        return $n;
    }
   /* private $data = array();
    function __set($n, $v){
        $this->data[$n] = $v;
    }
    function __get($n) {
        
        return $data[$n];
    }*/
    
    function __toString() {
        return "Hello Gena";
    }
    
    function __invoke($n) {
        return $n * $n;
    }
}

$ob = new P('Генадий Блядский');
echo  $ob->n;
echo $ob;
echo $ob(6);
/*
$obj = new A;
$obj2 = new B;
$obj->n = 'Мурзик';
$obj2->n = 'Тузик';

$obj2->sh('Вася');
$obj->sh('Вася');
*/
//var_dump($obj2->s);
?>
