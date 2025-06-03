<?php

//  -   Khai báo mảng gồm thông tin 5 sinh viên
$sinhViens = [
    [
        'maSV' => 'PH36206',
        'tenSV' => 'Nguyễn Thế Anh',
        'diemTB' => 8.5,
    ],
        [
        'maSV'          => 'PH36207',
        'tenSV'         => 'Nguyễn Ngọc Anh',
        'diemTB' => 6.5,
    ],
    [
        'maSV'          => 'PH36208',
        'tenSV'         => 'Nguyễn Đức Hoàng',
        'diemTB' => 7.5,
    ],
    [
        'maSV'          => 'PH45206',
        'tenSV'         => 'Trần Đức Chiến',
        'diemTB' => 5.5,
    ],
    [
        'maSV'          => 'PH36500',
        'tenSV'         => 'Trần Quang Khải',
        'diemTB' => 4.8,
    ]
];

//  In ra danh sách sinh viên
echo "<table border='1' cellpadding='5' cellspacing='0'> ";
echo "<tr>";
echo "<td>Số thứ tự</td>";
echo "<td>Mã sinh viên</td>";
echo "<td>Tên sinh viên</td>";
echo "<td>Điểm trung bình</td>";
echo "<td>Xếp loại</td>";
echo "</tr>";

foreach ($sinhViens as $index => $sinhvien) {
echo "<tr>";
echo "<td>" . ($index + 1) ."</td>";
echo "<td>{$sinhvien['maSV']}</td>";
echo "<td>{$sinhvien['tenSV']}</td>";
echo "<td>{$sinhvien['diemTB']}</td>";
echo "<td>". xepLoai($sinhvien['diemTB']) ."</td>";
echo "</tr>";
}
echo "</table>";

//  Viết hàm xepLoai($diem) trả về chuỗi ...
function xepLoai($diem)
{
    if ($diem >= 8) {
        return "Giỏi";
    } elseif (6.5 <= $diem && $diem < 8) {
        return "Khá";
    } elseif (5 <= $diem && $diem< 6.5) {
        return "Trung Bình";
    } else {
        return "Yếu";
    }
}
// echo xepLoai(5);

?>
