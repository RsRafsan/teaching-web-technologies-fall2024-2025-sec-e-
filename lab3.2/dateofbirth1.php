<?php
if (isset($_POST["submit"])) {
    $dob = $_POST["dob"]; 
    if (empty($dob)) {
        echo "Date of Birth cannot be empty.";
    } else {
        
        $p = explode('-', $dob);
        if (count($parts) === 3) {
            $year =$p[0];
            $month =$p[1];
            $day = $p[2];
            
          
            if (!checkdate($month, $day, $year)) {
                echo "Invalid date format.";
            } elseif ($year < 1953 || $year > 1998) {
                echo "Year must be between 1953 and 1998.";
            } else {
                echo "Your Date of Birth is: $day/$month/$year";
            }
        } else {
            echo "Invalid date format.";
        }
    }
}
?>
