<?php 

class base{
    public $name = 'Sayan From Base';
    public function fx($a, $b){
        return $a + $b;
    }
}
class derived extends base{
    public $name = 'Sayan From Derived';
}
class child extends base{
    public function calc($a, $b){
        return ' & Child Result '.$a * $b;
    }
}
$obj = new base();
echo $obj->name;

$obj = new derived();
echo $obj->name;

$obj = new child();
echo $obj->name;
echo $obj->calc(5,6)

?>