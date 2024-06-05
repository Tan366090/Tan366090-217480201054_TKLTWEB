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

// hàm kiểm tra checkradio

function checkradio() {
    var chk_radio = document.getElementsByName("radio");
    var Diem_radio = 0;
    for (var i = 0; i < chk_radio.length; i++) {
        if (chk_radio[i].cheked) {
            Diem_radio++;
        }
    }
    if (Diem_radio !== 1) {
        alert("Vui lòng checkradio_Button");
        return false;
    }
    return true;
}

function XoaDuLieu() {
    document.getElementById("txt_So01").value = " ";
    document.getElementById("txt_So02").value = " ";
    document.getElementById("txt_KetQua").value = " ";
}
function TINH() {
    KiemTra();

    var radio_PhepCong = document.getElementById("rdo_PhepCong").checked;
    var radio_PhepTru = document.getElementById("rdo_PhepTru").checked;
    var radio_PhepNhan = document.getElementById("rdo_PhepNhan").checked;
    var radio_PhepChia = document.getElementById("rdo_PhepChia").checked;

    if (radio_PhepCong) {
        document.getElementById("txt_KetQua").value = A + B;
    } else if (radio_PhepChia) {
        if (B != 0) {
            document.getElementById("txt_KetQua").value = A / B;
        } else {
            alert("Số nguyên b phải lớn hơn 0");
            XoaDuLieu();
            return;
        }
    } else if (radio_PhepNhan) {
        document.getElementById("txt_KetQua").value = A * B;
    } else if (radio_PhepTru) {
        document.getElementById("txt_KetQua").value = A - B;
    }
}
