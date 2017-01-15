<?php
class Student {
    public $name = ""; // 定义一个属性

    // 定义一个方法用于设置属性name
    public function setName($name) {
        $this->name = $name;
    }

    // 定义一个方法用于获取属性name
    public function getName() {
        return $this->name;
    }
}

$zhangsan = new Student();
$zhangsan->setName("张三");
echo $zhangsan->name."<br />";
echo $zhangsan->getName();

$lisi = new Student();
$lisi->setName("张三");
echo $lisi->name."<br />";
echo $lisi->getName();
?>

