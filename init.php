<?php

require_once 'students.php';
require_once 'index.php';
require_once 'db_grades.php';


function redirect($location){
    
    header("Location: {$location}");
}


?>