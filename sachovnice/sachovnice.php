<!DOCTYtextE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta htttext-equiv="X-UA-Comtextatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chess</title>
    <style>
        body{
            background-color: darkslategrey;
        }
        table{
            position: relative;
            left: calc(50% - 200px);
            top: calc(50% - 200px);
        }
        td{
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>
    <table cellspacing="0px">
        <?php
                for ($i = 0; $i < 8; $i++){
                    echo "<tr>";
                    for ($x = 0; $x < 4; $x++){
                        if ($i % 2 == 0){
                            echo "<td bgcolor=black></td>";
                            echo "<td bgcolor=white></td>";
                            }
                        else{ 
                            echo "<td bgcolor=white></td>";
                            echo "<td bgcolor=black></td>";
                            }
                        }
                        echo "</tr>";
                    }
                ?>
            
    </table>
        
    
    
</body>
</html>
