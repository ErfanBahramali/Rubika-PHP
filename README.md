<p align="center">
<a href='https://web.rubika.ir' target="_blank">
<img src='https://bahramali.ir/img/rubika.logo.svg'></img></a></p>
<br />
<p align="center">
<a href="https://packagist.org/packages/bahramali/rubika-php"  target="_blank"><img src="https://img.shields.io/packagist/dt/bahramali/rubika-php" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/bahramali/rubika-php"  target="_blank"><img src="https://img.shields.io/packagist/v/bahramali/rubika-php" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/bahramali/rubika-php"  target="_blank"><img src="https://img.shields.io/packagist/l/bahramali/rubika-php?" alt="License"></a>
</p>

# Rubika-PHP
Rubika-PHP is a PHP Library for interaction with rubika (social network)

## Installation
```
composer require bahramali/rubika-php
```
## Usage
*object_guid($user_guid,$group_guid,$channel_guid and other) is a unique code for user, group, channel and other*
```php
set_time_limit(0);
require_once __DIR__ . '/vendor/autoload.php';

use RubikaPHP\RubikaPHP;

$account = new RubikaPHP(989123456789); // Only without zero and with area code 98
$account->onUpdate(function (array $update) use ($account) {
    if (isset($update['data_enc'])) {
        $message = $update['data_enc'];
        // other code
    }
});

```
```php
$account->getChats(); // get all of chats

$account->getChatAds(); // get all of chats ads

$account->getChatsUpdates(); // get chat updates

$account->getMySessions(); // get all of account session

$account->getUserInfo($user_guid);

$account->getGroupInfo($group_guid);

$account->getChannelInfo($channel_guid);

$account->getAbsObjects($objects_guids);

$account->getMessagesInterval($object_guid, $middle_message_id); // get message content by message id

$account->getMessagesUpdates($object_guid);

$account->getMessages($object_guid, $sort, $filter_type, $max_id);

$account->getMessagesByID($object_guid, $message_ids);

$account->getPollStatus($poll_id);

$account->seenChats($seen_list);

$account->searchChatMessages($search_text, $type, $object_guid);

$account->searchGlobalObjects($search_text);

$account->searchGlobalMessages($search_text, $type);

$account->sendMessage($object_guid, $text);

$account->votePoll($poll_id, $selection_index);

```
## Example
* [`parrot.php`](https://github.com/ErfanBahramali/Rubika-PHP/blob/main/examples/parrot.php) 

## About Us
This library can be used for easy interaction with Rubika just like official applications.

## Disclaimer


<b>This library is free and can not be sold.</b>


<b>The responsibility for using this library lies with the individual</b>


## License
Rubika-PHP is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
