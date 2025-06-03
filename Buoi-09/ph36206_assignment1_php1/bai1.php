<?php

    //  Khai báo mảng gồm thông tin 5 sinh viên
    $sinhVien = [
        [
            "maSV"   => "PH36206",
            "tenSV"  => "Nguyễn Thế Anh",
            "diemTB" => "7.5",
        ],
        [
            "maSV"   => "PH36207",
            "tenSV"  => "Nguyễn Thế Đức",
            "diemTB" => "7.8",
        ],
        [
            "maSV"   => "PH36236",
            "tenSV"  => "Nguyễn Ngọc Anh",
            "diemTB" => "8.5",
        ],
        [
            "maSV"   => "PH3406",
            "tenSV"  => "Nguyễn Văn Nam",
            "diemTB" => "6",
        ],
        [
            "maSV"   => "PH36354",
            "tenSV"  => "Trần Đức Anh",
            "diemTB" => "9.5",
        ],
    ];
?>
<h2>Bài 1: </h2>
<table border=1>
    <tr>
        <td>Mã sinh viên</td>
        <td>Tên sinh viên</td>
        <td>Điểm trung bình</td>
    </tr>
    <?php
        foreach ($sinhVien as $svkey => $svvalue) {
            echo "<tr>";
            echo "<td>";
            echo $svvalue['maSV'] . "<br/>";
            echo "</td>";
            echo "<td>";
            echo $svvalue['tenSV'] . "<br/>";
            echo "</td>";
            echo "<td>";
            echo $svvalue['diemTB'] . "<br/>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>
<?php
    function xepLoai($diemHocTap)
    {
        if ($diemHocTap >= 9) {
            return "Giỏi";
        } elseif (6.5 <= $diemHocTap && $diemHocTap < 8) {
            return "Khá";
        } elseif (5 <= $diemHocTap && $diemHocTap < 6.5) {
            return "Trung bình";
        } else {
            return "Yếu";
        }
    }
// echo "<table border='1'>";
// echo 
// echo "<table>";
?>