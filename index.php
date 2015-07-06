<?php

require_once 'process.php';
require_once 'slack.php';
require_once 'hipchat.php';
require_once 'constants.php';



$message = 'Web hook ile gonderilecek mesaj';

$h = new Hipchat($token, $room, $from);
$s = new Slack($weebhook_url, $channel);

$p = new Process($s);


$call = isset($_POST['direction']) ? $_POST['direction'] : false;

switch($call){
    case 'IN':
        $caller = $_POST['caller'];
        $callee = $_POST['callee'];
        $timestamp = $_POST['timestamp'];
        $p->sendNotification('Arama...');
        $p->sendCaller($caller);
        $p->sendCalee($callee);
        $p->sendCallTime($timestamp);
        break;

    case 'OUT':
        break;
    default:
        echo 'Forbitten';
        break;

}






















