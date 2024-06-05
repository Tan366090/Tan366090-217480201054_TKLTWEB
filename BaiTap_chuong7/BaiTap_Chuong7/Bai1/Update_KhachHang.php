<?php
    include "connection.php";

    // lấy dữ liệu từ file insert_HangHoa.html về máy
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $makh = isset($_POST['txt_makh']) ? mysqli_real_escape_string($conn, $_POST['txt_makh']) : ''; 
        $tenkh = isset($_POST['txt_tenkh']) ? mysqli_real_escape_string($conn, $_POST['txt_tenkh']) : '';
        $namsinh = isset($_POST['txt_namsinh']) ? mysqli_real_escape_string($conn, $_POST['txt_namsinh']) : '';
        $dienthoai = isset($_POST['txt_dienthoai']) ? mysqli_real_escape_string($conn, $_POST['txt_dienthoai']) : '';
        $diachi = isset($_POST['txt_diachi']) ? mysqli_real_escape_string($conn, $_POST['txt_diachi']) : '';

        if(!empty($makh) && !empty($tenkh) && !empty($namsinh) && !empty($dienthoai) && !empty($diachi)){
            $sql = "UPDATE khachhang SET makh = '$makh', tenkh = '$tenkh', namsinh = '$namsinh', dienthoai = '$dienthoai', diachi = '$diachi' WHERE makh = '$makh' ";

            if(mysqli_query($conn, $sql)){
                echo "Update Khách hàng thành công!";
                exit();
            }
            else{
                echo "Thêm Khách hàng không Thành công!...";
                exit();
            }

        }
        else{
            echo "vui lòng nhập đầy đủ thông tin khách hàng...";
        }

    }

    mysqli_close($conn);

?>