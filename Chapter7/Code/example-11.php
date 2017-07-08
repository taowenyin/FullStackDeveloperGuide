<?php
class Student {
    private $name = null;
    private $sex = null;
    private $age = null;

    public function __construct($name, $sex, $age) {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
        echo '父类构造函数 <br />';
    }

    public function getName() {
        return $this->name;
    }

    protected function getSex() {
        return $this->sex;
    }

    private function getAge() {
        return $this->age;
    }
}

class Undergraduate extends Student {
    private $university = null;

    public function __construct($name, $sex, $age, $university) {
        parent::__construct($name, $sex, $age);
        $this->university = $university;
        echo 'Undergraduate构造函数 <br />';
    }

    public function printInfo() {
        echo '我叫'.$this->getName().'，我的大学叫'.$this->university.'<br />';
    }
}

class HighSchool extends Student {
    private $school = null;

    public function __construct($name, $sex, $age, $school) {
        parent::__construct($name, $sex, $age);
        $this->school = $school;
        echo 'HighSchool构造函数 <br />';
    }

    public function printInfo() {
        echo '我叫'.$this->getName().'，我的高中叫'.$this->school.'<br />';
    }
}

$undergraduate = new Undergraduate('张三', '男', 20, '南京大学');
$undergraduate->printInfo();

$highSchool = new HighSchool('小明', '女', 18, '北京外国语学校');
$highSchool->printInfo();
?>
