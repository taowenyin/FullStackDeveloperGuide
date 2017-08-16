<?php
class Baby {
    private $name = null;
    private $sex = null;
    private $age = null;

    public function __construct($name, $sex, $age) {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
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

    protected function talk() {
        return "我是婴儿，我在用哭说话<br />";
    }
}

class Chinese extends Baby {

    public function __construct($name, $sex, $age) {
        parent::__construct($name, $sex, $age);
    }

    private function talk() {
        return '我叫'.$this->getName().'，我是中国人<br />';
    }

    public function printInfo() {
        echo $this->talk();
    }
}

$chinese = new Chinese('张三', '男', 20);
$chinese->printInfo();
?>