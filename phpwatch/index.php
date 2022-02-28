<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hodiny</title>
</head>
<body style="font-family: monospace; color:darkcyan; background: black;" >
    <h1>Datum a čas</h1>
    <?php
        date_default_timezone_set('CET');
        echo date("Y.m.d  H:i:s");
        $hour = date("H");
        $min = date("i");
        $sec = date("s");

        echo "<ul>";
        echo "<li>H:&nbsp";
            for ($i = 0; $i < $hour; $i++) {
                echo "| ";
            }
        echo "</li>";
        echo "<li>M:&nbsp";
            for ($i = 0; $i < $min; $i++) {
                echo "| ";
            }
        echo "</li>";
        echo "<li>S:&nbsp";
            for ($i = 0; $i < $sec; $i++) {
                echo "| ";
            }
        echo "</li>";
        echo "</ul>";
       

    ?>
</body>
</html>