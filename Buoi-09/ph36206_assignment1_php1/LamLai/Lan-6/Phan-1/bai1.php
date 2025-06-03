<?php

    $dsSinhVien = [
        [
            'maSoSinhVien'     => 'PH36206',
            'hoTenSinhVien'    => 'Nguyễn Thế Anh',
            'diemTrungBinhMon' => 9.5,
        ],
        [
            'maSoSinhVien'     => 'PH36236',
            'hoTenSinhVien'    => 'Hoàng Ngọc Anh',
            'diemTrungBinhMon' => 7.5,
        ],
        [
            'maSoSinhVien'     => 'PH36243',
            'hoTenSinhVien'    => 'Lê Văn Mạnh',
            'diemTrungBinhMon' => 6.5,
        ],
        [
            'maSoSinhVien'     => 'PH34306',
            'hoTenSinhVien'    => 'Trần Thế Chiến',
            'diemTrungBinhMon' => 5.5,
        ],
        [
            'maSoSinhVien'     => 'PH32453 ',
            'hoTenSinhVien'    => 'Nguyễn Duy Anh',
            'diemTrungBinhMon' => 4.5,
        ],
    ];
    echo "<table border='1' cellpadding='5' cellspacing='1'>";
    echo "
    <tr>
        <th>STT</th>
        <th>MSSV</th>
        <th>Tên Sinh Viên</th>
        <th>Điểm Trung Bình Môn</th>
        <th>Xếp Loại Học Lực</th>
    </tr>";

    function xepLoai($diem)
    {
        if ($diem >= 8) return "Giỏi";
        elseif ($diem < 8 && $diem >= 6.5) return "Khá";
        elseif ($diem < 6.5 && $diem >= 5) return "Trung Bình";
        else return "Yếu";
    }

    foreach ($dsSinhVien as $key => $value) {
        echo " 
        <tr>
        <td>". ($key + 1) ."</td>
        <td>{$value['maSoSinhVien']}</td>
        <td>{$value['hoTenSinhVien']}</td>
        <td>{$value['diemTrungBinhMon']}</td>
        <td>". xepLoai($value['diemTrungBinhMon']) . "</td>
    </tr>";
    }
echo "</table>";
?>
   
