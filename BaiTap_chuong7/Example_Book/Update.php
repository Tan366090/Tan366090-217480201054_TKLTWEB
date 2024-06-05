<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Thông tin sinh viên</title>
</head>
<body>
    <form action="Update.php" method="POST">
        <h1>Nhập thông tin cần update</h1>
        <input type="text" name="txt_masv" placeholder="Nhập mã số sinh viên" required>
        <input type="text" name="txt_hoten" placeholder="Nhập họ và tên" required>
        <input type="submit" value="Update">
    </form>

    <?php
    include "connect_Database.php";

    // lấy frm từ trên web...
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $masv = isset($_POST['txt_masv']) ? mysqli_real_escape_string($conn, $_POST['txt_masv']) : '';
        $hotensv = isset($_POST['txt_hoten']) ? mysqli_real_escape_string($conn, $_POST['txt_hoten']) : '';

        if (!empty($masv) && !empty($hotensv)) {
            $sql = "UPDATE danhsach SET hoten = '$hotensv' WHERE msv = '$masv'";

            if (mysqli_query($conn, $sql)) {
                echo "Update thành công.";
            } else {
                echo "Update thất bại: " . mysqli_error($conn);
            }
        } else {
            echo "Vui lòng nhập đầy đủ mã số sinh viên và họ tên.";
        }
    }

    mysqli_close($conn);
    ?>
</body>
</html>
