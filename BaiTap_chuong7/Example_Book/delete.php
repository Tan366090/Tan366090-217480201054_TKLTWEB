<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa thông tin sinh viên</title>
</head>
<body>
    <form action="delete.php" method="POST">
        <h1>Nhập thông tin cần update</h1>
        <input type="text" name="txt_masv" placeholder="Nhập mã số sinh viên cần xóa" required>
        <input type="submit" value="Delete">
    </form>

    <?php
    include "connect_Database.php";

    // lấy frm từ trên web...
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $masv = isset($_POST['txt_masv']) ? mysqli_real_escape_string($conn, $_POST['txt_masv']) : '';

        if (!empty($masv)) {
            $sql = "DELETE FROM danhsach WHERE msv = '$masv'";

            if (mysqli_query($conn, $sql)) {
                echo "Xóa thành công.";
            } else {
                echo "Xóa thất bại: " . mysqli_error($conn);
            }
        } else {
            echo "Vui lòng nhập đầy đủ mã số sinh viên";
        }
    }

    mysqli_close($conn);
    ?>
</body>
</html>
