<?php

require_once 'services/slack.php';
require_once 'services/hipchat.php';


interface Chat {

    public function sendMessage($message);
}

class Process {

    public $chat;
    public $message = '';

    public function __construct(Chat $chat, $call){
        $this->chat = $chat;

        if($call == 'call_init'){
            $this->message = $this->message.' Arama basladi ';
        }else {
            $this->message = ' Arama sonlandi ';
        }
    }

    public function setDirection($direction){
        if($direction == 'IN'){
            $this->message = $this->message.' Arama turu: Gelen ';
        } else if($direction == 'OUT'){
            $this->message = $this->message.' Arama turu: Giden ';
        } else {
            $this->message = $this->message.' Arama turu: Santral ici ';
        }
    }

    public function setCaller($number){
        $this->message = $this->message.' Arayan numara: '.$number;
    }

    public function setCalee($number){
        $this->message = $this->message.' Aranan numara: '.$number;
    }

    public function __destruct(){
        $this->chat->sendMessage($this->message);
    }

}