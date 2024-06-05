<?php
    include "connection.php";

    // lấy dữ liệu từ file insert_HangHoa.html về máy
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $makh = isset($_POST['txt_makh']) ? mysqli_real_escape_string($conn, $_POST['txt_makh']) : ''; 

        if(!empty($makh)){
            $sql = "DELETE FROM khachhang WHERE makh = '$makh' ";
            if(mysqli_query($conn, $sql)){
                echo "Xóa khách hàng thành công!";
                exit();
            }
            else{
                echo "Xóa khách hàng không Thành công!...";
                exit();
            }

        }
        else{
            echo "vui lòng nhập đầy đủ thông tin cần xóa...";
        }

    }

    mysqli_close($conn);

?>