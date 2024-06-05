<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In dữ liệu</title>

    <link rel="stylesheet" href="indata.css">
</head>
<body>
    <table>
        <tr>
            <th>Mã số sinh viên</th>
            <th>Họ và tên sinh viên</th>
            <th>Ngành học</th>
            <th>Tổng điểm</th>
        </tr>

    <?php
    include "connect_Database.php";

    $sql = "SELECT* FROM danhsach ORDER BY tongdiem DESC ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        foreach($result as $rows){
            echo "<tr>";
            echo "<td> {$rows['msv']} </td>";
            echo "<td> {$rows['hoten']} </td>";
            echo "<td> {$rows['nganhhoc']} </td>";
            echo "<td> {$rows['tongdiem']} </td>";
            echo "</tr>";

        }
        mysqli_free_result($result);
    }
    mysqli_close($conn);

?>
    </table>


</body>
</html>




