<?php

require_once 'slack.php';
require_once 'hipchat.php';

interface Chat {

    public function sendMessage($message);
}

class Process {

    public $chat;

    public function __construct(Chat $chat){
        $this->chat = $chat;
    }

    public function sendNotification($message){
        $this->chat->sendMessage($message);
    }

    public function sendCaller($number){
        $this->chat->sendMessage($number.' Ariyor');
    }

    public function sendCalee($number){
        $this->chat->sendMessage($number.' Web hook santral numarasini tetikledi');
    }

    public function sendCallTime($timestamp){
        $date = date('H:i:s', $timestamp);
        $this->chat->sendMessage($date.' Saat');
    }

}