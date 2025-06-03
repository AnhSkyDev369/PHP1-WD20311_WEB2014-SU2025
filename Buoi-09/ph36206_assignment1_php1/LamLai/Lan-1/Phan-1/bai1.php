<?php
//  1.  Viết một file PHP thực hiện các chức năng sau:

//  -   Khai báo mảng gồm thông tin 5 sinh viên
$sinhViens = [
    [
        'maSV'          => 'PH36206',
        'tenSV'         => 'Nguyễn Thế Anh',
        'diemTrungBinh' => 8.5,
    ],
    [
        'maSV'          => 'PH36207',
        'tenSV'         => 'Nguyễn Ngọc Anh',
        'diemTrungBinh' => 6.7,
    ],
    [
        'maSV'          => 'PH36208',
        'tenSV'         => 'Nguyễn Đức Hoàng',
        'diemTrungBinh' => 3.9,
    ],
    [
        'maSV'          => 'PH45206',
        'tenSV'         => 'Trần Đức Chiến',
        'diemTrungBinh' => 9.5,
    ],
    [
        'maSV'          => 'PH36500',
        'tenSV'         => 'Trần Quang Khải',
        'diemTrungBinh' => 5.8,
    ],
];

// In ra danh sách sinh viên dưới dạng bảng HTML theo thứ tự
echo "<h3>Danh sách sinh viên</h3>";
echo "<table border='1'>";
echo "<tr>";
echo "<td>Số thứ tự</td>";
echo "<td>Mã Sinh Viên</td>";
echo "<td>Tên Sinh Viên</td>";
echo "<td>Điểm Trung Bình</td>";
echo "<td>Xếp Loại</td>";
echo "</tr>";

//  2.  Thực hiện
//  -   Sử dụng vòng lặp for (cụ thể là foreach để in bảng)
foreach ($sinhViens as $index => $value) {
    echo "<tr>";
    echo "<td>" . ($index + 1) . "</td>";
    echo "<td>{$value['maSV']}</td>";
    echo "<td>{$value['tenSV']}</td>";
    echo "<td>{$value['diemTrungBinh']}</td>";
    echo "<td>" . xepLoai($value['diemTrungBinh']) . "</td>";
    echo "</tr>";
}
echo "</table>";

//  -   Viết hàm xếp xepLoai($diem) trả về (return) chuỗi
//  -   Sử dụng câu điều kiện if-elseif-else để phân loại xếp loại
function xepLoai($diem)
{
    if ($diem >= 8) {
        return "Giỏi";
    } elseif (6.5 <= $diem && $diem < 8) {
        return "Khá";
    } elseif (5 <= $diem && $diem <= 6.5) {
        return "Trung Bình";
    } else {
        return "Yếu";
    }
}

//  Giỏi
// echo xepLoai(10);
// echo xepLoai(9);
// echo xepLoai(8);

// //  Khá
// echo xepLoai(7);
// echo xepLoai(6);

//  Trung Bình
// echo xepLoai(5);

//  Yếu
// echo xepLoai(4);
// echo xepLoai(3);
// echo xepLoai(2);
// echo xepLoai(1);
