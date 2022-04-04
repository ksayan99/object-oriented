<?php 

trait sayan{
    public function fx(){
        return 10;
    }
}
trait gipsy{
    public function fx(){
        return 30;
    }
    public function calc($x, $y){
        echo $x * $y;
    }
}
class base{
    use sayan,gipsy{
        sayan::fx insteadOf gipsy;
        gipsy::fx as gx;
    }
}
$obj = new base();
$num1 = $obj->fx();
$num2 = $obj->gx();
$obj->calc($num1, $num2);

?>