<?php 

class base{
    protected $name;
    protected function show(){
        echo $this->$name;
    }
}
class derived extends base{
    function get(){
        $this->show();
    }
}
$obj = new derived();
$obj->$name = 'Gipsy';
$obj->get();

?>