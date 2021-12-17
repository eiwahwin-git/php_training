<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 5</title>
</head>

<body>
    <div>
        <h2>Contents of text file</h2>
        <?php
        $file = file_get_contents('sample.txt', true);
        echo $file;
        ?>
    </div>
    <div>
        <h2>Contents of csv file</h2>
        <?php
        echo "<table border='1'>";
        $f = fopen("sample.csv", "r");
        while (($line = fgetcsv($f)) !== false) {
            echo "<tr>";
            foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "<tr>";
        }
        fclose($f);
        echo "</table>";

        ?>
    </div><br>
    <div>
        <h2>Contents of excel file</h2>
        <?php
        include("library/SimpleXLSX.php");
        if ($xlsx = SimpleXLSX::parse('simple.xlsx')) {
            echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';
            foreach ($xlsx->rows() as $r) {
                echo '<tr><td>' . implode('</td><td>', $r) . '</td></tr>';
            }
            echo '</table>';
        } else {
            echo SimpleXLSX::parseError();
        }
        ?>
    </div>

    <div>
        <h2>Contents of doc file</h2>
        <?php
        function readWord($filename)
        {
            if (file_exists($filename)) {
                if (($fh = fopen($filename, 'r')) !== false) {
                    $headers = fread($fh, 0xA00);
                    $n1 = (ord($headers[0x21C]) - 1);
                    $n2 = ((ord($headers[0x21D]) - 8) * 256);
                    $n3 = ((ord($headers[0x21E]) * 256) * 256);
                    $n4 = (((ord($headers[0x21F]) * 256) * 256) * 256);
                    $textLength = ($n1 + $n2 + $n3 + $n4);

                    $extracted_plaintext = fread($fh, $textLength);
                    return $extracted_plaintext;
                }
            }
        }
        $filename = "sample.doc";
        echo readWord($filename);
        ?>

    </div>



</body>

</html>