<?php
abstract class Mobile {
    private function startCallFun() {
        echo '启动电话程序...<br />';
    }

    public abstract function insertSIMCard($number);

    private function parseSIM() {
        echo '解析SIM卡程序...<br />';
    }

    public function callPhone($number) {
        $this->startCallFun();
        $this->insertSIMCard($number);
        $this->parseSIM();
        echo '拨打电话成功';
    }
}

class UserMobile extends Mobile {
    public function insertSIMCard($number) {
        echo '插入的电话SIM卡号码为：'.$number.'<br />';
    }
}

$userMobile = new UserMobile();
$userMobile->callPhone('1234567');
?>