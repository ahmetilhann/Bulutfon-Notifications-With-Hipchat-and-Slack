<?php

require_once '/../vendor/autoload.php';

class Hipchat implements Chat {

    public $token;
    public $from;
    public $room;

    public function __construct($token, $room, $from){

        $this->token = $token;
        $this->room = $room;
        $this->from = $from;
    }

    public function sendMessage($message) {

        $hc = new \HipChat\HipChat($this->token);
        $hc->message_room($this->room, $this->from, $message, true, 'random');
    }
}