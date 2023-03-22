<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editpage.css">
    <title>edit</title>
</head>
<body>
    <form method="post">
        <input type="text" name="new_value">
        <input type="submit" name="submit">
    </form>

    <?php
        require('dbh.php');
        require('getSql.php');

        $info = explode('=', $_POST['edit']);
        $column = $info[0];
        $data = $info[1];

        if(isset($_POST['submit'])){
            $dotaz = new Dotaz('update', 'let', 'column', $_POST['new_value'], );
            var_dump($dotaz->getRequest());
            //$db->query($dotaz->getRequest());
        }

    ?>
</body>
</html>