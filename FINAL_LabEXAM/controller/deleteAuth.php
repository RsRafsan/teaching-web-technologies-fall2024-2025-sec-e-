<?php
include_once "../model/authmodel.php";

if (isset($_GET['user_name'])) {
    $user_name = $_GET['user_name'];
    $conn = get_connection();

    $sql = "DELETE FROM users WHERE user_name = '$user_name'";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: ../view/authList.php?message=deleted");
    } else {
        mysqli_close($conn);
        header("Location: ../view/authList.php?message=error");
    }
}
?>
