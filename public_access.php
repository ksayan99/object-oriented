<?php 

class base{
    public $name;
    public function show(){
        echo $this->$name.'From Base';
    }
}
class derived extends base{
    function visible(){
        $this->show().'From Derived';
    }
}
$obj = new base();
$obj->$name = 'Sayan';
$obj->show();

$obj = new derived();
$obj->$name = 'Sayan';
$obj->visible();

?>