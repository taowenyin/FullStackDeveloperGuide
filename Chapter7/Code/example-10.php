<?php
class Student {
    private $name = '张三';
    private $sex = '男';
    private $age = '20';

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

    public function __construct($university) {
        $this->university = $university;
    }

    public function printInfo() {
        echo '我叫'.$this->getName().'，我今年'.$this->getAge().'岁，我的大学叫'.$this->university.'<br />';
    }
}

class HighSchool extends Student {
    private $school = null;

    public function __construct($school) {
        $this->school = $school;
    }

    public function printInfo() {
        echo '我叫'.$this->getName().'，我今年'.$this->getAge().'岁，我的高中叫'.$this->school.'<br />';
    }
}

$undergraduate = new Undergraduate('南京大学');
$undergraduate->printInfo();
// echo '我今年'.$undergraduate->getAge().'岁';

$highSchool = new HighSchool('北京外国语学校');
$highSchool->printInfo();
// echo '我今年'.$highSchool->getAge().'岁';
?>

