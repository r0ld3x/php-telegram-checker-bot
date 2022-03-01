<?php
$validauth = urlencode ("<b>[ALERT] <i>GIVE ME VALID CARD</i></b>");
$maintain = urlencode ("<b>[ALERT] <u>GATE ON MAINTENANCE</u>
~ USE ANOTHER WORKING GATES</b>");
$noregister = urlencode ("<b>[ALERT] YOU DON'T REGISTERED YOURSELF. PLEASE REGISTER YOURSELF FIRST TO USE ME 
•• USE /register TO REGISTER ME</b>");
$noreg = urlencode ("<b>[ALERT] YOU DON'T REGISTERED YOURSELF. PLEASE REGISTER YOURSELF FIRST TO USE ME 
•• USE /register TO REGISTER ME</b>");
$nocredits = urlencode ("<b>️[ALERT] YOU DON'T HAVE SUFFICIENT CREDITS TO USE ME. 
•• RECHARGE NOW BY HITTING /buy</b>");
$buyit = urlencode("<b>Use <code>.credits</code> Know Your Available Credits
-> 100 CREDITS + PREMIUM ACCESS - 5$
-> 300 CREDITS + PREMIUM ACCESS - 10$
-> 500 CREDITS + PREMIUM ACCESS - 15$
-> 1000 CREDITS + PREMIUM ACCESS - 25$
>> PING <code>@r0ld3x</code> For Purchasing
Note -⟩ We Only Accept Upi And Crytpo</b>");

$nopre = urlencode("<b>YOU NEED TO BE PREMIUM TO USE THIS COMMAND.
Hit /buy to purchase</b>");
$botToken =  "<Bottoken>";
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents('php://input');
echo $update;
$update = json_decode($update, TRUE);
global $website;
$e = print_r($update);
$cchatid2 = $update["callback_query"]["message"]["chat"]["id"];
$cmessage_id2 = $update["callback_query"]["message"]["message_id"];
$cdata2 = $update["callback_query"]["data"];
$username = $update["message"]["from"]["username"];
$chatId = $update["message"]["chat"]["id"]; 
$chatusername = $update["message"]["chat"]["username"]; 
$chatname = $update["message"]["chat"]["title"]; 
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"]; 
$firstname = $update["message"]["from"]["first_name"]; 
$username = $update["message"]["from"]["username"]; 
$message = $update["message"]["text"]; 
$new_chat_member = $update["message"]["new_chat_member"];
$newusername = $update["message"]["new_chat_member"]["username"];
$newgId = $update["message"]["new_chat_member"]["id"];
$newfirstname = $update["message"]["new_chat_member"]["first_name"];
$message_id = $update["message"]["message_id"]; 
$r_id = $update["message"]["reply_to_message"];
$r_userId = $update["message"]["reply_to_message"]["from"]["id"];  
$r_firstname = $update["message"]["reply_to_message"]["from"]["first_name"];  
$r_username = $update["message"]["reply_to_message"]["from"]["username"]; 
$r_msg_id = $update["message"]["reply_to_message"]["message_id"]; 
$r_msg = $update["message"]["reply_to_message"]["text"]; 
$sender_chat = $update["message"]["sender_chat"]["type"]; 
if ($cdata2 == "free"){
$islive = 'ON';
    $keyboard = ['inline_keyboard' => [[
           ['text' => 'Premium', 'callback_data' => 'paid'], 
           ['text' => 'Buy', 'callback_data' => 'buy'], 
           ['text' => 'Others', 'callback_data' => 'others'], 
           ['text' => 'Finalize', 'callback_data' => 'end']],
      
]];

if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
$freecommands = urlencode("<b>
GATE NAME | COMMANDS
Stripe Auth<code>.ch</code>[<i>$islive</i>]
Stripe Auth<code>.str</code>[<i>$islive</i>]
Mass <code>.mass</code>[<i>$islive</i>]
Razorpay <code>.rp</code>[<i>$islive</i>]
</b>");
$free = json_encode($keyboard);
        file_get_contents("https://api.telegram.org/bot<Bottoken>/editMessageText?chat_id=$cchatid2&text=$freecommands&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$free");

}
if ($cdata2 == "paid"){
$islive = 'ON';
    $keyboard = [
    'inline_keyboard' => [
        [

           ['text' => 'Free', 'callback_data' => 'free'], 
           ['text' => 'Others', 'callback_data' => 'others'], 
           ['text' => 'Buy', 'callback_data' => 'buy'], 
           // ['text' => 'Buy Now', 'url' => 'https://t.me/r0ld3x'], 
           ['text' => 'Finalize', 'callback_data' => 'end']
        ]
        ]];
$freecommands = urlencode("<b>
GATE NAME | COMMANDS
Stripe CHARGE 3$<code>.stc</code>[<i>$islive</i>]
Stripe CHARGE 4$<code>.stp</code>[<i>$islive</i>]
Stripe CHARGE 20$<code>.rape</code>[<i>$islive</i>]
Stripe CHARGE 25$<code>.sto</code>[<i>$islive</i>]
Stripe CHARGE AUTH<code>.sa</code>[<i>$islive</i>]
BRAINTREE <code>.btu</code>[<i>$islive</i>]
SQUARE UP <code>.sq</code>[<i>$islive</i>]
SK Mass <code>.mchk</code>[<i>$isalive</i>]
Auth <code>.aut</code>[<i>$islive</i>]
</b>");
$free = json_encode($keyboard);
        file_get_contents("https://api.telegram.org/bot<Bottoken>/editMessageText?chat_id=$cchatid2&text=$freecommands&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$free");

}
if ($cdata2 == "others"){

    $keyboard = [
    'inline_keyboard' => [
        [
            ['text' => 'FREE', 'callback_data' => 'free'],
            ['text' => 'Buy', 'callback_data' => 'buy'], 
            ['text' => 'Premium','callback_data' => 'paid'],
            ['text' => 'Finalize', 'callback_data' => 'end']
        ]
        ]];
$freecommands = urlencode("<b>->> <code>.credits</code> Know Your Available Credits
->> <code>.info</code> Know Your Information
->> <code>.gen</code> Generate Extrap From Bin
->> <code>.key</code> Check Stripe Key
->> <code>.bin</code> Check Bin
->> <code>.git</code> Check Github Username
->> <code>.weather</code> Check Weather Of Your City
->> <code>.dic</code> Check Word Meaning
->> <code>.tr</code> Translate Given Text
->> <code>.rand</code> Random Identity Generator
->> <code>.http</code> Get Http Proxies
->> <code>.socks4</code> Get Socks4 Proxies
->> <code>.socks5</code> Get Socks5 Proxies

Note-⟩ If you get any type of bugs in this bot please inform our team at @r0ld3xrobot</b>");
$free = json_encode($keyboard);
        file_get_contents("https://api.telegram.org/bot<Bottoken>/editMessageText?chat_id=$cchatid2&text=$freecommands&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$free");

}
if ($cdata2 == "buy"){

    $keyboard = [
    'inline_keyboard' => [
         [['text' => 'Buy Now', 'url' => 'https://t.me/r0ld3x'], 
         ['text' => 'Premium', 'callback_data' => 'paid'],
         ['text' => 'Finalize', 'callback_data' => 'end']]
        ]];
$freecommands = urlencode("<b>Use <code>.credits</code> Know Your Available Credits
-> 100 CREDITS + PREMIUM ACCESS - 5$
-> 300 CREDITS + PREMIUM ACCESS - 10$
-> 500 CREDITS + PREMIUM ACCESS - 15$
-> 1000 CREDITS + PREMIUM ACCESS - 25$
Note-⟩ We Only Accept [UPI][GIFT CARDS][CRYTPO]</b>");
$free = json_encode($keyboard);
        file_get_contents("https://api.telegram.org/bot<Bottoken>/editMessageText?chat_id=$cchatid2&text=$freecommands&message_id=$cmessage_id2&parse_mode=HTML&reply_markup=$free");

}
elseif ($cdata2 == "end"){ 
$finalize = urlencode("<b>Inline Mode Closed  <a href='tg://user?id=$gId'>$firstname</a></b>"); 
file_get_contents("https://api.telegram.org/bot<Bottoken>/editMessageText?chat_id=$cchatid2&text=$finalize&message_id=$cmessage_id2&parse_mode=HTML");
}
if($sender_chat == 'channel'){
exit();
}
if(empty($username)){
$username = "Set Username Noob";
}elseif(empty($newusername)){
$newusername = "Set Username Noob";
}
if(!empty($r_id)){
$r_msg = $update["message"]["reply_to_message"]["text"]; 
$message = $update["message"]["text"]; 
$message = $message ." ".$r_msg;
}

if(!empty($new_chat_member)){
    $keyboard = [
    'inline_keyboard' => [
        [

           ['text' => 'Free', 'callback_data' => 'free'], 
           ['text' => 'Others', 'callback_data' => 'others'], 
           ['text' => 'Buy', 'callback_data' => 'buy'], 

           ['text' => 'Finalize', 'callback_data' => 'end']
        ]
        ]];
        $free = json_encode($keyboard);
bot('sendmessage', [
                'chat_id' =>$chatId,
'reply_to_message_id'=>$message_id,
                'text' =>"<b>
HEY <a href='tg://user?id=$gId'>$newfirstname</a>
WELCOME TO $chatname and chat id of this group is  <code>$chatId</code> and your id is <code>$gId</code>

THIS BOT IS MADE WITH ♥️ BY  <code>@r0ld3x</code> </b>",
 'parse_mode'=>'HTML',
 'reply_markup' => $free,
 ]);
        exit();
}

$premium_id = (array("1792903396","1317173146"));
$premiumgp = (array("-1001320804136","-1001552296979","-1001300027599","-1001298504199","-1001434792768"));
        $keyboard = json_encode([
'inline_keyboard' => [
[['text' => "OWNER", 'url' => "https://t.me/r0ld3x"],]
]]);
                $keyboard1 = json_encode([
'inline_keyboard' => [
[['text' => "CHANNEL", 'url' => "https://t.me/RoldexVerse"],
['text' => "GROUP", 'url' => "https://t.me/RoldexVerseChats"],]
]]);

// if(!in_array($chatId, $premiumgp)){
	// $tch = json_decode(file_get_contents("https://api.telegram.org/bot<Bottoken>/getChatMember?chat_id=@roldexverse&user_id=".$gId))->result->status;
	$user = file_get_contents('users.txt');
        $members = explode("\n", $user);
        if (!in_array($gId, $members)) {
            $add_user = file_get_contents('users.txt');
            $add_user .= $gId . "\n";
            file_put_contents('users.txt', $add_user);
        //
         }
        // 
// if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
// bot('sendMessage',['chat_id'=>$chatId,'reply_to_message_id'=>$message_id,'text'=>"Sorry <a href='tg://user?id=$gId'>$firstname</a>
// 
// You Need To Join My Update Channel To Get Regular Updates
// 
// Made With ♥️ By @r0ld3x
// USE /start AFTER JOIN",
 // 'parse_mode'=>'HTML',
 // 'reply_markup' =>  $keyboard1,
// ]);
// exit();
// }
        	// $tch = json_decode(file_get_contents("https://api.telegram.org/bot<Bottoken>/getChatMember?chat_id=@roldexversechats&user_id=".$gId))->result->status;
// if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
// bot('sendMessage',['chat_id'=>$chatId,'reply_to_message_id'=>$message_id,'text'=>"Sorry <a href='tg://user?id=$gId'>$firstname</a>
// 
// You Need To Join My Update Channel To Get Regular Updates
// 
 // Made With ♥️ By @r0ld3x And @RoldexVerse
// 
// USE /start AFTER JOIN",
 // 'parse_mode'=>'HTML',
 // 'reply_markup' =>  $keyboard1,
// ]);
// exit();
// }
// }
// $x3 = strtolower(SID());
// $sid =  substr($x3, 0, 42);   
// $x4 = uniqid();
// $uid = substr($x4, 0, 11);
// $gid = substr($x4, 0, 11);
// $x2 = strtolower(MUID());
// $muid =  substr($x2, 0, 42);
// $x = strtolower(GUID());
// $guid =  substr($x, 0, 42);
// $tid = mt_rand(11111,99999);
// $tid2 = mt_rand(111111,999999);

if(strpos($message, '!key') === 0 or strpos($message, '/key') === 0 or strpos($message, '.key') === 0){
    $keyboard = [
    'inline_keyboard' => [[['text' => 'Features', 'callback_data' => 'paid'], ['text' => 'Buy', 'callback_data' => 'buy'], ['text' => 'Buy Now', 'url' => 'https://t.me/r0ld3x'],]]];
$keyboard = json_encode($keyboard);
checkrole($chatId,$message_id,$keyboard,$nopre,$gId);
sendaction($chatId, typing);
$lista = substr($message, 5);
$check = strlen($lista);
$check1 = strlen($lista, 0,7);
$chem = substr($lista, 0,1);
if(empty($lista)){
reply_to($chatId, $message_id,$keyboard,$validauth);
exit();
}elseif($check<25){
reply_to($chatId, $message_id,$keyboard,$validauth);
exit();
}elseif(strpos($check1 != 'sk_live')){
reply_to($chatId, $message_id,$keyboard,$validauth);
exit();
}
$sec = substr($message, 4);
$fii = substr($sec, 0,25);
$newstring = substr($sec, -10);
$sss = reply_to($chatId,$message_id,$keyboard,"<b>Checking Wait...</b>");
   $respon = json_decode($sss, TRUE);
            $message_id_1 = $respon['result']['message_id'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=4543218722787334&card[exp_month]=07&card[exp_year]=2026&card[cvc]=780");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
edit_message($chatId,$message_id_1,$keyboard, "<b>? DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> EXPIRED KEY%0A%0A<b>Bot: @RoldexVerseBot </b>");
}
elseif (strpos($result, 'Invalid API Key provided')){
edit_message($chatId,$message_id_1,$keyboard, "<b>═════════ 『 ROLDEX 』═════════%0A❌ DEAD KEY ❌</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> INVALID KEY%0A%0A<b>Bot: @RoldexVerseBot </b>");
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
edit_message($chatId,$message_id_1,$keyboard, "<b>═════════ 『 ROLDEX 』═════════%0A❌ DEAD KEY ❌</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Testmode Charges Only%0A%0A<b>Bot: @RoldexVerseBot </b>");
}else{
edit_message($chatId,$message_id_1,$keyboard, "<b>═════════ 『 ROLDEX 』═════════%0A✅LIVE KEY✅</b>%0A<u>KEY:</u> <code>${fii}xxxxxxxxxxxxxxxxx${newstring}</code>%0A<u>RESPONSE:</u> SK LIVE!!%0A%0A<b>Bot: @RoldexVerseBot</b>");
// sleep(10);
// edit_message($chatId,$message_id_1,$keyboard,"<b>DELETING SK KEY");
deleteM($chatId,$message_id);
exit();
// sleep(3);
// edit_message($chatId,$message_id_1,$keyboard,"<b>DELETED SK KEY");
}}
foreach (glob("classes/*.php") as $filename)
{
    include $filename;
}
// flush();

// reply_to($chatId,$message_id_1,$keyboard,$keyboard, "<b>Sorry! %0AGive Me Valid City Name %0AEX: <code>!weather Bokaro</code></b>");
if(file_exists(getcwd().('/cookie.txt'))){
@unlink('cookie.txt');

}

define('API_KEY',$botToken);

 
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    sendMessage1("ERROR: Could not connect. " . mysqli_connect_error());
	echo '<hr>' . mysqli_connect_error();
}







function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot<Bottoken>/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

function sendaction($chatId, $action){
	bot('sendchataction',[
	'chat_id'=>$chatId,
	'action'=>$action
	]);
	}

	function joincheck($gId,$chatId,$message_id,$firstname){}

function state($state){
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else if($state=="Kentucky"){ $state="KY";
}else{$state="";}
return $result;}
function reply_to($chatId,$message_id,$keyboard,$message) {
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML&reply_markup=".$keyboard."";
        return file_get_contents($url);
}
          

function sendMessage($chatId,$keyboard,$message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
        file_get_contents($url);
       
}
function sendMessage1($message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=-1001532421814&text=".$message."&parse_mode=HTML";
        file_get_contents($url);
        
}
function sendVoice ($chatId,$original) {
       
        $url = $GLOBALS[website]."/sendVoice?chat_id=".$chatId."&voice=".$original."";
        file_get_contents($url);
}
function deleteM ($chatId,$message_id) {
       
        $url = $GLOBALS[website]."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
        file_get_contents($url);
}
function string_between_two_string($str, $starting_word, $ending_word){
$subtring_start = strpos($str, $starting_word);
$subtring_start += strlen($starting_word);
$size = strpos($str, $ending_word, $subtring_start) - $subtring_start;
return substr($str, $subtring_start, $size);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}


function g($l, $k, $p){
  return explode($p, explode($k, $l)[1])[0];
}
// function gibarray($message){
// 
// }

function Capture($str, $starting_word, $ending_word){
$subtring_start  = strpos($str, $starting_word);
$subtring_start += strlen($starting_word);   
$size = strpos($str, $ending_word, $subtring_start) - $subtring_start;
return substr($str, $subtring_start, $size);
}

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false)
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}
function clean($string) {
  $text = preg_replace("/\r|\n/", " ", $string);
     $str1 = preg_replace('/\s+/', ' ', $text);
$str = preg_replace("/[^0-9]/", " ", $str1);
$string = trim($str, " ");
$lista = preg_replace('/\s+/', ' ', $string);
   return $lista; 
}
function clean2($string) {
  $text = preg_replace("/\r|\n/", "", $string);
     $str1 = preg_replace('/\s+/', ' ', $text);
$str = preg_replace("/[^0-9]/", " ", $str1);
$string = trim($str, " ");
$lista = preg_replace('/\s+/', ' ', $string);
// 
   return $result; 
}
function clean1($string) {
$str = preg_replace("/[^0-9]/", " ", $string);
   return $str; 
}
function RemoveSpecialChar($str) { 
    $res = str_replace(array( '\'', '"', 
    ',' , ';', '<', '>','.' ), '', $str); 
    return $res; 
} 

function GUID(){
if (function_exists('com_create_guid') === true){
return trim(com_create_guid(), '{}');
}
return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}
function MUID(){
if (function_exists('com_create_muid') === true){
return trim(com_create_muid(), '{}');
}
return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

function SID(){
if (function_exists('com_create_sid') === true){
return trim(com_create_sid(), '{}');
}
return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}
// sendMessage($chatId,$keyboard,$rand);
function edit_message($chatId,$message_id,$keyboard,$message) {
   $url = $GLOBALS[website]."/editMessageText?chat_id=".$chatId."&text=".$message."&message_id=".$message_id."&parse_mode=HTML";
	file_get_contents($url);
}
function editMessage ($chatId, $message,$message_id){
global $botToken;
$url = "https://api.telegram.org/bot".$botToken."/editMessageText?chat_id=".$chatId."&message_id=".$message_id."&text=••MASS CHECKER%0A".$message."%0A••• BOT BY: @RoldexVerse&parse_mode=HTML";
$result = file_get_contents($url);      
echo $result.'<hr>';
}
function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
function mod($dividendo,$divisor) {     return round($dividendo - (floor($dividendo/$divisor)*$divisor));
 }

function gibarray($message){
    // $cuted = substr($message, 6);
    return explode("\n", $message);
}

function getFlags($code){
    $code = strtoupper($code);
    if($code == 'AD') return '🇦🇩';
    if($code == 'AE') return '🇦🇪';
    if($code == 'AF') return '🇦🇫';
    if($code == 'AG') return '🇦🇬';
    if($code == 'AI') return '🇦🇮';
    if($code == 'AL') return '🇦🇱';
    if($code == 'AM') return '🇦🇲';
    if($code == 'AO') return '🇦🇴';
    if($code == 'AQ') return '🇦🇶';
    if($code == 'AR') return '🇦🇷';
    if($code == 'AS') return '🇦🇸';
    if($code == 'AT') return '🇦🇹';
    if($code == 'AU') return '🇦🇺';
    if($code == 'AW') return '🇦🇼';
    if($code == 'AX') return '🇦🇽';
    if($code == 'AZ') return '🇦🇿';
    if($code == 'BA') return '🇧🇦';
    if($code == 'BB') return '🇧🇧';
    if($code == 'BD') return '🇧🇩';
    if($code == 'BE') return '🇧🇪';
    if($code == 'BF') return '🇧🇫';
    if($code == 'BG') return '🇧🇬';
    if($code == 'BH') return '🇧🇭';
    if($code == 'BI') return '🇧🇮';
    if($code == 'BJ') return '🇧🇯';
    if($code == 'BL') return '🇧🇱';
    if($code == 'BM') return '🇧🇲';
    if($code == 'BN') return '🇧🇳';
    if($code == 'BO') return '🇧🇴';
    if($code == 'BQ') return '🇧🇶';
    if($code == 'BR') return '🇧🇷';
    if($code == 'BS') return '🇧🇸';
    if($code == 'BT') return '🇧🇹';
    if($code == 'BV') return '🇧🇻';
    if($code == 'BW') return '🇧🇼';
    if($code == 'BY') return '🇧🇾';
    if($code == 'BZ') return '🇧🇿';
    if($code == 'CA') return '🇨🇦';
    if($code == 'CC') return '🇨🇨';
    if($code == 'CD') return '🇨🇩';
    if($code == 'CF') return '🇨🇫';
    if($code == 'CG') return '🇨🇬';
    if($code == 'CH') return '🇨🇭';
    if($code == 'CI') return '🇨🇮';
    if($code == 'CK') return '🇨🇰';
    if($code == 'CL') return '🇨🇱';
    if($code == 'CM') return '🇨🇲';
    if($code == 'CN') return '🇨🇳';
    if($code == 'CO') return '🇨🇴';
    if($code == 'CR') return '🇨🇷';
    if($code == 'CU') return '🇨🇺';
    if($code == 'CV') return '🇨🇻';
    if($code == 'CW') return '🇨🇼';
    if($code == 'CX') return '🇨🇽';
    if($code == 'CY') return '🇨🇾';
    if($code == 'CZ') return '🇨🇿';
    if($code == 'DE') return '🇩🇪';
    if($code == 'DJ') return '🇩🇯';
    if($code == 'DK') return '🇩🇰';
    if($code == 'DM') return '🇩🇲';
    if($code == 'DO') return '🇩🇴';
    if($code == 'DZ') return '🇩🇿';
    if($code == 'EC') return '🇪🇨';
    if($code == 'EE') return '🇪🇪';
    if($code == 'EG') return '🇪🇬';
    if($code == 'EH') return '🇪🇭';
    if($code == 'ER') return '🇪🇷';
    if($code == 'ES') return '🇪🇸';
    if($code == 'ET') return '🇪🇹';
    if($code == 'FI') return '🇫🇮';
    if($code == 'FJ') return '🇫🇯';
    if($code == 'FK') return '🇫🇰';
    if($code == 'FM') return '🇫🇲';
    if($code == 'FO') return '🇫🇴';
    if($code == 'FR') return '🇫🇷';
    if($code == 'GA') return '🇬🇦';
    if($code == 'GB') return '🇬🇧';
    if($code == 'GD') return '🇬🇩';
    if($code == 'GE') return '🇬🇪';
    if($code == 'GF') return '🇬🇫';
    if($code == 'GG') return '🇬🇬';
    if($code == 'GH') return '🇬🇭';
    if($code == 'GI') return '🇬🇮';
    if($code == 'GL') return '🇬🇱';
    if($code == 'GM') return '🇬🇲';
    if($code == 'GN') return '🇬🇳';
    if($code == 'GP') return '🇬🇵';
    if($code == 'GQ') return '🇬🇶';
    if($code == 'GR') return '🇬🇷';
    if($code == 'GS') return '🇬🇸';
    if($code == 'GT') return '🇬🇹';
    if($code == 'GU') return '🇬🇺';
    if($code == 'GW') return '🇬🇼';
    if($code == 'GY') return '🇬🇾';
    if($code == 'HK') return '🇭🇰';
    if($code == 'HM') return '🇭🇲';
    if($code == 'HN') return '🇭🇳';
    if($code == 'HR') return '🇭🇷';
    if($code == 'HT') return '🇭🇹';
    if($code == 'HU') return '🇭🇺';
    if($code == 'ID') return '🇮🇩';
    if($code == 'IE') return '🇮🇪';
    if($code == 'IL') return '🇮🇱';
    if($code == 'IM') return '🇮🇲';
    if($code == 'IN') return '🇮🇳';
    if($code == 'IO') return '🇮🇴';
    if($code == 'IQ') return '🇮🇶';
    if($code == 'IR') return '🇮🇷';
    if($code == 'IS') return '🇮🇸';
    if($code == 'IT') return '🇮🇹';
    if($code == 'JE') return '🇯🇪';
    if($code == 'JM') return '🇯🇲';
    if($code == 'JO') return '🇯🇴';
    if($code == 'JP') return '🇯🇵';
    if($code == 'KE') return '🇰🇪';
    if($code == 'KG') return '🇰🇬';
    if($code == 'KH') return '🇰🇭';
    if($code == 'KI') return '🇰🇮';
    if($code == 'KM') return '🇰🇲';
    if($code == 'KN') return '🇰🇳';
    if($code == 'KP') return '🇰🇵';
    if($code == 'KR') return '🇰🇷';
    if($code == 'KW') return '🇰🇼';
    if($code == 'KY') return '🇰🇾';
    if($code == 'KZ') return '🇰🇿';
    if($code == 'LA') return '🇱🇦';
    if($code == 'LB') return '🇱🇧';
    if($code == 'LC') return '🇱🇨';
    if($code == 'LI') return '🇱🇮';
    if($code == 'LK') return '🇱🇰';
    if($code == 'LR') return '🇱🇷';
    if($code == 'LS') return '🇱🇸';
    if($code == 'LT') return '🇱🇹';
    if($code == 'LU') return '🇱🇺';
    if($code == 'LV') return '🇱🇻';
    if($code == 'LY') return '🇱🇾';
    if($code == 'MA') return '🇲🇦';
    if($code == 'MC') return '🇲🇨';
    if($code == 'MD') return '🇲🇩';
    if($code == 'ME') return '🇲🇪';
    if($code == 'MF') return '🇲🇫';
    if($code == 'MG') return '🇲🇬';
    if($code == 'MH') return '🇲🇭';
    if($code == 'MK') return '🇲🇰';
    if($code == 'ML') return '🇲🇱';
    if($code == 'MM') return '🇲🇲';
    if($code == 'MN') return '🇲🇳';
    if($code == 'MO') return '🇲🇴';
    if($code == 'MP') return '🇲🇵';
    if($code == 'MQ') return '🇲🇶';
    if($code == 'MR') return '🇲🇷';
    if($code == 'MS') return '🇲🇸';
    if($code == 'MT') return '🇲🇹';
    if($code == 'MU') return '🇲🇺';
    if($code == 'MV') return '🇲🇻';
    if($code == 'MW') return '🇲🇼';
    if($code == 'MX') return '🇲🇽';
    if($code == 'MY') return '🇲🇾';
    if($code == 'MZ') return '🇲🇿';
    if($code == 'NA') return '🇳🇦';
    if($code == 'NC') return '🇳🇨';
    if($code == 'NE') return '🇳🇪';
    if($code == 'NF') return '🇳🇫';
    if($code == 'NG') return '🇳🇬';
    if($code == 'NI') return '🇳🇮';
    if($code == 'NL') return '🇳🇱';
    if($code == 'NO') return '🇳🇴';
    if($code == 'NP') return '🇳🇵';
    if($code == 'NR') return '🇳🇷';
    if($code == 'NU') return '🇳🇺';
    if($code == 'NZ') return '🇳🇿';
    if($code == 'OM') return '🇴🇲';
    if($code == 'PA') return '🇵🇦';
    if($code == 'PE') return '🇵🇪';
    if($code == 'PF') return '🇵🇫';
    if($code == 'PG') return '🇵🇬';
    if($code == 'PH') return '🇵🇭';
    if($code == 'PK') return '🇵🇰';
    if($code == 'PL') return '🇵🇱';
    if($code == 'PM') return '🇵🇲';
    if($code == 'PN') return '🇵🇳';
    if($code == 'PR') return '🇵🇷';
    if($code == 'PS') return '🇵🇸';
    if($code == 'PT') return '🇵🇹';
    if($code == 'PW') return '🇵🇼';
    if($code == 'PY') return '🇵🇾';
    if($code == 'QA') return '🇶🇦';
    if($code == 'RE') return '🇷🇪';
    if($code == 'RO') return '🇷🇴';
    if($code == 'RS') return '🇷🇸';
    if($code == 'RU') return '🇷🇺';
    if($code == 'RW') return '🇷🇼';
    if($code == 'SA') return '🇸🇦';
    if($code == 'SB') return '🇸🇧';
    if($code == 'SC') return '🇸🇨';
    if($code == 'SD') return '🇸🇩';
    if($code == 'SE') return '🇸🇪';
    if($code == 'SG') return '🇸🇬';
    if($code == 'SH') return '🇸🇭';
    if($code == 'SI') return '🇸🇮';
    if($code == 'SJ') return '🇸🇯';
    if($code == 'SK') return '🇸🇰';
    if($code == 'SL') return '🇸🇱';
    if($code == 'SM') return '🇸🇲';
    if($code == 'SN') return '🇸🇳';
    if($code == 'SO') return '🇸🇴';
    if($code == 'SR') return '🇸🇷';
    if($code == 'SS') return '🇸🇸';
    if($code == 'ST') return '🇸🇹';
    if($code == 'SV') return '🇸🇻';
    if($code == 'SX') return '🇸🇽';
    if($code == 'SY') return '🇸🇾';
    if($code == 'SZ') return '🇸🇿';
    if($code == 'TC') return '🇹🇨';
    if($code == 'TD') return '🇹🇩';
    if($code == 'TF') return '🇹🇫';
    if($code == 'TG') return '🇹🇬';
    if($code == 'TH') return '🇹🇭';
    if($code == 'TJ') return '🇹🇯';
    if($code == 'TK') return '🇹🇰';
    if($code == 'TL') return '🇹🇱';
    if($code == 'TM') return '🇹🇲';
    if($code == 'TN') return '🇹🇳';
    if($code == 'TO') return '🇹🇴';
    if($code == 'TR') return '🇹🇷';
    if($code == 'TT') return '🇹🇹';
    if($code == 'TV') return '🇹🇻';
    if($code == 'TW') return '🇹🇼';
    if($code == 'TZ') return '🇹🇿';
    if($code == 'UA') return '🇺🇦';
    if($code == 'UG') return '🇺🇬';
    if($code == 'UM') return '🇺🇲';
    if($code == 'US') return '🇺🇸';
    if($code == 'UY') return '🇺🇾';
    if($code == 'UZ') return '🇺🇿';
    if($code == 'VA') return '🇻🇦';
    if($code == 'VC') return '🇻🇨';
    if($code == 'VE') return '🇻🇪';
    if($code == 'VG') return '🇻🇬';
    if($code == 'VI') return '🇻🇮';
    if($code == 'VN') return '🇻🇳';
    if($code == 'VU') return '🇻🇺';
    if($code == 'WF') return '🇼🇫';
    if($code == 'WS') return '🇼🇸';
    if($code == 'XK') return '🇽🇰';
    if($code == 'YE') return '🇾🇪';
    if($code == 'YT') return '🇾🇹';
    if($code == 'ZA') return '🇿🇦';
    if($code == 'ZM') return '🇿🇲';
    return '🏳';
}
function ccn($lista){
    $members = explode("\n", $user);
    if (!in_array($lista, $members)) {
        $add_user = file_get_contents('temp/ccn.txt');
        $add_user .= $lista . "\n";
        file_put_contents('temp/ccn.txt', $add_user);
    }
}
function cvv($lista){
    $user = file_get_contents('temp/cvv.txt');
    $members = explode("\n", $user);
    if (!in_array($lista, $members)) {
        $add_user = file_get_contents('temp/cvv.txt');
        $add_user .= $lista . "\n";
        file_put_contents('temp/cvv.txt', $add_user);
    }
}
function dec($lista){
    $user = file_get_contents('temp/dec.txt');
    $members = explode("\n", $user);
    if (!in_array($lista, $members)) {
        $add_user = file_get_contents('temp/dec.txt');
        $add_user .= $lista . "\n";
        file_put_contents('temp/dec.txt', $add_user);
    }
}
function rest($lista){
    $cc = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
    $mes = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
    $ano = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
    $cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];
    $lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
    $user = file_get_contents('temp/dec.txt');
    $members = explode("\n", $user);
    if (!in_array($lista, $members)) {
        $add_user = file_get_contents('temp/rest.txt');
        $add_user .= $lista . "\n";
        file_put_contents('temp/rest.txt', $add_user);
    }
}
function time1($val){
    $endtime = microtime(true);
    $time = $endtime - $val;
    $time = substr($time, 0, 4);
    return $time;
}
function bannedbin($bin){
	$bugbin = file_get_contents('banned.txt');
    $exploded = explode("\n", $bugbin);
    if (in_array($bin, $exploded)) {
    return true;
     }
     }
function addedgp($bin){
	$bugbin = file_get_contents('addedgp.txt');
    $exploded = explode("\n", $bugbin);
    if (in_array($bin, $exploded)) {
    return true;
     }else{
     return false;
     }
     }
    
function checkrole($chatId,$message_id,$keyboard,$nopre,$gId){
	$link = mysqli_connect("localhost", "root", "", "demo");
    $sql = "SELECT credits FROM persons WHERE userid='$gId'";
    $result = mysqli_query($link, $sql);
    $json_array = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    $final2 = json_encode($json_array);
    $credits = trim(strip_tags(getStr($final2, '"credits":"','"')));
    mysqli_close($link);
    $link = mysqli_connect("localhost", "root", "", "demo");
    $sql = "SELECT role FROM persons WHERE userid='$gId'";
    $result20 = mysqli_query($link, $sql);
    $json_array = [];
    while ($row = mysqli_fetch_assoc($result20)) {
      $json_array[] = $row;
    }
    $final201 = json_encode($json_array);
    $role = trim(strip_tags(getStr($final201, '"role":"','"')));
    mysqli_close($link);
    if($role == 'MEMBER' and $credits < 5){
        $link = mysqli_connect("localhost", "root", "", "demo");
        $sql = "UPDATE persons SET role = 'USER' WHERE persons.userid='$gId'";
        $result = mysqli_query($link, $sql);
        $json_array = [];
        while ($row = mysqli_fetch_assoc($result)) {
        $json_array[] = $row;
        $final = json_encode($json_array);
            $result = "<i>SORRY TO SAY THAT</i>\n <b> YOU HAVE BEEN DEMOTED TO FREE USER BECAUSE YOU DONT HAVE CREDITS NOW \n YOU CAN BUY CREDITS NOW BY HITTING /buy </b>";
        reply_to($chatId,$message_id,$keyboard,$result);
        }elseif(empty($credits)){
        $link = mysqli_connect("localhost", "root", "", "demo");
        $sql = "INSERT INTO persons (userid, role, username, credits) VALUES ('$userId', 'USER', '$username', '01')";
            $result = "<i>User Created Successfully</i>";
        reply_to($chatId,$message_id,$keyboard,$result);
        }
    }
// $premiumgp = (array("-1001320804136","-1001552296979","-1001300027599","-1001298504199","-1001434792768","-1001478277738","-1001350709511","-1001348664765","-1001325488699"));
    // $che = bannedbin($bin);
	// $user = file_get_contents('users.txt');
    //     $members = explode("\n", $user);
    //     if (!in_array($gId, $members)) {
    //         $add_user = file_get_contents('users.txt');
    //         $add_user .= $gId . "\n";
    //         file_put_contents('users.txt', $add_user);
    //     //
    //      }
    $freeuser = urlencode("<b>HEY You dont have permission to use me here 
    <i> take premium access to use here</i></b>");
    $freeuser1 = urlencode("<b>HEY You dont have permission to use me here 
    <i>take group access from <code>@r0ld3x</code> to use here</i></b>");
    $link = mysqli_connect("localhost", "root", "", "demo");
    $sql = "SELECT role FROM persons WHERE userid='$gId'";
    $result20 = mysqli_query($link, $sql);
    $json_array = [];
    while ($row = mysqli_fetch_assoc($result20)){
    $json_array[] = $row;}
    $final201 = json_encode($json_array);
    $role = trim(strip_tags(getStr($final201, '"role":"','"')));
    mysqli_close($link);
    // $noregister = urlencode ("<b>[ALERT] YOU DON'T REGISTERED YOURSELF. PLEASE REGISTER YOURSELF FIRST TO USE ME •• USE /register TO REGISTER ME</b>");
    if($chatId == $gId and $role == 'USER'){
        reply_to($chatId,$message_id,$keyboard,$freeuser);
        exit();
    }elseif(empty($role)){
        $sql = "INSERT INTO persons (userid, role, username, credits) VALUES ('$userId', 'USER', '$username', '01')";
            $result = "<i>User Created Successfully</i>";
        reply_to($chatId,$message_id,$keyboard,$result);
        exit();
    }
}
// flush();
ob_flush();

?>   
