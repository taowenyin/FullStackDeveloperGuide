<?php
// 场景一：static静态局部变量
function static_local() {
    static $local = 0 ; // 初始化为0
    $local++;
    echo $local . '<br>';
}

// 场景二：static静态全局变量
function static_global() {
    global $glo; // 初始化为0
    $glo++;
    echo $glo . '<br>';
}

// 场景三：static静态类属性
class StaticProperty {
    static $count = 0;
 
    public function __construct() {
        self::$count++;
    }

    public function getCount() {
        return self::$count;
    }
}
?>

