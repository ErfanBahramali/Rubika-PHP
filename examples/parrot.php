#!/usr/bin/env php
<?php

/**
 * https://github.com/ErfanBahramali/Rubika-PHP
 */
set_time_limit(0);
require_once __DIR__ . '/vendor/autoload.php';

use RubikaPHP\RubikaPHP;

$account = new RubikaPHP(989123456789); // Only without zero and with area code 98
$account->onUpdate(function (array $update) use ($account) {
    if (isset($update['data_enc'])) {
        $message = $update['data_enc'];
        foreach ($message['message_updates'] as $value) {
            $messageContent = $value['message'];
            $type = $messageContent['type'];
            $author_type = $messageContent['author_type'];
            $author_object_guid = $messageContent['author_object_guid'];
            if ($author_type == 'User' && $type == 'Text') {
                $text = $messageContent['text'];
                $account->sendMessage($author_object_guid, $text);
            }
        }
    }
});
