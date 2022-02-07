<?php
if(strpos($message, "/dic")===0 or strpos($message, "!dic")===0 or strpos($message, ".dic")===0){
sendaction($chatId, typing);

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
if(empty($client)){

 reply_to($chatId,$message_id,$keyboard,$noregister);
 exit();
}
  $dict = substr($message, 5);
  if(empty($dict)){
reply_to($chatId,$message_id,$keyboard,"<b>GIVE ME A CITY NAME %0AEX: <code>!dic gay</code></b>");
exit();
}
  $curl = curl_init();
  curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.dictionaryapi.dev/api/v2/entries/en/$dict",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "accept: */*",
    "accept-encoding: gzip, deflate, br",
    "accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7",
    "origin: https://google-dictionary.vercel.app",
    "referer: https://google-dictionary.vercel.app/",
    "sec-fetch-dest: empty",
    "sec-fetch-mode: cors",
    "sec-fetch-site: cross-site",
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.182 Safari/537.36"
        ],
]);


  $dictionary = curl_exec($curl);
  curl_close($curl);

$out = json_decode($dictionary, true);
$definition0 = $out[0]['meanings'][0]['definitions'][0]["definition"];
$definition1 = $out[0]['meanings'][1]['definitions'][0]["definition"];

$example = $out[0]['meanings'][0]['definitions'][0]["example"];

$Voiceurl = $out[0]["phonetics"][0]["audio"];

$dicresult = urlencode("<b>═════════ 『 ROLDEX 』═════════
•• Word: $dict
•Meanings : 
•1:$definition0
•2:$definition1
•Example : $example
•Pronunciation : $Voiceurl
••Checked By: @$username</b>");
if ($definition0 != null) {
        reply_to($chatId,$message_id,$keyboard,$dicresult);
    }
    else {
        reply_to($chatId,$message_id,$keyboard,"<b>Sorry! %0AWORD MEANING NOT FOUND %0AEX: <code>!dic gay</code></b>");
    }
}



if(strpos($message, "/git")===0 or strpos($message, "!git")===0 or strpos($message, ".git")===0){
sendaction($chatId, typing);
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
if(empty($client)){

 reply_to($chatId,$message_id,$keyboard,$noregister);
 exit();
}
  $git = substr($message, 5);
  if(empty($git)){
reply_to($chatId,$message_id,$keyboard,"<b>GIVE ME A USER NAME %0AEX: <code>!git r0ld3x</code></b>");
exit();
}
   $curl = curl_init();
   curl_setopt_array($curl, [
CURLOPT_URL => "https://api.github.com/users/$git",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 50,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "Accept-Encoding: gzip, deflate, br",
    "Accept-Language: en-GB,en;q=0.9",
    "Host: api.github.com",
    "Sec-Fetch-Dest: document",
    "Sec-Fetch-Mode: navigate",
    "Sec-Fetch-Site: none",
    "Sec-Fetch-User: ?1",
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36"
  ],
]);


$github = curl_exec($curl);
curl_close($curl);
$gresp = json_decode($github, true);

$gusername = $gresp['login'];
$glink = $gresp['html_url'];
$gname = $gresp['name'];
$gcompany = $gresp['company'];
$blog = $gresp['blog'];
$gbio = $gresp['bio'];
$grepo = $gresp['public_repos'];
$gfollowers = $gresp['followers'];
$gfollowings = $gresp['following'];

$gitresult = urlencode ("<b>
Name: $gname
Username: $gusername
Bio: $gbio
Followers: $gfollowers
Following: $gfollowings
Repositories: $grepo
Website: $blog
Company: $gcompany
Github url: $glink
Checked By: @$username</b>");
if ($gusername) {
        reply_to($chatId,$message_id,$keyboard,$gitresult);
}
else {
           reply_to($chatId,$message_id,$keyboard,"<b>Sorry! User Not Found %0AInvalid github username  %0AEX: <code>!git r0ld3x</code></b>");
}
    }
 
if(strpos($message, "/tr")===0 or strpos($message, "!tr")===0 or strpos($message, ".tr")===0){
	exit();
sendaction($chatId, typing);

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
if(empty($client)){
 reply_to($chatId,$message_id,$keyboard,$noregister);
 exit();
}
  $text1 = substr($message, 4);
  $text = multiexplode(array(":", "|", ""), $text1)[0];
$tar = multiexplode(array(":", "|",""), $text1)[1];
  if(empty($text)){
reply_to($chatId,$message_id,$keyboard,"<b>GIVE ME VALID TEXT</b>");
exit();
}
   $curl = curl_init();
   curl_setopt_array($curl, [
CURLOPT_URL => "https://ws.detectlanguage.com/0.2/detect",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_POSTFIELDS => "q=$text",
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => [
"Authorization: Bearer fbd870f6b1bd9c72d7ed45e5967d4234",
"Accept: application/json",
  ],
]);
$lang = curl_exec($curl);
$cap1 = json_decode($lang, 1);
$lang = $cap1["data"]["detections"][0]["language"];
// {"data":{"detections":[{"language":"en","isReliable":true,"confidence":11.94}]}}
curl_close($curl);
if(!empty($tar)){
$target = $tar;
}elseif($lang == 'en'){
$target = 'hi';
}else{
$target = 'en';
}
$apiKey = 'AIzaSyAoHVjZXxw6V9tmIS64blxYDSmvVJ98oJg';
    $url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($text) . '&source='.$lang.'&target='.$target.'';

    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($handle);                 
    $responseDecoded = json_decode($response, true);
    $transtext = $responseDecoded['data']['translations'][0]['translatedText'];
    
    // {  "data": {_    "translations": [     {       "translatedText": "Hi Welt!"      }    ]  }}
    curl_close($handle);
$tresult = urlencode ("<b>
Orignal Text : $text
Orignal Text Lang : $lang
Translated Text : $transtext
Translated Text Lang : $target
Checked By: @$username
Use /tr word|langcode To convert in you lang. </b>");
           reply_to($chatId,$message_id,$keyboard,$tresult);
    }
 

?>