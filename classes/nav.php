<?php
if(strpos($message, "/buy")===0 or strpos($message, "!buy")===0 or strpos($message, ".buy")===0){
 sendaction($chatId, typing);
reply_to($chatId, $message_id,$keyboard,$buyit);
      
}
if(strpos($message, '!addgp') === 0 or strpos($message, '/addgp') === 0 or strpos($message, '.addgp') === 0){
if($gId != '1317173146'){
exit();}
sendaction($chatId, typing);
	$user = file_get_contents('addedgp.txt');
        $members = explode("\n", $user);
        if (!in_array($chatId, $members)) {
            $add_user = file_get_contents('addedgp.txt');
            $add_user .= $chatId . "\n";
            // file_put_contents("data/$chat_id/sinalfa.txt");
            file_put_contents('users.txt', $add_user);
        }
        
reply_to($chatId, $message_id,$keyboard,"ok");
deleteM($chatId,$message_id);
exit();}
if(strpos($message, "/addcr")===0 or strpos($message, "!addcr")===0 or strpos($message, ".addcr")===0){
  if ($gId != '1317173146'){
                exit();
        }

sendaction($chatId, typing);
$lista = substr($message, 7);
if(empty($lista)){
$antispam = "FORMAT /addcr ID|AMOUNT|ROLE";
}
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
if(empty($ano)){
$ano = 'MEMBER';
}

$link = mysqli_connect("localhost", "root", "", "demo");

$sql = "SELECT credits FROM persons WHERE userid='$cc'";
$result = mysqli_query($link, $sql);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$client1 = trim(strip_tags(getStr($final2, '"credits":"','"')));
mysqli_close($link);

$link = mysqli_connect("localhost", "root", "", "demo");

// Check connection
// Attempt create database query execution
$sql = "UPDATE persons SET credits = '$mes' WHERE persons.userid='$cc'";
$result = mysqli_query($link, $sql);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final = json_encode($json_array);
if(!mysqli_query($link, $sql)){
reply_to($chatId, $message_id,$keyboard,"USER NOT REGISTERED YET");
exit();
}
mysqli_close($link); 

$link = mysqli_connect("localhost", "root", "", "demo");

// Check connection
// Attempt create database query execution
$sql = "UPDATE persons SET role = '$ano' WHERE persons.userid='$cc'";
$result = mysqli_query($link, $sql);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final = json_encode($json_array);

if(mysqli_query($link, $sql)){
    $result = urlencode("<b>════════ 『 ROLDEX 』════════
  Updated old Credits = $client1
  Credits Now = $mes
  Insterted to = <a href='tg://user?id=$cc'>$cc</a>
  Role : $ano</b>");
}else{
    $result = "ERROR";
}
mysqli_close($link);
reply_to($chatId, $message_id,$keyboard,$result);
exit();
}
if(strpos($message, "/addbin")===0 or strpos($message, "!addbin")===0 or strpos($message, ".addbin")===0){
  if ($gId != '1317173146'){
                exit();
        }
sendaction($chatId, typing);
$lista = substr($message, 8);
sendMessage1 ($lista);
$bugbin = file_get_contents('banned.txt');
$exploded = explode("\n", $bugbin);
if (!in_array($lista, $exploded)) {
$add_user = file_get_contents('banned.txt');
$add_user .= $lista . "\n";
$test =  file_put_contents('banned.txt', $add_user);
}
if($test == true){
reply_to($chatId, $message_id,$keyboard,"DONE");
}else{
reply_to($chatId, $message_id,$keyboard,"ALREADY ADDED");
}
}

if(strpos($message, "/cmds")===0 or strpos($message, "!cmds")===0 or strpos($message, ".cmds")===0){
  sendaction($chatId, typing);
$keyboard = [
    'inline_keyboard' => [
        [

            ['text' => 'Free', 'callback_data' => 'free'], ['text' => 'Premium', 'callback_data' => 'paid'],['text' => 'Others', 'callback_data' => 'others'],['text' => 'Finalize','callback_data' => 'end']
        ],
      
]];
$encodedKeyboard = json_encode($keyboard);
$response = urlencode ("<b>Hey <a href='tg://user?id=$gId'>$firstname</a>
Click Button To Check Cmds</b>");
$result =file_get_contents("https://api.telegram.org/bot<Bottoken>/sendMessage?chat_id=$chatId&text=$response&reply_to_message_id=$message_id&parse_mode=HTML&reply_markup=$encodedKeyboard");


}


if(strpos($message, "/info")===0 or strpos($message, "!info")===0 or strpos($message, ".info")===0){
$link = mysqli_connect("localhost", "root", "", "demo");

$sql = "SELECT credits FROM persons WHERE userid='$gId'";
$result = mysqli_query($link, $sql);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);
$client = trim(strip_tags(getStr($final2, '"credits":"','"')));
mysqli_close($link); 

$link = mysqli_connect("localhost", "root", "", "demo");

$sql = "SELECT role FROM persons WHERE userid='$gId'";
$result20 = mysqli_query($link, $sql);
$json_array = [];
while ($row = mysqli_fetch_assoc($result20)) {
  $json_array[] = $row;
}
$final201 = json_encode($json_array);
$bread = trim(strip_tags(getStr($final201, '"role":"','"')));
mysqli_close($link);
if(empty($bread)){
$bread = "NOT REGISTERED";
}

$cmds13 = urlencode("<b>════════ 『 ROLDEX 』════════
••YOUR INFORMATION
◽Username: @$username
◽I'd: <code>$gId</code>
◽Firstname: $firstname
◽Credit: $client 💍
◽Profile Link: <a href='tg://user?id=$gId'>@$username</a>
◽Type: $bread</b>");

        sendaction($chatId, typing);
    reply_to($chatId, $message_id, $keyboard,$cmds13);
}


if($message == "/time"){
    $time = date("h:i a", time());
    reply_to($chatId,$message_id,$keyboard, "$time IST");
}
if($message == "/date"){
    $date = date("d/m/y");
    reply_to($chatId,$message_id,$keyboard, $date);
}

if(strpos($message, "/credits")===0 or strpos($message, "!credits")===0 or strpos($message, ".credits")===0){
$link = mysqli_connect("localhost", "root", "", "demo");

$sql = "SELECT credits FROM persons WHERE userid='$gId'";
$result = mysqli_query($link, $sql);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$client = trim(strip_tags(getStr($final2, '"credits":"','"')));
// sendMessage($chatId, $client);
mysqli_close($link);

if (empty($client)){
$cclient = urlencode("Register First Newbie.");
}else if($client <= 0 ){
$cclient = urlencode("<b><a href='tg://user?id=$gId'>@$username</a> YOU HAVE $client 💎 \n RECHARGE NOW WITH OUR EXCITING PRICES \n HIT /buy TO BUY</b>");
}else{
$cclient = urlencode("<b> <a href='tg://user?id=$gId'>@$username</a> YOU HAVE $client 💎 \n IF YOU WANT MORE \n RECHARGE NOW BY HITTING /buy ASAP! </b>");
}
               sendaction($chatId, typing);
   reply_to($chatId, $message_id,$keyboard, $cclient);


}

if(strpos($message, "/gates")===0 or strpos($message, "!gates")===0 or strpos($message, ".gates")===0){
  sendaction($chatId, typing);
    

$keyboard = [
    'inline_keyboard' => [
        [

            ['text' => 'Free', 'callback_data' => 'free'], ['text' => 'Premium', 'callback_data' => 'paid'],['text' => 'Others', 'callback_data' => 'others'],['text' => 'Finalize','callback_data' => 'end']
        ],
      
]];
$encodedKeyboard = json_encode($keyboard);
$response = urlencode ("<b>Hey <a href='tg://user?id=$gId'>$firstname</a>
Click Button To Check Cmds</b>");
$result =file_get_contents("https://api.telegram.org/bot<Bottoken>/sendMessage?chat_id=$chatId&text=$response&reply_to_message_id=$message_id&parse_mode=HTML&reply_markup=$encodedKeyboard");


}
if(strpos($message, "/id")===0 or strpos($message, "!id")===0 or strpos($message, ".id")===0){
  sendaction($chatId, typing);
    reply_to($chatId, $message_id,$keyboard,"<b>YOUR ID: <code>$gId</code> %0A CHAT ID: <code>$chatId</code> %0A LINK: <a href='tg://user?id=$gId'>@$username</a></b>");

}


if(strpos($message, "/filter")===0 or strpos($message, "!filter")===0 or strpos($message, ".filter")===0){
sendaction($chatId, typing);
if ($gId != '1317173146'){
                exit();
        }
  $lista = substr($message, 8);
  if (empty($lista)){
reply_to($chatId,$message_id,$keyboard,$validauth);
exit();
}
$OneXd = clean($lista);
$lista = explode('|', $Onexd);
$cc    = $lista[0];
$mes   = $lista[1];
$ano   = $lista[2];
$cvv   = $lista[3];
$lista = "$cc|$mes|$ano|$cvv";

reply_to($chatId,$message_id,$keyboard,$lista);
}
if(strpos($message, "/link")===0 or strpos($message, "!link")===0 or strpos($message, ".link")===0){
sendaction($chatId, typing);
if ($gId != '1317173146'){
                exit();
        }
  $lista = substr($message, 5);
  $lista = clean($lista);
  if (empty($lista)){
reply_to($chatId,$message_id,$keyboard,$validauth);
exit();
}
$lista = "<a href='tg://user?id=$lista'>$lista</a>.";

reply_to($chatId,$message_id,$keyboard,$lista);
}

?>