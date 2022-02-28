<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hodiny</title>
</head>
<body style="font-family: monospace; font-size: 1em; color:darkcyan; background: black;" >
    <h1>Datum a čas</h1>
    <?php
        date_default_timezone_set('CET');
        trDay();
        echo date(" d.");
        trMonth();
        echo date(" Y H:i:s");
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

        function trDay(){
            $weekEn = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            $weekCs = ['pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota', 'neděle'];
            $den = date("l");

            for ($i = 0; $i < 7; $i++){
                    if ($den == $weekEn[$i]){
                    $den = $weekCs[$i];
                }
            }
            echo $den;
        }

        function trMonth(){
            $monthEn = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            $monthCs = ['ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosince'];
            $month = date("F");

            for ($i = 0; $i < 12; $i++){
                    if ($month == $monthEn[$i]){
                    $month = $monthCs[$i];
                }
            }
            echo $month;
        }

        $page = $_SERVER['PHP_SELF'];
        header("Refresh: 1; url=$page");
    ?>
</body>
</html>