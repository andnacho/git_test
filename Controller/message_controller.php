<?php

require_once("Model/Message.php");

$msg = new Message();
$messages = $msg->getMessage();

require_once('View/message_view.php');