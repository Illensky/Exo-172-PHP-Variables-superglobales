<?php
session_start();

echo $_SESSION['name']."<br>";
echo $_SESSION['firstName']."<br>";
echo $_SESSION['age']."<br>";

if (isset($_POST['username'], $_POST['password'])) {
    setcookie('username',filter_var($_POST['username'], FILTER_SANITIZE_STRING), time() +3600);
    setcookie('password',filter_var($_POST['password'], FILTER_SANITIZE_STRING), time() +3600);
    header('location: /page3.php');
}

?>

<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="submit">
</form>

