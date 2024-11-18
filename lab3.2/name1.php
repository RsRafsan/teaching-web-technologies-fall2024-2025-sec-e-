<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $name = trim($name); 
    $isValid = true;      
    $error = "";          
   
    if ($name === "") {
        $error = "Name cannot be empty";
        $isValid = false;
    } 

    elseif (countWords($name) < 2) {
        $error = "Name must contain at least two words";
        $isValid = false;
    } 

    elseif (!isLetter($name[0]) || !hasValidCharacters($name)) {
        $error = "Invalid format";
        $isValid = false;
    }
    
  
    if ($isValid) {
        echo "Name: $name";
    } else {
        echo $error;
    }
}


function isLetter($char) {
    return ($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z');
}


function countWords($str) {
    $wordCount = 0;
    $inWord = false;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] !== ' ') {
            if (!$inWord) {
                $wordCount++;
                $inWord = true;
            }
        } else {
            $inWord = false;
        }
    }
    return $wordCount;
}

function hasValidCharacters($str) {
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (!isLetter($char) && $char !== ' ' && $char !== '.' && $char !== '-') {
            return false;
        }
    }
    return true;
}
?>
