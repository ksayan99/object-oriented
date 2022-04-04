<?php 

class base{
    public $name;
    public function show(){
        echo $this->name.'From Base';
    }
}
class derived extends base{
    function visible(){
        $this->show().'From Derived';
    }
}
$obj = new base();
$obj->name = 'Sayan ';
$obj->show();

$obj2 = new derived();
$obj2->name = 'Sayan ';
$obj2->visible();

?>