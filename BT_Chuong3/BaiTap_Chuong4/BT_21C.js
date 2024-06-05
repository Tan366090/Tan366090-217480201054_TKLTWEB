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

//bắt sự kiện bằng onchange

// hàm phép cộng
function PHEPCONG() {
    KiemTra();
    document.getElementById("txt_KetQua").value = A + B;
}

// Hàm phép trừ
function PHEPTRU() {
    KiemTra();
    document.getElementById("txt_KetQua").value = A - B;
}

// hàm phép nhân
function PHEPNHAN() {
    KiemTra();
    document.getElementById("txt_KetQua").value = A * B;
}

// Hàm phép chia
function PHEPCHIA() {
    KiemTra();
    if (B != 0) {
        document.getElementById("txt_KetQua").value = A / B;
    } else {
        alert("Vui lòng nhập số nguyên B phải lớn hơn 0 và khác 0...");
    }
}

function XoaDuLieu() {
    document.getElementById("txt_So01").value = " ";
    document.getElementById("txt_So02").value = " ";
    document.getElementById("txt_KetQua").value = " ";
}
function TINH() {
    var SC = document.getElementById("lua_chon").value;

    if (SC == "CONG") {
        PHEPCONG();
    } else if (SC == "TRU") {
        PHEPTRU();
    } else if (SC == "NHAN") {
        PHEPNHAN();
    } else if (SC == "CHIA") {
        PHEPCHIA();
    } else {
        alert("Vui lòng slect phép tính...");
        return;
    }
}
