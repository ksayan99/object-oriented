<?php 

class base{
    private $name;
    public function show(){
    	$this->name = 'Sayan';
        echo $this->name;
    }
}
$obj = new base();
$obj->show();

?>