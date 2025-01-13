<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['user_name']; ?></h1>
    <a href="authList.php">View Authors List</a><br>
    <a href="addAuth.php">Add Authors</a><br>
    
   
    <form action="../controller/userController.php" method="POST">
        <input type="hidden" name="action" value="logout">
        <button type="submit">Logout</button>
    </form>
    <form action="../controller/userController.php" method="POST">
        <input type="hidden" name="action" value="delete">
        <button type="submit">Delete Account</button>
    </form>
</body>
</html>
