<?php
interface BlurayPlay {
    public function playBluray();
    public function stopBluray();
    public function nextBluray();
    public function previousBluray();
}

class SonyBlurayPlay implements BlurayPlay {
    public function playBluray() {
        echo '播放蓝光影碟<br />';
    }

    public function stopBluray() {
        echo '停止播放蓝光影碟<br />';
    }

    public function nextBluray() {
        echo '播放下一个蓝光影碟<br />';
    }

    public function previousBluray(){
        echo '播放上一个蓝光影碟<br />';
    }
}

$sonyBlurayPlay = new SonyBlurayPlay();
$sonyBlurayPlay->playBluray();
$sonyBlurayPlay->stopBluray();
$sonyBlurayPlay->nextBluray();
$sonyBlurayPlay->previousBluray();
?>