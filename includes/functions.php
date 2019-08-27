<?php 
    function verify_function($result_set)
    {
        global $conn ;
        if(!$result_set)
        {
            die("database query failed".mysqli_error());
        }
    }
?>