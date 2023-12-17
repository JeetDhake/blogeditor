<?php
    $con = mysqli_connect("localhost", "root", "", "blogeditor");
    if(!$con){
        echo "connection error" . mysqli_connect_error();
    }
?>