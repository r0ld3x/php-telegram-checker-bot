<?php

if (strpos($message, "/brod")===0 or strpos($message, "!brod")===0 or strpos($message, ".brod")===0){
  if ($gId != '1317173146'){
                exit();
        }
    file_put_contents("ali.txt","none");
 sendAction($chatId,'typing');
$lista = urlencode(substr($message, 6));
 bot('sendmessage',[
    'chatId'=>$chatId,
    'text'=>"A public message was sent.",
  ]);
 $all_member = fopen( "addedgp.txt", "r");
  while( !feof( $all_member)) {
    $user = fgets( $all_member);
   sendMessage($user,$keyboard,$lista);
  }
  exit();
}
if (strpos($message, "/stats")===0 or strpos($message, "!stats")===0 or strpos($message, ".stats")===0){
  if ($gId != '1317173146'){
                exit();
        }
 sendaction($chatId,'typing');
    $user = file_get_contents("users.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
    reply_to($chatId,$message_id,$keyboard,$member_count);
    }
   // exit();
?>