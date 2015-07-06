<?php

require_once 'process.php';
require_once 'slack.php';
require_once 'hipchat.php';
require_once 'constants.php';

$mes = 'merhaba benim sabah';


$h = new Hipchat($token, $room, $from);

$s = new Slack($weebhook_url, $channel);

$p = new Process($s);

$p->notification($mes);















