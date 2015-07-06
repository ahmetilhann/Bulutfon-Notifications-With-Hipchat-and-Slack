<?php

require_once 'vendor/autoload.php';
require_once 'process.php';
require_once 'hipchat.php';

use Maknz\Slack\Client;


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