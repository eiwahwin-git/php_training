<!-- <?php
    error_reporting(E_ALL);
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 5</title>
</head>
<body>
  <div id="wrapper">
    <h2>Generate QR</h2>
    <form method="post" action="generate_code.php">
     <input type="text" name="qr_text">
     <input type="submit" name="generate_text" value="Generate">
    </form>
   </div>
</body>
</html>