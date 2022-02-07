<?php
if(strpos($message, "/http")===0 or strpos($message, "!http")===0 or strpos($message, ".http")===0){
 sendaction($chatId, typing);
            file_put_contents("temp/http@RoldexVerse.txt", file_get_contents("https://api.proxyscrape.com/?request=getproxies&proxytype=http&timeout=5000&country=all&ssl=all&anonymity=all"));
            $last_updated = file_get_contents('https://api.proxyscrape.com?request=lastupdated&proxytype=http');
            $git = file_get_contents("https://raw.githubusercontent.com/clarketm/proxy-list/master/proxy-list-raw.txt");
            $git1 = file_get_contents("https://raw.githubusercontent.com/TheSpeedX/PROXY-List/master/http.txt");
            $git2 = file_get_contents("https://www.proxyscan.io/download?type=http");
            $git3 = file_get_contents("https://www.proxyscan.io/download?type=https");
                        $add_user = file_get_contents('temp/http@RoldexVerse.txt');
            $add_user .= $git . "\n";
            file_put_contents("data/$chat_id/sinalfa.txt");
            file_put_contents('temp/http@RoldexVerse.txt', $add_user);
                        $add_user = file_get_contents('temp/http@RoldexVerse.txt');
            $add_user .= $git1 . "\n";
            file_put_contents("data/$chat_id/sinalfa.txt");
            file_put_contents('temp/http@RoldexVerse.txt', $add_user);
                        $add_user = file_get_contents('temp/http@RoldexVerse.txt');
            $add_user .= $git2 . "\n";
            file_put_contents("data/$chat_id/sinalfa.txt");
            file_put_contents('temp/http@RoldexVerse.txt', $add_user);
            $add_user = file_get_contents('temp/http@RoldexVerse.txt');
            $add_user .= $git3 . "\n";
            file_put_contents("data/$chat_id/sinalfa.txt");
            file_put_contents('temp/http@RoldexVerse.txt', $add_user);
            $file = "temp/http@RoldexVerse.txt";
            $no_of_lines = count(file($file));
            $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.$botToken.'/sendDocument');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      $post = array(
        'chat_id' => $chatId,
        'caption' => "*═ 『 ROLDEX 』═*\n*Proxy type:* `HTTPS`\n*Country:* `All`\n*Timeout:* `5000`\n*Total proxy count:* `$no_of_lines`\n*Last updated:* `$last_updated`\n*Requested by @$username *\n *Bot:* @RoldexVerseBot",
        'parse_mode' => "markdown",
        'reply_to_message_id'=> $message_id,
         'reply_markup' => $keyboard,
        'document' => new CURLFile(realpath('temp/http@RoldexVerse.txt'))
        );
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

      curl_exec($ch);
          }


/////////////////////==========[SOCKS4]==========////////////////

if(strpos($message, "/socks4")===0 or strpos($message, "!socks4")===0 or strpos($message, ".socks4")===0){
 sendaction($chatId, typing);
            file_put_contents("temp/socks4@RoldexVerse.txt", file_get_contents("https://api.proxyscrape.com/?request=getproxies&proxytype=socks4&timeout=5000&country=all"));
            $last_updated = file_get_contents('https://api.proxyscrape.com?request=lastupdated&proxytype=socks4');
                       $git = file_get_contents("https://raw.githubusercontent.com/TheSpeedX/PROXY-List/master/socks4.txt");
                        $add_user = file_get_contents('temp/socks4@RoldexVerse.txt');
            $add_user .= $git . "\n";
            file_put_contents("data/$chat_id/sinalfa.txt");
            file_put_contents('temp/socks4@RoldexVerse.txt', $add_user);
                       $git1 = file_get_contents("https://www.proxyscan.io/download?type=socks4");
                        $add_user = file_get_contents('temp/socks4@RoldexVerse.txt');
            $add_user .= $git1 . "\n";
            file_put_contents("data/$chat_id/sinalfa.txt");
            file_put_contents('temp/socks4@RoldexVerse.txt', $add_user);
                        $file = "temp/socks4@RoldexVerse.txt";
            $no_of_lines = count(file($file));
            $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.$botToken.'/sendDocument');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      $post = array(
        'chat_id' => $chatId,
        'caption' => "*═ 『 ROLDEX 』═*\n*Proxy type:* `SOCKS4`\n*Country:* `All`\n*Timeout:* `5000`\n*Total proxy count:* `$no_of_lines`\n*Last updated:* `$last_updated`\n*Requested by @$username *\n *Bot:* @RoldexVerseBot",
        'parse_mode' => "markdown",
        "reply_to_message_id"=> $message_id,
         'reply_markup' => $keyboard,

        'document' => new CURLFile(realpath('temp/socks4@RoldexVerse.txt'))
        );
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

      curl_exec($ch);
          }

// 
// /////////////////////==========[SOCKS5]==========////////////////

if(strpos($message, "/socks5")===0 or strpos($message, "!socks5")===0 or strpos($message, ".socks5")===0){
    sendaction($chatId, typing);
    file_put_contents("temp/socks5@RoldexVerse.txt", file_get_contents("https://api.proxyscrape.com/?request=getproxies&proxytype=socks5&timeout=5000&country=all"));
    $last_updated = file_get_contents('https://api.proxyscrape.com?request=lastupdated&proxytype=socks5');
    $git = file_get_contents("https://raw.githubusercontent.com/TheSpeedX/PROXY-List/master/socks5.txt");
    $add_user = file_get_contents('temp/socks5@RoldexVerse.txt');
    $add_user .= $git . "\n";
    file_put_contents("data/$chat_id/sinalfa.txt");
    file_put_contents('temp/socks5@RoldexVerse.txt', $add_user);
    $git1 = file_get_contents("https://www.proxyscan.io/download?type=socks5");
    $add_user = file_get_contents('temp/socks5@RoldexVerse.txt');
    $add_user .= $git1 . "\n";
    file_put_contents("data/$chat_id/sinalfa.txt");
    file_put_contents('temp/socks5@RoldexVerse.txt', $add_user);
    $file = "temp/socks5@RoldexVerse.txt";
    $no_of_lines = count(file($file));
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.$botToken.'/sendDocument');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $post = array(
    'chat_id' => $chatId,
    'caption' => "*═ 『 ROLDEX 』═*\n*Proxy type:* `SOCKS5`\n*Country:* `All`\n*Timeout:* `5000`\n*Total proxy count:* `$no_of_lines`\n*Last updated:* `$last_updated`\n*Requested by @$username *\n *Bot:* @RoldexVerseBot",
    'parse_mode' => "markdown",
    "reply_to_message_id"=> $message_id,
    'reply_markup' => $keyboard,
    'document' => new CURLFile(realpath('temp/socks5@RoldexVerse.txt'))
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    
    curl_exec($ch);
}
if(strpos($message, "/ccn")===0 or strpos($message, "!ccn")===0 or strpos($message, ".ccn")===0){
  if ($gId != '1317173146'){
                exit();
        }

    sendaction($chatId, typing);
    $ccn = "temp/ccn.txt";
    $cvv = "temp/cvv.txt";
    $rest = "temp/rest.txt";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.$botToken.'/sendDocument');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $post = array(
    'chat_id' => $chatId,
    'caption' => "*Bot:* @RoldexVerseBot",
    'parse_mode' => "markdown",
    "reply_to_message_id"=> $message_id,
    'document' => new CURLFile(realpath($ccn))
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_exec($ch);
    curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.$botToken.'/sendDocument');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $post = array(
    'chat_id' => $chatId,
    'caption' => "*Bot:* @RoldexVerseBot",
    'parse_mode' => "markdown",
    "reply_to_message_id"=> $message_id,
    'document' => new CURLFile(realpath($cvv))
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_exec($ch);
    curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.$botToken.'/sendDocument');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $post = array(
    'chat_id' => $chatId,
    'caption' => "*Bot:* @RoldexVerseBot",
    'parse_mode' => "markdown",
    "reply_to_message_id"=> $message_id,
    'document' => new CURLFile(realpath($rest))
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_exec($ch);
}
?>