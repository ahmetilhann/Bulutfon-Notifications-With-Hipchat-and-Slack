<?php

require_once 'vendor/autoload.php';

use Maknz\Slack\Client;

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

class Slack implements Chat {

    public $webhook_url;
    public $channel;

    public function __construct($webhook_url, $room){

        $this->webhook_url = $webhook_url;
        $this->room = $room;
    }

    public function sendMessage($message) {

        $client = new Client($this->webhook_url);
        $client->to($this->channel)->send($message);
    }
}