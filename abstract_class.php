<?php 

abstract class base{
    abstract protected function add($a, $b);
    public function multiply($x, $y){
        echo $x * $y;
    }
}
class derived extends base{
    public function add($a, $b){
        echo 'Addition '.$a + $b;
    }
    public function result(){
        echo ' Multiplication '.$this->multiply(5,10);
    }
}
$obj = new derived();
$obj->add(5,10);
$obj->result();

?>