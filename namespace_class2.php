<?php 

namespace class\space\module2; // declaring long name
require 'namespace_class3.php'; // includes namespace

class base{
    function __construct(){
        $obj = new \module3\base; // call another namespace
        echo $obj->build().'Ti';
    }
}

?>