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

    public function talk() {
        echo "我是婴儿，我在用哭说话<br />";
    }
}

class Chinese extends Baby {

    public function __construct($name, $sex, $age) {
        parent::__construct($name, $sex, $age);
    }

    public function talk() {
        echo '我叫'.$this->getName().'，我是中国人<br />';
    }
}

class American extends Baby {

    public function __construct($name, $sex, $age) {
        parent::__construct($name, $sex, $age);
    }
}

$baby = new Baby('李四', '男', 2);
$baby->talk();

$chinese = new Chinese('张三', '男', 20);
$chinese->talk();

$american = new American('Lucy', '女', 18);
$american->talk();
?>