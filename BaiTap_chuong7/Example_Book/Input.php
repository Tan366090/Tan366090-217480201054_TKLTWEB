<?php
    include "connect_Database.php";
    echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Database</title>
</head>
<body>
    <form action="Insert_Data.php" method="POST" >
        Mã Sinh viên: <input type="text" name="txt_masv" value=""> <br><br>
        Họ tên: <input type="text" name="txt_hoten" value=""><br><br>
        Ngành học: <input type="text" name="txt_nganhhoc" value=""><br><br>
        Tổng điểm: <input type="text" name="txt_tongdiem" value=""><br><br>


        <input type="submit" value="Thêm">

    </form>
</body>
</html>