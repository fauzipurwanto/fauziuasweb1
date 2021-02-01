<?php
    // membuat konenksi database
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   ='biodata_db';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo 'Error : '.mysqli_connect_error($conn);
    }


?>