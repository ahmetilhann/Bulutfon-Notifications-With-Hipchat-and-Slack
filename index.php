<?php

require_once 'process.php';
require_once 'services.php';
require_once 'constants.php';



$h = new Hipchat($token, $room, $from);
$s = new Slack($weebhook_url, $channel);


$call = isset($_POST['event_type']) ? $_POST['event_type'] : false;
$caller = isset($_POST['caller']) ? $_POST['caller'] : false;
$callee = isset($_POST['callee']) ? $_POST['callee'] : false;
$direction = isset($_POST['direction']) ? $_POST['direction'] : false;

switch($call){
    case 'call_init':

        $p = new Process($s, $call);
        $p->setDirection($direction);
        $p->setCaller($caller);
        $p->setCalee($callee);

        break;

    case 'call_hangup':

        $p = new Process($s, $call);

        break;
    default:
        echo 'Forbitten';
        break;

}






















