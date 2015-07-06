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

    public function notification($message){
        $this->chat->sendMessage($message);
    }

}