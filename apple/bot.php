<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);

$chat_id = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

if($message == "/start") {
    sendMessage($chat_id, "Welcome to your new bot!");
}

function sendMessage($chat_id, $message) {
    $apiToken = "8161234949:AAHiDZEsAjbBbx21Haz9emZyPCVGu0vv2Rg";
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=".urlencode($message);
    file_get_contents($url);
}
?>
