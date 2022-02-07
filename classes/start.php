<?php
if (strpos($message, "/start")===0 or strpos($message, "!start")===0 or strpos($message, ".start")===0){
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y:h:i:s A', time () );
$keyboard = [
    'inline_keyboard' => [
        [

            ['text' => 'Free', 'callback_data' => 'free'], ['text' => 'Premium', 'callback_data' => 'paid'],['text' => 'Others', 'callback_data' => 'others'],['text' => 'Finalize','callback_data' => 'end']
        ],
      
]];
    // $date = date("d/m/y");
    $time = date("h:i a", time());
$encodedKeyboard = json_encode($keyboard);
sendaction($chatId, typing);
            bot('sendmessage', [
                'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
                'text' =>"<b>HEY <a href='tg://user?id=$gId'>$firstname</a> Hit /register to use me by the way your Id is <code>$gId</code> and current date and time at India🇮🇳 Is $currentTime
This Bot Is Made With ♥️ By <code>@r0ld3x</code> 
Check Out My Commands Down</b>",
 'parse_mode'=>'HTML',
 'reply_markup' => $encodedKeyboard
 ]);
}
?>