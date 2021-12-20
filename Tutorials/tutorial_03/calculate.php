<?php
$date = new DateTime($_POST['date']);
$now = new DateTime();
if ($date > $now) {
    echo "Choose Again";
}
if($date <$now){
$diff = $now->diff($date);
$age = $diff->y;
echo "Your Age is" . $age . "Years";
}
?>