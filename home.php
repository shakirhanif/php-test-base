<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is Home</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['name'])) {
        echo "welcome " . $_SESSION['name'];
        echo '<a href="logout.php">Logout</a>';
    }else{
        echo 'get lost yes';
        echo '<a href="/site/cookie.php">go back</a>';
    };
    ?>
</body>
</html>