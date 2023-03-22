<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>profile</title>
</head>
<body>
    <button onclick="location.href = 'insert.php';">+</button>
    <form method="post">
        <table>
            <tr>
                <td>let</td>
                <td>terminál</td>
                <td>gate</td>
                <td>letadlo</td>
            </tr>
            <?php
                require('dbh.php');
                require('getSql.php');
                require('delete.php');

                $sql = new Dotaz('select', 'let', '*');
                $result = $db->query($sql->getRequest());
                $i = 0;

                while ($row = mysqli_fetch_assoc($result)){
                    $i++;
                    echo "<tr id='$i'>";           
                    echo "<td>".$row['id']."<button type='submit' value='".'id='.$row['id']."' name='edit' id='$i.edit'>E</button><button onclick='".delete($row['id'], $db)."' value='".'id='.$row['id']."' name='del'>D</button>";
                    echo "<td>".$row['terminal']."<button type='submit' value='".'ter='.$row['terminal']."' name='edit' id='$i.edit'>E</button></td><br>";
                    echo "<td>".$row['gate']."<button type='submit' value='".'gate='.$row['gate']."' name='edit' id='$i.edit'>E</button></td>";
                    echo "<td>".$row['letadlo']."<button type='submit' value='".'plane='.$row['letadlo']."' name='edit' id='$i.edit'>E</button></td>";
                    echo "</tr>";
                }


        
                if(isset($_POST['edit'])){
                    $info = explode('=', $_POST['edit']);
                    $column = $info[0];
                    $data = $info[1];
                    if(isset($_POST['apply'])){
                        $dotaz = new Dotaz('update', 'let', $column, $_POST['new_value'], );
                        var_dump($dotaz->getRequest());
                        $db->query($dotaz->getRequest());
                    }
                }

                function delete($id, $database){
                    $delete = new Dotaz('delete', 'let', '', '', 'id='.$id);
                    $database->query($delete->getRequest());
                }
            ?>
        </table>
    </form>
    
</body>
</html>