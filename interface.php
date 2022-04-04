<?php 

interface abc{
    public function fx();
}
interface xyz{
    public function gx();
}
class base implements abc, xyz{
    function fx(){
        return 10;
    }
    function gx(){
        return 30;
    }
    function calc($x, $y){
        echo $x * $y;
    }
}
$obj = new base();
$num1 = $obj->fx();
$num2 = $obj->gx();
$obj->calc($num1,$num2);

?>