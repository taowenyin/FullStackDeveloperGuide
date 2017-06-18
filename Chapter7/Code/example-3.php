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

    // 析构函数
    public function __destruct() {
        echo $this->name."对象被销毁";
    }
}

// 创建好对象后，把变量赋值为null，断开与对象之间的引用
$baseStudent = new Student("张三", 18, "男");
$baseStudent = null; 

// 创建好对象后，由于程序执行完毕，所以系统清空所有资源
$advStudent = new Student("李四", 25, "男", "嵌入141");
?>

