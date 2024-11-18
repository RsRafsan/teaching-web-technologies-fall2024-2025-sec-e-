<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["gender"])) {
        $gender =($_POST["gender"]);
        echo "Selected gender: $gender";
    } else {
        echo "At least one gender must be selected.";
    }
} else {
    echo "Form not submitted.";
}
?>

