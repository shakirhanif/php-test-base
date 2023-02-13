<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>this is index</title>

</head>
<body>

    
    <?php





    $name = 'this is name';
    $myInt = 5;
    echo "$name is $myInt";
    define('myName', 'is khan');
    echo myName;
    $myArray = [
        'first'=>'apple',
        'second'=>'orangeman'
    ];
    $jsonArray =  json_encode($myArray);
    $jsonDecode =  json_decode($jsonArray);

    
    








    ?>



<script src="script.js"></script>
</body>
</html>