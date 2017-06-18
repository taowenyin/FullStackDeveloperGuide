<?php
class Student {

    private $name = null;
    private $age = null;
    private $sex = null;
    private $className = null;

    // 构造函数
    public function __construct($name, $age, $sex, $className = null) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        if($className != null) {
            $this->className = $className;
        }
    }

    public function getStudentInfo() {
        if($this->className == null) {
            echo "学生名字：".$this->name.", 年龄：".$this->age.", 性别：".$this->sex;
        } else {
            echo "学生名字：".$this->name.", 年龄：".$this->age.", 性别：".$this->sex.", 班级：".$this->className;
        }
    }
}

// 传入三个参数来构造对象
$baseStudent = new Student("张三", 18, "男");
$baseStudent->getStudentInfo();

// 传入四个参数来构造对象
$advStudent = new Student("李四", 25, "男", "嵌入141");
$advStudent->getStudentInfo();
?>

