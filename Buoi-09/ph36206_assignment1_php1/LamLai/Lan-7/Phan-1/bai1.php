<?php
    //  Khai báo 1 mảng gồm thông tin 5 sinh viên
    $dsSinhVien = [
        [
            'maSoSinhVien'  => 'PH36206',
            'tenSinhVien'   => 'Nguyễn Thế Anh',
            'diemTrungBinh' => 9.5,
        ],
        [
            'maSoSinhVien'  => 'PH36326',
            'tenSinhVien'   => 'Nguyễn Hoàng Anh',
            'diemTrungBinh' => 7.5,
        ],
        [
            'maSoSinhVien'  => 'PH34255',
            'tenSinhVien'   => 'Trần Thế Anh',
            'diemTrungBinh' => 6.5,
        ],
        [
            'maSoSinhVien'  => 'PH45656',
            'tenSinhVien'   => 'Nguyễn Đức Mạnh',
            'diemTrungBinh' => 5.5,
        ],
        [
            'maSoSinhVien'  => 'PH23568',
            'tenSinhVien'   => 'Hoàng Công Khải',
            'diemTrungBinh' => 4.5,
        ],
    ];
    echo "<h3>Danh sách sinh viên </h3>";
    echo "<table border='1'>";
    echo "    
    <tr>
        <th>STT</th>
        <th>Mã Sinh Viên</th>
        <th>Tên Sinh Viên</th>
        <th>Điểm Trung Bình</th>
        <th>Xếp Loại Sinh Viên</th>
    </tr>";
    foreach ($dsSinhVien as $key => $value) {
        echo "    
        <tr>
            <td>". ($key + 1) ."</td>
            <td>{$value['maSoSinhVien']}</td>
            <td>{$value['tenSinhVien']}</td>
            <td>{$value['diemTrungBinh']}</td>
            <td>". xepLoai($value['diemTrungBinh']) ."</td>
        </tr>";
    }
    echo "</table>";

    function xepLoai($diem)
    {
        if ($diem >= 8) return "Giỏi";
        elseif ($diem < 8 && $diem >= 6.5) return "Khá";
        elseif ($diem < 6.5 && $diem >= 5) return "Trung Bình";
        else return "Yếu";
    }

?>

