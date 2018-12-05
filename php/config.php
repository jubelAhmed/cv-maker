<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "resume-information";

    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$con){
        echo "error happpend";
    }
?>