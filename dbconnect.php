<?php

    $server = "localhost";
    $username = "Shuttlersarena";
    $password = "Arena@123";
    $database = "Shuttlersarena";

    $conn = mysqli_connect($server, $username, $password, $database);
    if ($conn){
    //    echo "Success";
    }
    else{
        die("Error".mysqli_connect_error());
    }

?>