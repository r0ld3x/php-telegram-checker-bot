<?php
if(strpos($message, '!bin') === 0 or strpos($message, '/bin') === 0 or strpos($message, '.bin') === 0){
sendaction($chatId, typing);
$flag = 'getFlags';
$bin = substr($message, 5);
$bin = clean($bin);
$bin = substr($bin, 0,6);
if(empty ($bin)){
    reply_to($chatId, $message_id,$keyboard,"[ALERT] <i>GIVE ME VALID BIN</i>");
    exit();
}elseif(strlen($bin < 6)){
    reply_to($chatId, $message_id,$keyboard,"[ALERT] <i>GIVE ME VALID BIN</i>");
        exit();
}
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
// $flag = getFlags($bincap2);
    if(strpos($result, 'No bins found!')) {
    reply_to($chatId,$message_id,$keyboard, "<b>❌BIN BANNED</b>");
    exit();
    }
$binresult = urlencode("<b>══════ 『 ROLDEX 』══════
✅ Valid BIN
Bin: <code>$bin</code>
Brand: $bincap3
Level: $bincap4
Bank: $roldex
Country: $bincap2 {$flag($bincap2)}
Type: $bincap5
Checked By @$username </b>");
    reply_to($chatId, $message_id,$keyboard,$binresult);
        exit();
}
?>