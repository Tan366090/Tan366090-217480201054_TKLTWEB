<?php
    include "connection.php";

    // lấy dữ liệu từ file insert_HangHoa.html về máy
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $mahd = isset($_POST['txt_mahd']) ? mysqli_real_escape_string($conn, $_POST['txt_mahd']) : ''; 
        $makh = isset($_POST['txt_makh']) ? mysqli_real_escape_string($conn, $_POST['txt_makh']) : '';
        $mahang = isset($_POST['txt_mahang']) ? mysqli_real_escape_string($conn, $_POST['txt_mahang']) : '';
        $soluong = isset($_POST['txt_soluong']) ? mysqli_real_escape_string($conn, $_POST['txt_soluong']) : '';
        $thanhtien = isset($_POST['txt_thanhtien']) ? mysqli_real_escape_string($conn, $_POST['txt_thanhtien']) : '';

        if(!empty($mahd) && !empty($makh) && !empty($mahang) && !empty($soluong) && !empty($thanhtien)){
            $sql = "INSERT INTO hoadon (mahd, makh, mahang, soluong, thanhtien) VALUE ('$mahd', '$makh', '$mahang',  '$soluong',  '$thanhtien') ";

            if(mysqli_query($conn, $sql)){
                echo "Thêm thành công!";
                exit();
            }
            else{
                echo "Thêm không Thành công!...";
                exit();
            }

        }
        else{
            echo "vui lòng nhập đầy đủ thông tin...";
        }

    }

    mysqli_close($conn);

?>