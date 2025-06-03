<?php

$danhSachSinhVien = [
    [
        'maSoSinhVien'          => 'PH36206',
        'hotenSinhVien'         => 'Nguyễn Thế Anh',
        'diemTrungBinhSinhVien' => 8.5,
    ],
    [
        'maSoSinhVien'          => 'PH35098',
        'hotenSinhVien'         => 'Lê Ngọc Anh',
        'diemTrungBinhSinhVien' => 7.5,
    ],
    [
        'maSoSinhVien'          => 'PH32245',
        'hotenSinhVien'         => 'Hoàng Ngọc Linh ',
        'diemTrungBinhSinhVien' => 6.5,
    ],
    [
        'maSoSinhVien'          => 'PH36233',
        'hotenSinhVien'         => 'Phạm Hồng Nhung',
        'diemTrungBinhSinhVien' => 5.5,
    ],
    [
        'maSoSinhVien'          => 'PH21356',
        'hotenSinhVien'         => 'Nguyễn Đức Giang',
        'diemTrungBinhSinhVien' => 4.5,
    ],
];

function xepLoai($diem)
{
    // if ($diem >= 8) {
    //     return "Giỏi";
    // } elseif ($diem < 8 && $diem >= 6.5) {
    //     return "Khá";
    // } elseif ($diem < 6.5 && $diem >= 5) {
    //     return "Trung Bình";
    // } else return "Yếu";

    if ($diem >= 8) {
        return "Giỏi";
    } elseif ($diem < 8 && $diem >= 6.5) {
        return "Khá";
    } elseif ($diem < 6.5 && $diem >= 5) {
        return "Trung Bình";
    } else {
        return "Yếu";
    }

}

echo "<table border='1' cellpadding='5', cellspacing='1'>";
echo "<tr>
        <th>Số Thứ Tự</th>
        <th>Mã Số Sinh Viên</th>
        <th>Họ Tên Sinh Viên</th>
        <th>Điểm Trung Bình Sinh Viên</th>
        <th>Xếp Loại Sinh Viên</th>
    <tr/>";

foreach ($danhSachSinhVien as $dssvkey => $dssvvalue) {
    echo "<tr>
        <td>" . ($dssvkey + 1) . "</td>
        <td>{$dssvvalue['maSoSinhVien']}</td>
        <td>{$dssvvalue['hotenSinhVien']}</td>
        <td>{$dssvvalue['diemTrungBinhSinhVien']}</td>
        <td>" . xepLoai($dssvvalue['diemTrungBinhSinhVien']) . "</td>";
}
echo "</table>";
