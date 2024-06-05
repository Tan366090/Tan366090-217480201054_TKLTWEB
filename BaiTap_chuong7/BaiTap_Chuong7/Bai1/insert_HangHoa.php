<?php
    include "connection.php";

    // lấy dữ liệu từ file insert_HangHoa.html về máy
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $mahang = isset($_POST['txt_mahang']) ? mysqli_real_escape_string($conn, $_POST['txt_mahang']) : ''; 
        $tenhang = isset($_POST['txt_tenhang']) ? mysqli_real_escape_string($conn, $_POST['txt_tenhang']) : '';
        $mansx = isset($_POST['txt_mansx']) ? mysqli_real_escape_string($conn, $_POST['txt_mansx']) : '';
        $namsx = isset($_POST['txt_namsx']) ? mysqli_real_escape_string($conn, $_POST['txt_namsx']) : '';
        $gia = isset($_POST['txt_gia']) ? mysqli_real_escape_string($conn, $_POST['txt_gia']) : '';

        if(!empty($mahang) && !empty($tenhang) && !empty($mansx) && !empty($namsx) && !empty($gia)){
            $sql = "INSERT INTO hanghoa (mahang, tenhang, mansx, namsx, gia) VALUE ('$mahang', '$tenhang', '$mansx',  '$namsx',  '$gia') ";

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