<?php

//  Khai áo mảng gồm 5 sinh viên
$sinhviens = [
    [
        'masv'   => 'PH36206',
        'tensv'  => 'Nguyễn Thế Anh',
        'diemTB' => 8.5,
    ],
    [
        'masv'   => 'PH36207',
        'tensv'  => 'Nguyễn Thế Đức',
        'diemTB' => 6.5,
    ], [
        'masv'   => 'PH36206',
        'tensv'  => 'Nguyễn Văn Tuấn',
        'diemTB' => 5.5,
    ],
    [
        'masv'   => 'PH36286',
        'tensv'  => 'Nguyễn Hoàng Anh',
        'diemTB' => 9.5,
    ],
    [
        'masv'   => 'PH36226',
        'tensv'  => 'Lê Ngọc Anh',
        'diemTB' => 8.5,
    ],
];

//  In ra danh sách sinh viên
echo "<table border='1' cellpading='5' cellspacing='0'>";
echo "<tr>";
echo "<th>Số thứ tự sinh viên</th>
<th>Mã sinh viên</th>
        <th>Tên sinh viên</th>
        <th>Điểm trung bình</th>
        <th>Xếp loại</th>";
echo "</tr>";
echo "<tr>";

foreach ($sinhviens as $index => $value) {
    echo "<tr>";
    echo "
    <td>" . ($index + 1) . "</td>
        <td>{$value['masv']}</td>
        <td>{$value['tensv']}</td>
        <td>{$value['diemTB']}</td>
        <td>" . xepLoai($value['diemTB']) . "</td>";
    echo "</tr>";
}

//  Hàm xepLoai($diem) trả về chuỗi (return "")
function xepLoai($diem)
{
    if ($diem >= 8) {
        return "Giỏi";
    } elseif (8 > $diem && $diem >= 6.5) {
        return "Khá";
    } elseif (6.5 >= $diem && $diem >= 5) {
        return "Trung bình";
    } else {
        return "Yếu";
    }
    echo "Xếp loại của sinh viên là: " . xepLoai(5);
}
