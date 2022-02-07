<?php
if(strpos($message, "/mass")===0 or strpos($message, "!mass")===0 or strpos($message, ".mass")===0){
    $keyboard = [
    'inline_keyboard' => [[['text' => 'Features', 'callback_data' => 'paid'], ['text' => 'Buy', 'callback_data' => 'buy'], ['text' => 'Buy Now', 'url' => 'https://t.me/r0ld3x'],]]];
$keyboard = json_encode($keyboard);
checkrole($chatId,$message_id,$keyboard,$nopre,$gId);
 sendaction($chatId, typing);
$lista = substr($message, 6);
$check = strlen($lista);
$chem = substr($lista, 0,1);
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
}
   
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
$current = time();
$sec = $current - $times;
if($role == 'MEMBER' and $sec < 20)
{
 $after = 20 - $sec;
  $antispam = urlencode ("<b>[ANTISPAM MEMBER] <u> TRY AGAIN AFTER $after sec.</u></b>");
reply_to($chatId,$message_id,$keyboard,$antispam);
 exit();
}elseif(empty($role)){
 reply_to($chatId,$message_id,$keyboard,$noregister);
 exit();
}
if($role == 'USER' and $sec < 150)
{
 $after = 150 - $sec;
  $antispam = urlencode ("<b>[ANTISPAM] <u> TRY AGAIN AFTER $after sec.</u></b>");
reply_to($chatId,$message_id,$keyboard,$antispam);
 exit();
}
    $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=Checking...&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
    sleep(1);
        global $mes_id;
    $aray = gibarray($message);
    if (count($aray) > 15){
    // editMessage($chatId,$mes_id,);
    editMessage($chatId,'Limit Exceeded %0AOnly 15 Card At One Time', $mes_id);
    exit();
    }
    else{
          global $fullmes;
      $fullmes = '';
	  echo '<pre>'; print_r($aray); echo '</pre>';

      foreach ($aray as $cc){
		echo "Checking : $cc <br>";

        $result = chemker($cc);
		echo "Result For $cc : $result<hr>";
      }
    }
            $timest = time();
$link = mysqli_connect("localhost", "root", "", "demo");
$sql = "UPDATE persons SET time = '$timest' WHERE persons.userid='$gId'";
$result21 = mysqli_query($link, $sql);
mysqli_close($link);
}

function chemker($lista){
 sendaction($chatId, typing);

  ///-----------------------CC PARSE -----------------------///
$cc = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];
  ///--------------------SK GENERATE----------------------///
if(strlen($ano) == 2){
  $ano = '20'.$ano;
}

if(strlen($mes) == 1){
  $mes = '0'.$mes;
}
#------------------------------------------Site----------------------------------------------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://namso-gen.net/cc-checker/api.php');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Accept: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'path: /cc-checker/api.php';
$headers[] = 'Accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Accept: */*';
$headers[] = 'Content-type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Origin: https://namso-gen.net';
$headers[] = 'Referer: https://namso-gen.net/cc-checker/';
$headers[] = 'User-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36';
$headers[] = 'X-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'data='.$cc.'%7C'.$mes.'%7C'.$ano.'%7C'.$cvv.'');
$response = curl_exec($ch);
$ccresult = trim(strip_tags(GetStr($response, '"msg":"','|')));
  global $mes_id, $chatId , $fullmes;
  $fullmes = ''.$fullmes.'<code>'.$lista.''.'%0A'.$ccresult.'|@RoldexVerseBot</code>%0A';
  editMessage($chatId,$fullmes,$mes_id);
  echo $fullmes.'<br>';
  return $ccresult;
   ob_flush();

}
?>
