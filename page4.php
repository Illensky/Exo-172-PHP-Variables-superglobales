<?php
if (isset($_POST['newUsername'], $_POST['newPassword'])) {
    setcookie('username',filter_var($_POST['newUsername'], FILTER_SANITIZE_STRING), time() +3600);
    setcookie('password',filter_var($_POST['newPassword'], FILTER_SANITIZE_STRING), time() +3600);
?>
<div>
    <p>New Username = <?= $_COOKIE['username'] ?></p>
</div>
<div>
    <p>New Password = <?= $_COOKIE['password'] ?></p>
</div>
<?php
}
?>
<form action="" method="post">
    <label for="newUsername">New Username :</label>
    <input type="text" name="newUsername" id="newUsername">
    <label for="password">New Password :</label>
    <input type="password" name="newPassword" id="password">
    <input type="submit" value="confirm">
</form>
