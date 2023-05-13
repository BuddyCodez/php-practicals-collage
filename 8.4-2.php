<form action="8.4-3.php" method="POST">
    <lable>Password:</lable>
    <input type="password" name="pass" required>
    <input type="hidden" name="uname" value="<?php echo $_POST['uname']; ?>">
    <input type="submit" value="Submit">
</form>