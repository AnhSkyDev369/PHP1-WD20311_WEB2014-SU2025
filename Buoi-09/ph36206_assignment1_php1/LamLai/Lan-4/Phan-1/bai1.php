<?php
    //  Bài 1:
    //  -   Khai báo mảng gồm thông tin 5 sinh viên
    $sinhViens = [
        [
            'maSinhVien'    => 'PH36206',
            'tenSinhVien'   => 'Nguyễn Thế Anh',
            'diemTrungBinh' => 8.5,
        ],
        [
            'maSinhVien'    => 'PH36207',
            'tenSinhVien'   => 'Nguyễn Đức Anh',
            'diemTrungBinh' => 7.5,
        ],
        [
            'maSinhVien'    => 'PH36208',
            'tenSinhVien'   => 'Nguyễn Ngọc Anh',
            'diemTrungBinh' => 6.5,
        ],
        [
            'maSinhVien'    => 'PH36209',
            'tenSinhVien'   => 'Nguyễn Hoàng Anh',
            'diemTrungBinh' => 5.5,
        ],
        [
            'maSinhVien'    => 'PH36210',
            'tenSinhVien'   => 'Nguyễn Đức Dương Anh',
            'diemTrungBinh' => 4.5,
        ],
    ];

    //  -   Viết hàm xepLoai($diem)
    function xepLoai($diem)
    {
        if ($diem >= 8) {
            return "Giỏi";
        } elseif ($diem >= 6.5 && $diem < 8) {
            return "Khá";
        } elseif ($diem >= 5 && $diem < 6.5) {
            return "Trung Bình";
        } else {
            return "Yếu";
        }
    }

    //  -   In ra danh sách sinh viên
    echo "<h3>Danh sách sinh viên: </h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "   
    <tr>
        <th>STT</th>
        <th>Mã Sinh Viên</th>
        <th>Tên Sinh Viên</th>
        <th>Điểm Trung Bình</th>
        <th>Xếp Loại</th>
    </tr>";
    foreach ($sinhViens as $index => $value) {
        echo "
        <tr>
            <td>".($index + 1)."</td>
            <td>{$value['maSinhVien']}</td>
            <td>{$value['tenSinhVien']}</td>
            <td>{$value['diemTrungBinh']}</td>
            <td>".xepLoai($value['diemTrungBinh'])."</td>
        </tr>";
    }  
echo "</table>";
?>



    
