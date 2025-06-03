<?php

class SinhVien
{
    // Khai báo các thuộc tính và phương thức của lớp SinhVien

    // Cách khai báo thuộc tính (Khai báo biến tron Class)
    // public(công khai) là phạm vi được phép truy cập, ở đâu cũng có thể truy cập được

    public $hoTen;      // Thuộc tính tên của sinh viên
    public $namSinh;    // Thuộc tính năm sinh của sinh viên
    public $maSinhVien; // Thuộc tính mã sinh viên

    //  Cách khai báo phương thức (Khai báo hàm trong class)
    public function hienThi() {
        // echo "Họ tên: $hoTen";   // $hoTen là 1 biến bình thường...
        echo "Họ tên: $this->hoTen" . '<br/>';//  $this-> Gọi đến thuộc tính trong class
        echo "Năm sinh: $this->namSinh" . '<br/>';
        echo "Mã sinh viên: $this->maSinhVien" .'<br/>';
    }
}
//  Class là 1 Khuôn mẫu (BluePrint) để tạo ra nhiều Đối tượng (Object)
//  Các Object tạo ra sẽ có CHUNG thuộc tính và phương thức

//  Object là các đối tượng được tạo ra từ Class
$sinhVien1 = new SinhVien();//  Khởi tạo 1 Đối tượng, $sinhVien1 là tên đối tượng, có các thược tính, phương thức ...
//  Một Class có thể tạo ra nhiều đối tượng nhưng
//  một đối tượng chỉ thuộc về 1 Class

//  Gán giá trị cho các thuộc tính
//  Cách 1:
$sinhVien1->hoTen = 'Nguyễn Văn A';
$sinhVien1->namSinh = 2005;
$sinhVien1->maSinhVien = "PH12345";

$sinhVien1->hienThi();//    Sử dụng phương thức (hành động) của đối tượng
echo '<br/>';
//  BT: Khởi tạo thêm 3 đối tượng khác nhau từ class SinhVien
$sinhVien2 = new SinhVien();
$sinhVien2->hoTen = 'Nguyễn Văn B';
$sinhVien2->namSinh = 2006;
$sinhVien2->maSinhVien = "PH23456";
$sinhVien2->hienThi();
echo '<br/>';

$sinhVien3 = new SinhVien();
$sinhVien3->hoTen = 'Nguyễn Văn C';
$sinhVien3->namSinh = 2007;
$sinhVien3->maSinhVien = "PH34567";
$sinhVien3->hienThi();
echo '<br/>';

$sinhVien4 = new SinhVien();
$sinhVien4->hoTen = 'Nguyễn Văn D';
$sinhVien4->namSinh = 2008;
$sinhVien4->maSinhVien = "PH45678";
$sinhVien4->hienThi();
echo '<br/>';

//  Một Class có thể được sử dụng ở nhiều nơi
//  BT1:
//  Khai báo class DongVat có các thuộc tính
//  Tên, tuổi, cân nặng, giống loài, màu sắc, giới tính
//  Có các phương thức: ăn, ngủ, di chuyển, thông tin
//  Tạo thêm 1 phương thức hiển thị toàn bộ thông tin của đối tượng
//  Khởi tạo 3 đối tượng khác nhau của class

class DongVat 
{
    public $tenDongVat;
    public $tuoiDV;
    public $canNangDV;
    public $giongDV;
    public $mauSacDV;
    public $gioiTinhDV;

    public function anUong() {
        echo "$this->tenDongVat đang ăn <br/>";
    }

    public function nguNghi() {
        echo "$this->tenDongVat đang ngủ <br/>";
    }

    public function diChuyen() {
        echo "$this->tenDongVat di chuyển bằng 4 chân.<br/>";
    }

    public function thongTin() {
        echo "Tên: $this->tenDongVat <br/>";
        echo "Tuổi: $this->tuoiDV <br/>";
        echo "Cân nặng: $this->canNangDV <br/>";
        echo "Giống loài: $this->giongDV <br/>";
        echo "Màu sắc: $this->mauSacDV <br/>";
        echo "Giới tính: $this->gioiTinhDV <br/>";
    }

    public function hienThiThongTin() {
        echo "<hr/>";
        echo "<strong>Thông tin chi tiết:</strong><br/>";
        $this->thongTin();
        $this->anUong();
        $this->nguNghi();
        $this->diChuyen();
    }
}

$dongVat1 = new DongVat();
$dongVat1->tenDongVat = "Con mèo";
$dongVat1->tuoiDV = 10;
$dongVat1->canNangDV = "6kg";
$dongVat1->giongDV = "Mèo Mướp";
$dongVat1->mauSacDV = "Trắng Đen";
$dongVat1->gioiTinhDV = "Đực";


$dongVat2 = new DongVat();
$dongVat2->tenDongVat = 'Con chó';
$dongVat2->tuoiDV = 5;
$dongVat2->canNangDV = "12kg";
$dongVat2->giongDV = "Chó Cỏ";
$dongVat2->mauSacDV = "Xám Trắng";
$dongVat2->gioiTinhDV = "Cái";

$dongVat3 = new DongVat();
$dongVat3->tenDongVat = 'Con bò';
$dongVat3->tuoiDV = 8;
$dongVat3->canNangDV = "250kg";
$dongVat3->giongDV = "Bò Sữa";
$dongVat3->mauSacDV = "Đen Trắng";
$dongVat3->gioiTinhDV = "Cái";


$dongVat1->hienThiThongTin();
$dongVat2->hienThiThongTin();
$dongVat3->hienThiThongTin();

