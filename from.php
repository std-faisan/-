<?php
//    error_reporting(0);
    echo $_POST['user'];
    echo $_POST['pass'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchaes($_SERVER['PHP_SELF']);?>" method="post">
        <label for="">Name:</label>
        <input type="text" name="user"> <br><br>

        <label for="">Password</label>
        <input type="Password" name="pass"><br><br>

        <input type="submit" value="OK">
    </form>
 
    
</body>
</html>