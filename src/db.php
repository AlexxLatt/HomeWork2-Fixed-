<?php

    $servername = "localhost:3306";
    $username = "root";
    $password ="root";
    $dbname = "site-bd";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("Connection Fialed");
    }else{
      
    }
?>