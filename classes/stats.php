<?php

define('ADMIN_ID', '1317173146');
define('USERS_FILE', 'users.txt');
define('GROUPS_FILE', 'addedgp.txt');

function isAdmin($userId) {
    return $userId == ADMIN_ID;
}

function broadcastMessage($chatId, $message) {
    if (!isAdmin($chatId)) {
        sendMessage($chatId, "You don't have permission to use this command.");
        return;
    }

    $broadcastMessage = substr($message, 6);
    if (empty($broadcastMessage)) {
        sendMessage($chatId, "Please provide a message to broadcast.");
        return;
    }

    file_put_contents("ali.txt", "none");
    sendAction($chatId, 'typing');

    $encodedMessage = urlencode($broadcastMessage);
    sendMessage($chatId, "A public message is being sent.");

    $successCount = 0;
    $failCount = 0;

    if (($handle = fopen(GROUPS_FILE, "r")) !== FALSE) {
        while (($user = fgets($handle)) !== false) {
            $user = trim($user);
            if (!empty($user)) {
                try {
                    sendMessage($user, $encodedMessage);
                    $successCount++;
                } catch (Exception $e) {
                    $failCount++;
                }
            }
        }
        fclose($handle);
    }

    sendMessage($chatId, "Broadcast completed. Successful: $successCount, Failed: $failCount");
}

function getStats($chatId, $messageId) {
    if (!isAdmin($chatId)) {
        sendMessage($chatId, "You don't have permission to use this command.");
        return;
    }

    sendAction($chatId, 'typing');

    $userCount = 0;
    if (file_exists(USERS_FILE)) {
        $users = file(USERS_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $userCount = count($users);
    }

    reply_to($chatId, $messageId, "Total users: $userCount");
}

if (strpos($message, "/brod") === 0 || strpos($message, "!brod") === 0 || strpos($message, ".brod") === 0) {
    broadcastMessage($chatId, $message);
} elseif (strpos($message, "/stats") === 0 || strpos($message, "!stats") === 0 || strpos($message, ".stats") === 0) {
    getStats($chatId, $message_id);
}

?>
