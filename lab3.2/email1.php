<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $email = trim($email); 
    
    if (empty($email)) {
        echo "Cannot be empty";
    } elseif (!isValidEmail($email)) {
        echo "Invalid email address format.";
    } else {
        echo "Email: $email";
    }
}


function isValidEmail($email) {
    $atPosition = -1;
    $dotPosition = -1;
    $atCount = 0;

  
    for ($i = 0; $i < strlen($email); $i++) {
        $char = $email[$i];

    
        if ($char === '@') {
            $atCount++;
            $atPosition = $i;
        }
     
        elseif ($char === '.') {
            $dotPosition = $i;
        }
    }

   
    if (
        $atCount === 1 &&
        $atPosition > 0 &&
        $dotPosition > $atPosition + 1 &&
        $dotPosition < strlen($email) - 1
    ) {
        return true;
    }
    
    return false;
}
?>
