<?php
if(strpos($message, '!gen') === 0 or strpos($message, '/gen') === 0 or strpos($message, '.gen') === 0){
sendaction($chatId, typing);
$sss = reply_to($chatId,$message_id,$keyboard,"<b>Generating</b>");
   $respon = json_decode($sss, TRUE);
            $message_id_1 = $respon['result']['message_id'];
	$lista = substr($message, 5);
	$lista = clean($lista);
$cc = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
$mon = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
$year = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];
$amou = multiexplode(array(":", "/", " ", "|", ""), $lista)[4];
	$cards = [];
	$cc1 = substr($cc, 0, 1);
	$cvvlength = strlen($cvv);
	if(empty($lista)){
	$response = urlencode("<b>VALID INPUT PLEASE \n Ex: <code>!gen 407544|x|25|xx</code></b>");
	  edit_message($chatId,$message_id_1,$keyboard,$response);
	exit();
	}
	// if(strlen($cc) >12){
	 // $valid = "";
	  // $response = urlencode("<b>MAXIMUM BIN LENGTH ALLOWED IS 12\n I AM REMOVE LAST 4 DIGIT AND RANDOMISING IT.</b>");
	  // edit_message($chatId,$message_id_1,$keyboard,$response);
	  // $cc = strlen($cc,0,12);
	// }
	if($mon > 12){
	   $valid = '';
	   $response = urlencode("<b>INVALID MONTH</b>");
	  edit_message($chatId,$message_id_1,$keyboard,$response);
	exit();
	}
	if($year > 2029) {
	   $valid = '';
	   $response = urlencode("<b>MAXIMUM YEAR SUPPORTED IS 29</b>");
	  edit_message($chatId,$message_id_1,$keyboard,$response);
	exit();
	}
	// sendMessage($chatId,$keyboard,$noregister);
	if(empty($amou)){
	$amou = '10';
	}
$quantity = $amou;
	for($i = 0; $i < $quantity; $i ++){
			$bin = substr($cc, 0, 12);
			
			$digits = 16 - strlen($bin);
			$ccrem = substr(str_shuffle("0123456789"), 0, $digits);
			if($mon == 'xx' or $mon == 'x'){
				$monthdigit = rand(1,12);
			  }
			  else if (empty($mon)){
			  $monthdigit = rand(1,12);
			  }
			  else{
				$monthdigit = $mon;
			  }
			  
			if (strlen($monthdigit) == 1){
				$monthdigit = "0".$monthdigit;
			}

			  if($year == 'xxxx' or $year == 'xxx' or $year == 'xx' or $year == 'x'){
			  $yeardigit = rand(2021,2029);
			  }
			  else if (empty($year)){
			  $yeardigit = rand(2021,2029);
			  }
			  else{
			  $yeardigit = $year;
			  }
			  
			  if($cvv == 'x' or $cvv == '' or $cvv == 'xx' or $cvv == 'xxx'){
				  if($cc1 == 3){
					 $cvvdigit =rand(1000,9999);
			  }
		  else if (empty($cvv)){
					   $cvvdigit = rand(100,999);
			  }
			  }
			  else {
				$cvvdigit = $cvv;
			  }
			$ccgen = $bin.$ccrem;
			
			$cards[]= ''.$ccgen.'|'.$monthdigit.'|'.$yeardigit.'|'.$cvvdigit.'';
			$cards[]= "\n";
		}
		$card = implode ($cards);
		if(empty($mon)){
		$mon = 'x';
		}
		if(empty($year)){
		$year = 'x';
		}
		if(empty($cvv)){
		$cvv = 'x';
		}
$respo = 	urlencode("<b>••• CC GENERATOR
•Format Used: $bin|$mon|$year|$cvv

<code>$card</code>

••• Gen By: @$username
••• Bot By: <code>@r0ld3x</code></b>");
		edit_message($chatId,$message_id_1,$keyboard,$respo);
}

?>