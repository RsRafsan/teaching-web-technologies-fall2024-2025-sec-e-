<?php
include_once "../model/authmodel.php";
$conn = get_connection();

if (isset($_GET['user_name'])) {
    $user_name = $_GET['user_name'];
    $sql = "SELECT * FROM users WHERE user_name = '$user_name'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "<p>Author not found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid request. User not specified.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Author</title>
    <script>
        function validateUpdate() {
            const userName = document.getElementById('user_name').value.trim();
            const authName = document.getElementById('auth_name').value.trim();
            const contactNo = document.getElementById('contact_no').value.trim();
            const password = document.getElementById('password').value.trim();
            let errorMessage = '';

            if (!userName) {
                errorMessage += 'Author username name is required.\n';
            }


            if (!authName) {
                errorMessage += 'Author name is required.\n';
            }

            if (!contactNo) {
                errorMessage += 'Contact number is required.\n';
            }

            if (!password) {
                errorMessage += 'Password is required.\n';
            }
            if (errorMessage) {
                alert(errorMessage);
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <h1>Update Author</h1>
    <form action="../controller/userController.php" method="POST" onsubmit="return validateUpdate()">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="old_user_name" value="<?php echo htmlspecialchars($row['user_name']); ?>">

        <label for="user_name">Username:</label>
        <input type="text" id="user_name" name="user_name" value="<?php echo htmlspecialchars($row['user_name']); ?>"><br><br>

        <label for="auth_name">Author Name:</label>
        <input type="text" id="auth_name" name="auth_name" value="<?php echo htmlspecialchars($row['auth_name']); ?>"><br><br>

        <label for="contact_no">Contact Number:</label>
        <input type="text" id="contact_no" name="contact_no" value="<?php echo htmlspecialchars($row['contact_no']); ?>"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>"><br><br>

        <button type="submit">Update</button>
    </form>
    <a href="authList.php">Back to Author List</a>
</body>
</html>
