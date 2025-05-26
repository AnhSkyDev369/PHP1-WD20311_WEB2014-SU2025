<?php
//  Cách 1:
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


class DongVat1
{
    public $ten;
    public $tuoi;
    public $canNang;
    public $giongLoai;
    public $mauSac;
    public $gioiTinh;

    //  Set giá trị cho thuộc tính
    // public function setTen($name) {
    //     $this->ten = $name;
    // }
    // public function setTuoi($age) {
    //     $this->tuoi = $age;
    // }
    // public function setCanNang($weight) {
    //     $this->canNang = $weight;
    // }
    // public function setGiongLoai($species) {
    //     $this->giongLoai = $species;
    // }
    // public function setMauSac($color) {
    //     $this->mauSac = $color;
    // }
    // public function setGioiTinh($sex) {
    //     $this->gioiTinh = $sex;
    // }

    //  Sử dụng hàm khởi tạo (Magic function)
    public function __construct($name, $age, $weight, $species, $color, $sex) 
    {
        $this->ten = $name;
        $this->tuoi = $age;
        $this->canNang = $weight;
        $this->giongLoai = $species;
        $this->mauSac = $color;
        $this->gioiTinh = $sex;
    }

    //  Tên hàm __construct là mặc định không được thay đổi
    //  -   Trong 1 class chỉ có 1 hàm khởi tạo
    //  -   Hàm construct sẽ được ưu tiên và chạy đầu tiên nếu nó tồn tại
    //  -   Hàm này thường được sử dụng để set giá trị ban đầu cho các thuộc tính
    public function an1() {
        echo "<hr/>";
        echo "Ăn bằng mồm <br/>";
    }
    public function ngu1() {
        echo "<hr/>";
        echo "Ngủ vào ban đêm <br/>";
    }
    public function diChuyen1() {
        echo "<hr/>";
        echo "Di chuyển trên mặt đất <br/>";
    }
    public function thongTin1() {
        echo $this->ten . ' - ' .
        $this->tuoi . ' - ' .
        $this->canNang . ' - ' .
        $this->giongLoai . ' - ' .
        $this->mauSac . ' - ' .
        $this->gioiTinh;
    }
}
//  Cách 2:
//  Gán giá trị cho thuộc tính thông qua hàm
// $conMeo = new DongVat1();
// $conMeo->setTen('Trần Đức Bo');
// $conMeo->setTuoi(10);
// $conMeo->setCanNang("10kg");
// $conMeo->setGiongLoai("Con người");
// $conMeo->setMauSac("Màu trắng");
// $conMeo->setGioiTinh("Nữ");
// $conMeo->thongTin1();

//  Cách 3:
//  Sử dụng hàm khởi tạo
$conChim = new DongVat1("Con Vẹt", 2, 0.5, "Vẹt Châu Phi", "Màu đen", "Đực");
$conChim->thongTin1();