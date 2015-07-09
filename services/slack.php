<?php

require_once '/../vendor/autoload.php';



class Slack implements Chat {

    public $webhook_url;
    public $channel;

    public function __construct($webhook_url, $room){

        $this->webhook_url = $webhook_url;
        $this->room = $room;
    }

    public function sendMessage($message) {

        $client = new \Maknz\Slack\Client($this->webhook_url);
        $client->to($this->channel)->send($message);
    }
}