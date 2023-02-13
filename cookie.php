<?php

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<label for="name">Name</label>    
<input type="text" name='name' id="name">
<label for="password">Password</label>
    <input type="password" name='password' id="password">
    <button type="submit" name='submit' value="submit">submit</button>
</form>
<?php
session_start();
if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
    if ($name == 'shakir' && $password == '123') {
        $_SESSION['name'] = $name;
        header('Location: /site/home.php');
    }else{
        echo 'incorrect credentials';
    }
}
?>