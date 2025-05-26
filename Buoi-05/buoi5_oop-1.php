<?php
class DongVat1
{
    public $ten;
    public $tuoi;
    public $canNang;
    public $giongLoai;
    public $mauSac;
    public $gioiTinh;

    public function __construct($name, $age, $weight, $species, $color, $sex) 
    {
        $this->ten = $name;
        $this->tuoi = $age;
        $this->canNang = $weight;
        $this->giongLoai = $species;
        $this->mauSac = $color;
        $this->gioiTinh = $sex;
    }

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
$conChim = new DongVat1("Con Vẹt", 2, 0.5, "Vẹt Châu Phi", "Màu đen", "Đực");
$conChim->thongTin1();