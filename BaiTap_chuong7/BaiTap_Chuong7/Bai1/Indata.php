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
            <th>Mã hàng</th>
            <th>Tên Hàng</th>
            <th>Mã nhà sản xuất</th>
            <th>Năm sản xuất</th>
            <th>Giá</th>
        </tr>

        <?php
                include "connection.php";

                $sql = "SELECT* FROM hanghoa";

                $resul = mysqli_query($conn, $sql);

                if(mysqli_num_rows($resul) > 0){
                    foreach($resul as $row){
                        echo "<tr>";
                        echo "<td> {$row['mahang']} </td>";
                        echo "<td> {$row['tenhang']} </td>";
                        echo "<td> {$row['mansx']} </td>";
                        echo "<td> {$row['namsx']} </td>";
                        echo "<td> {$row['gia']} </td>";
                        echo "</tr>";
                    }
                    mysqli_free_result($resul);
                }
                mysqli_close($conn);
        ?>
    </table>
</body>
</html>








