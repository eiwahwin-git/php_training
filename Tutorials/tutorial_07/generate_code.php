<?php

//error_reporting(E_ALL); 
//ini_set('display_errors', '1');

if(isset($_POST['generate_text']))
{
 include('phpqrcode/qrlib.php'); 
 $text=$_POST['qr_text'];
 $folder="images/";
 $file_name="qr.png";
 $file_name=$folder.$file_name;
 QRcode::png($text,$file_name);
 echo"<img src='images/qr.png'>";
 
 //To Display Code Without Storing
// QRcode::png($text);
}
?>