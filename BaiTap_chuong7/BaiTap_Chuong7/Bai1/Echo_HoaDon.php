<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>in dữ liệu</title>

    <link rel="stylesheet" href="indata_HangHoa.css">
</head>
<body>
    <table>
        <tr>
            <th>Mã hóa đơn</th>
            <th>Mã Khách hàng</th>
            <th>Mã hàng</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>

        <?php
                include "connection.php";

                $sql = "SELECT* FROM hoadon";

                $resul = mysqli_query($conn, $sql);

                if(mysqli_num_rows($resul) > 0){
                    foreach($resul as $row){
                        echo "<tr>";
                        echo "<td> {$row['mahd']} </td>";
                        echo "<td> {$row['makh']} </td>";
                        echo "<td> {$row['mahang']} </td>";
                        echo "<td> {$row['soluong']} </td>";
                        echo "<td> {$row['thanhtien']} </td>";
                        echo "</tr>";
                    }
                    mysqli_free_result($resul);
                }
                mysqli_close($conn);
        ?>
    </table>
</body>
</html>








