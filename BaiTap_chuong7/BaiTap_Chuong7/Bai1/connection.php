<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "quanlybanhang";

    $conn = mysqli_connect($servername, $username, $pass, $database);
    
    if(!$conn){
        die ("Kết nối thất bại" . mysqli_connect_error());
    }
    else{
        // echo "Kết nối thành công!";
        echo "<br>";
    }

?>

