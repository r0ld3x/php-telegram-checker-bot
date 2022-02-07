<?php

if(strpos($message, "/rand")===0 or strpos($message, "!rand")===0 or strpos($message, ".rand")===0){
sendaction($chatId, typing);
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=US');
$get = strtoupper($get);
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$first = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
// $email1 = $matches1;
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
$state1 = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"cell\":\"(.*)\")siU", $get, $matches1);
$cell = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$zip = $matches1[1][0];
preg_match_all("(\"username\":\"(.*)\")siU", $get, $matches1);
$usrnme = $matches1[1][0];
preg_match_all("(\"password\":\"(.*)\")siU", $get, $matches1);
$pass = $matches1[1][0];
preg_match_all("(\"gender\":\"(.*)\")siU", $get, $matches1);
$gender = $matches1[1][0];
preg_match_all("(\"value\":\"(.*)\")siU", $get, $matches1);
$ssn = $matches1[1][0];
preg_match_all("(\"age\":\"(.*)\")siU", $get, $matches1);
$age = $matches1[1][0];
preg_match_all("(\"date\":\"(.*)\")siU", $get, $matches1);
$dob = $matches1[1][0];
preg_match_all("(\"salt\":\"(.*)\")siU", $get, $matches1);
$salt = $matches1[1][0];
$pwd = $pass;
preg_match_all("(\"nat\":\"(.*)\")siU", $get, $matches1);
$con = $matches1[1][0];
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$numero1 = substr($cell, 1,3);
$numero2 = substr($cell, 6,3);
$numero3 = substr($cell, 10,4);
$cell = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","hotmail.com","yahoo.com","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email = str_replace("EXAMPLE.COM", $serv_rnd, $email);
$email = strtoupper($email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else if($state=="Kentucky"){ $state="KY";
}else{$state="";}
if(empty($ssn)){
$ssn="null";
}
$respo = urlencode("<b>
•• ADDRESS GENERATOR
• FIRST NAME: <code>$first</code>
• LAST NAME: <code>$last</code>
• ADDRESS: <code>$street</code>
• CITY: <code>$city</code>
• STATE: <code>$state1</code>-<code>$state</code>
• ZIP: <code>$zip</code>
• COUNTRY: <code>$con</code>
• SSN: <code>$ssn</code>
• DOB: <code>$dob</code>
• GENDER: <code>$gender</code>
----------------------------------------
EMAIL: <code>$email</code>
PHONE: <code>$phone</code>
CELL: <code>$cell</code>
USERNAME: <code>$usrnme</code>
PASSWORD: <code>$salt$pwd</code></b>");
reply_to($chatId,$message_id,$keyboard,$respo);
}
?>