<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm khách hàng</title>

    <link rel="stylesheet" href="indata_HangHoa.css">
</head>
<body>
<table>
        <tr>
            <th>Mã khách hàng</th>
            <th>Mã hóa đơn</th>
            <th>Tên Khách hàng</th>
            <th>Năm sinh</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        <?php
            include "connection.php";

            // lấy dữ liệu từ file insert_HangHoa.html về máy
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $makh = isset($_POST['txt_makh']) ? mysqli_real_escape_string($conn, $_POST['txt_makh']) : '';

                if(!empty($makh)){
                    $sql = "SELECT kh.makh, hd.mahd, kh.tenkh, kh.namsinh, kh.dienthoai, kh.diachi, hd.soluong, hd.thanhtien
                    FROM tbl_hoadon AS hd 
                    JOIN KhachHang AS kh ON hd.MaKH = kh.MaKH
                    WHERE hd.MaKH = '$makh';";

                    $resul = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($resul) > 0){
                        foreach($resul as $row){
                            echo "<tr>";
                            echo "<td>{$row['makh']}</td>";
                            echo "<td>{$row['mahd']}</td>";
                            echo "<td>{$row['tenkh']}</td>";
                            echo "<td>{$row['namsinh']}</td>";
                            echo "<td>{$row['dienthoai']}</td>";
                            echo "<td>{$row['diachi']}</td>";
                            echo "<td>{$row['soluong']}</td>";
                            echo "<td>{$row['thanhtien']}</td>";
                            echo "</tr>";
                        }
                        mysqli_free_result($resul);
                    } else {
                        echo "<tr><td colspan='9'>Không tìm thấy khách hàng!</td></tr>";
                    }

                } else {
                    echo "<tr><td colspan='9'>Vui lòng nhập đầy đủ thông tin...</td></tr>";
                }

            }

            mysqli_close($conn);
        ?>
</table>
</body>
</html>
