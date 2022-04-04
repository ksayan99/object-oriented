<?php 

require 'namespace_class1.php'; // including the file
require 'namespace_class2.php';

use class\space\module2 as module2; // namespace alias

echo 'NVIDIA '; // top declaration means top priority
$num1 = new module1\base; // using namespace/classname
$num2 = new module2\base; // using namealias/classname

?>