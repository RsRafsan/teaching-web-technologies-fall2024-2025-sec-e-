<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['degree']) && is_array($_POST['degree']) && count($_POST['degree']) >= 2) {
        echo "Selected degrees: " . implode(", ", $_POST['degree']);
    } else {
        echo "Please select at least two degrees.";
    }
}
?>
