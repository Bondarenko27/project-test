<?php
if(isset($_POST['output_squares'])){
    echo file_get_contents('http://'.SanitizeString($_POST['output_squares']));
} 
 function SanitizeString($var)
 {
     $var= strip_tags($var);
     $var= htmlentities($var);
     return stripslashes($var);
 }
    
?>