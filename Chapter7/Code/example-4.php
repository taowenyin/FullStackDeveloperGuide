<?php
// static静态局部变量
function static_local() {
    static $local = 0 ; // 初始化为0
    $local++;
    echo $local . '<br>';
}

// static静态全局变量
function static_global() {
    global $glo; // 初始化为0
    $glo++;
    echo $glo . '<br>';
}

// static静态类属性
class Student {
    static $count = 0;
 
    function __construct() {
        self::$count++;
    }
}
?>

