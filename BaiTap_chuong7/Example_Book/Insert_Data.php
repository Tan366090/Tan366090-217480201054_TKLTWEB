<?php
    include "connect_Database.php";

    // Khai báo giá trị đầu khi chưa nhấp nút Submit

    $masv = "";
    $tensv = "";
    $nganhhoc = "";
    $tongdiem = "";

    // lấy giá trị đầu từ form Input.php (1)


    // lấy txt_masv vừa nhập từ form (1)
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["txt_masv"])){
            $masv = $_POST["txt_masv"];
        }


        // lấy txt_hoten từ (1)
        if(isset($_POST["txt_hoten"])){
            $tensv = $_POST["txt_hoten"];
        }

        // lất txt_nganhhoc từ (1)
        if(isset($_POST["txt_nganhhoc"])){
            $nganhhoc = $_POST["txt_nganhhoc"];
        }

         // lấy txt_tongdiem
         if(isset($_POST["txt_tongdiem"])){
            $tongdiem = $_POST["txt_tongdiem"];
        }
    }

    // thêm dữ liệu vừa lấy được vào SQL

    $sql = "INSERT INTO danhsach(msv, hoten, nganhhoc, tongdiem)
    VALUE('$masv', '$tensv', '$nganhhoc', ' $tongdiem')";

    if(mysqli_query($conn, $sql)){
        echo "thêm dữ liệu thành công";
        exit();
    }

    else{
        echo "Thêm dữ liệu thất bại". "<br>" .mysqli_error($conn);
    }












?>