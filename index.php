<?php
/**
 * Created by PhpStorm.
 * User: mhrezai
 * Date: 05/10/2018
 * Time: 05:43 PM
 */
include 'vendor/autoload.php';
$telegram = new telegramBot('623045896:AAFT89eXGayhB7G6wlIEty-01vSuRmjXDgI');
$chat_id = @$_GET['chat_id'];
$text = @$_GET['text'];
if (isset($chat_id) && isset($text)) {
    $telegram->sendMessage($chat_id, $text);
}
$update = $telegram->getWebhookUpdates();
//$chat_id = $update->message->chat->id;
$telegram->sendMessage(32862694, json_encode($update));
