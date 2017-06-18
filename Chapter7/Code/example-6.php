<?php
class Student {
    private $name = null;
    private $age = null;
    private $sex = null;

    // 构造函数
    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    private function modifyAge() {
        $this->age -= 5;
    }

    public function getStudentInfo() {
        if($this->sex == "女") {
            $this->modifyAge();
        }
        echo "学生名字：".$this->name.", 年龄：".$this->age.", 性别：".$this->sex."<br />";
    }
}

// 调用私有的属性
// $maleStudent = new Student('张三', 28, '男');
// $maleStudent->name = '李四';

// 调用私有的方法
// $maleStudent = new Student('张三', 28, '男');
// $maleStudent->modifyAge();

// 调用公有的方法，并且创建一个张三对象
// $maleStudent = new Student('张三', 28, '男');
// $maleStudent->getStudentInfo();

// 调用公有的方法，并且创建一个小明对象
// $femaleStudent = new Student('小明', 28, '女');
// $femaleStudent->getStudentInfo();
?>

