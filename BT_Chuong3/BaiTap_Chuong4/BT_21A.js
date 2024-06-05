document.write("<h1><span>Truy tìm kết quả...</span></h1><br><hr>");

//lấy giá trị (Value từ ô txt_So01 và txt_So02)
var A, B;

// hàm kiểm  tra giá trị đầu vào
function KiemTra() {
    A = parseInt(document.getElementById("txt_So01").value);
    B = parseInt(document.getElementById("txt_So02").value);

    if (isNaN(A) || isNaN(B)) {
        alert("vui lòng nhập là số....");
        document.getElementById("txt_So01").value = " ";
        document.getElementById("txt_So02").value = " ";
        document.getElementById("txt_KetQua").value = " ";
        return;
    }
}

function PhepCong() {
    KiemTra();
    document.getElementById("txt_KetQua").value = A + B;
}

function PhepNhan() {
    KiemTra();
    document.getElementById("txt_KetQua").value = A * B;
}

function PhepTru() {
    KiemTra();
    document.getElementById("txt_KetQua").value = A - B;
}

function PhepChia() {
    KiemTra();
    if (B == 0) {
        alert("Sô nguyên B phải lớn hơn 0");
        document.getElementById("txt_So01").value = " ";
        document.getElementById("txt_So02").value = " ";
        document.getElementById("txt_KetQua").value = " ";
        return;
    } else {
        document.getElementById("txt_KetQua").value = A / B;
    }
}
