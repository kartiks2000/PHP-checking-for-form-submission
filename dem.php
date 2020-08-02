<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Checking for form submission...</h1>
    <?php    
        if(isset($_POST['sub'])){
            echo 'req recieved!!';
        }
        
    ?>

    <form action="dem.php" method="post">
        <input type="text" name="a" >
        <input type="password" name="b" >
        <input type="submit" value="submit" name="sub">
    </form>
</body>
</html>
