<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '229766345:AAHfzT_RbHIQ2o_VLTaT3OOkq00r39-bn14';
$BOT_NAME = 'Were_bot';
$hook_url = 'https://jghl.herokuapp.com//path/to/hook.php';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebHook($hook_url);

    // Uncomment to use certificate
    //$result = $telegram->setWebHook($hook_url, $path_certificate);

    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
