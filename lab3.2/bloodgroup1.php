<?php
    if (isset($_POST['submit'])) {
        $bloodGroup = $_POST['bloodgroup'];
        if (empty($bloodGroup)) {
            echo "Please select a blood group";
        } else {
            echo "Selected blood group: $bloodGroup";
        }
    }
    ?>