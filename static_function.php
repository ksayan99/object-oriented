<?php 

class base{
    public static $var = 30;
    function __construct(){
        echo 'initiator';
    }
    public static function fx(){
         return self::$var;
    }
}
$obj = new base();
echo base::fx();

?>