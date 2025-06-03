<?php

$sinhViens = [
    [
        'maSoSinhVien' => 'PH36206',
        'tenSinhVien'  => 'Nguyễn Thế Anh',
        'diemTB'       => 8.5,
    ],
    [
        'maSoSinhVien' => 'PH36207',
        'tenSinhVien'  => 'Nguyễn Ngọc Anh',
        'diemTB'       => 7.5,
    ],
    [
        'maSoSinhVien' => 'PH36208',
        'tenSinhVien'  => 'Nguyễn Văn Anh',
        'diemTB'       => 6.5,
    ],
    [
        'maSoSinhVien' => 'PH36209',
        'tenSinhVien'  => 'Nguyễn Ngọc Chiến',
        'diemTB'       => 5.5,
    ],
    [
        'maSoSinhVien' => 'PH36210',
        'tenSinhVien'  => 'Nguyễn Hoàng Duy',
        'diemTB'       => 4.5,
    ],

];

function xepLoai($diem)
{
    if ($diem >= 8) return "Giỏi";
    elseif ($diem < 8 && $diem >= 6.5) return "Khá";
    elseif ($diem < 6.5 && $diem > 5) return "Trung Bình";
    else return "Yếu";
}
// echo xepLoai(9);
//  In bảng sinh viên ra màn hình
echo "<h3>Danh sách sinh viên</h3>";
echo "<table border='1' cellpadding='5' cellspacing='1'>";
echo "    
    <tr>
        <th>STT</th>
        <th>Mã Sinh Viên</th>
        <th>Tên Sinh Viên</th>
        <th>Điểm Trung Bình</th>
        <th>Xếp Loại</th>
    </tr>";

foreach ($sinhViens as $key => $value) {
    echo " 
    <tr>
        <td>". ($key + 1) ."</td>
        <td>{$value['maSoSinhVien']}</td>
        <td>{$value['tenSinhVien']}</td>
        <td>{$value['diemTB']}</td>
        <td> ". xepLoai($value['diemTB']) ." </td>
    </tr>
";
}
echo  "</table>";
?>



