<?php
require_once 'phpqrcode/qrlib.php';
$path="img/";
$file=$path.uniqid().".png";
$text="Something";
QRcode::png($text,$file,'L',10,2);
//png($text,$file,ECClevel,PiXelsize,Frame_Size);
echo"<img src='".$file."'>";
?>