<?php
    $Servername = "Localhost";
    $Username = "root";
    $Pass = "";
    $Database = "sinhvien";

    $conn = mysqli_connect($Servername, $Username, $Pass, $Database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        // echo "Kết nối thành công!,...<br>";
    }


?>