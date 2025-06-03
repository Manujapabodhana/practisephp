<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "kkk"; ?></title>
</head>
<body>
    <form method="Get">
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>    <?php
    $username = $_GET['username'];
    echo $username;

    ?>



</body>
</html>


