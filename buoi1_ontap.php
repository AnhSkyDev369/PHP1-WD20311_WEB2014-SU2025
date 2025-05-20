<?php
    echo '<pre>';
    //  Trong PHP có những kiểu dữ liệu nào?
    //  Có 5 kiểu dữ liệu trong PHP, bao gồm:

    //  - Kiểu chuỗi (String)
    $string  = "Hello";
    $string1 = 'World';

    $string2 = "Nguyễn Thế Anh $string $string1 <br/>";
    $string3 = 'Nguyễn Thế Anh $string $string1';

    echo $string . '<br/>' . $string1 . '<br>' . $string2 . '<br/>' . $string3 . '<br/>';

    //  - Kiểu số nguyên (Number)
    $year  = 2025;
    $month = 5;
    $day   = 13;
    echo "Ngày $day tháng $month năm $year <br/>";

    //  - Kiểu số thực (Float)
    $float  = 5.5;
    $float1 = 15.8;
    $PI     = 3.14159;
    echo $float . '<br>' . $float1 . '<br>';
    echo "PI bằng $PI <br/>";

    // - Kiểu Boolean
    $true  = true;
    $false = false;
    echo $true, false;

    // - Kiểu null
    $null = null;
    echo $null;
    echo '<hr/>';
    // - Kiểu mảng trong PHP
    // - Mảng trong PHP là một tập hợp nhiều các phần tử có cùng hoặc không cùng kiểu dữ liệu
    //  dùng để lưu trữ nhiều giá trị.

    //  Mảng có 2 thành phần:
    //  - Key:   Vị trí của phần tử trong mảng (0->n-1)
    //  - Value: Giá trị của phần tử đó trong mảng

    //  Mảng có bao nhiêu loại: 3 loại gồm mảng tuần tự, mảng liên hợp, mảng đa chiều .

    //  - Mảng tuần tự (Mảng số nguyên):
    //  Là mảng mà các phần tử có vị trí được xác định trước
    //  là các số nguyên từ 0 -> n-1 .

    $arr = [1, 2, 3, 4, 5, 6, 'abc', 'xyz', true . 5.5];

    //  Mảng liên hợp:
    //  Là mảng mà các phần tử có vị trí được tự xác định
    //  là ký tự (chuỗi, số nguyên) không được trùng nhau.

    $sinh_vien = [
        'ho_ten' => 'Nguyễn Thế Anh',
        'lop'    => 'WD20311',
        3        => 'abc',
    ];

    //  Mảng đa chiều:
    //  Là mảng mà phần tử sẽ là 1 mảng khác

    $giang_viens = [
        [
            'ma_gv'    => 'DINHTV7',
            'ho_ten'   => 'Tạ Văn Định',
            'nam_sinh' => 2005,
        ],
        [
            'ma_gv'    => 'DIEULTH2',
            'ho_ten'   => 'Lê Thị Huyền Diệu',
            'nam_sinh' => 2005,
        ],
    ];
    echo $giang_viens[0]['ma_gv'] . '<br>';
    echo $giang_viens[0]['ho_ten'] . '<br>';
    echo $giang_viens[0]['nam_sinh'] . '<br>';
    echo '<br/>';
    echo $giang_viens[1]['ma_gv'] . '<br>';
    echo $giang_viens[1]['ho_ten'] . '<br>';
    echo $giang_viens[1]['nam_sinh'] . '<br>';

    echo "<br/>";
    echo "<hr/>";

    //  Ví dụ: Sử dụng vòng lặp foeach để duyệt các mảng
    //  $arr; $sinh_vien; $giang_viens
    //  Và hiển thị lần lượt toàn bộ các giá trị của các phần tử trong mảng đó.
    //  foreach($mang_can_duyet as $key => $value)

    echo 'Duyệt mảng $sinh_vien: <br>';
    foreach ($sinh_vien as $sv => $value) {
        // echo 'Danh sách sinh viên:'. $sv . '<br>';
        echo "Vị trí $sv có $value <br>";
    }
    echo "<br>";
    echo "<hr/>";

    echo 'Duyệt mảng $arr: ';
    foreach ($arr as $key => $value) {
        echo "</br>";
        echo "Vị trí $key có giá trị là: $value";
    }
    echo "</br>";
    echo "<hr/>";

    echo 'Duyệt mảng $giang_viens: ';
    foreach ($giang_viens as $key => $value) {
        // var_dump($key, $value);
        echo '<br/>';
        echo "Giảng viên ở vị trí $key: <br/>";
        echo "Họ tên là: " . $value['ho_ten'] . "<br/>";
        echo "Mã giảng viên là: " . $value['ma_gv'] . "<br/>";
        echo "Năm sinh là: " . $value['nam_sinh'] . "<br/>";
    }
    echo "<br/>";
    echo "<hr/>";
    //  BTVN:
    //  Bài 1:
    //  Cho 1 mảng màu sắc, hiển thị màu sắc ra 1 bảng (table)
    //  Background của ô sẽ trùng với tên màu.
    $color = [
        'red'    => 'Màu đỏ',
        'blue'   => 'Màu xanh',
        'green'  => 'Màu xanh lá',
        'orange' => 'Màu cam',
    ];

    //  Bài 2:
    //  Khai báo một mảng gồm 10 phần tử là số nguyên ngẫu nhiên
    //  Hiển thị các phần tử trong mảng và tính tổng các số chẵn trong mảng đó.

?>
<!-- Giải bài tập -->
<!-- Bài 1:  Có sự hỗ trợ của ChatGPT -->
<!-- Giải pháp dựa vào code của ChatGPT -->
<h2>Bài 1: Tự code và có hỏi ChatGPT</h2>
<table border="1">
    <tr>
        <td>Màu sắc</td>
        <td>Background</td>
    </tr>
    <?php
        $color = [
            'red'    => 'Màu đỏ',
            'blue'   => 'Màu xanh',
            'green'  => 'Màu xanh lá',
            'orange' => 'Màu cam',
        ];
        foreach

        ($color as $colorkey => $colorvalue) {
            echo "<tr>";
            echo "<td>$colorvalue</td>";
            echo "<td style='background-color: $colorkey;'> &nbsp; </td>";
            echo "</tr>";
        }
    ?>
</table>

<!-- Tự code lại mà không nhìn -->
<h2>Bài 1: code lại</h1>
    <table border="3">
        <tr>
            <td>Màu sắc</td>
            <?php
                $color1 = [
                    'red'    => 'Màu đỏ',
                    'blue'   => 'Màu xanh',
                    'green'  => 'Màu xanh lá',
                    'orange' => 'Màu cam',
                ];
                foreach ($color1 as $colorkey1 => $colorvalue1) {
                    echo "<td>";
                    echo "$colorvalue1";
                    echo "</td>";

                }
            ?>
        </tr>
        <tr>
            <td>Background</td>
            <?php
            foreach ($color1 as $colorkey1 => $colorvalue1) {
                echo "<td style='background-color:$colorkey1';>";
                echo "&nbsp;";
                echo "</td>";
            }

        ?>
        </tr>
    </table>
    <br />
    <hr />
    <!-- Bài 2: -->
    <?php
    echo "Bài 2: Tự code, có suy nghĩ và có hỏi ChatGPT chỗ chưa rõ <br/>";
    //  Mảng $arrInteger có 10 phần tử ngẫu nhiên là số nguyên.
    $arrInteger = [
        1, 2, 3, 5, 57, 43, 645, 23, 1, 124,
    ];
    //  Khởi tạo biến $tinhTongSoChan (Gợi ý của ChatPT)
    $tinhTongSoChan = 0;
    //  Hiển thị các phần tử trong mảng
    foreach ($arrInteger as $arrInt) {
        echo "Các số nguyên có trong mảng: " . $arrInt . "<br/>";
        if ($arrInt % 2 == 0) {
            echo "Với $arrInt là số chẵn <br/>";
            $tinhTongSoChan += $arrInt;
        } else {
            echo "Với $arrInt là số lẻ <br/>";
        }
    }
    echo "Tổng của các số chẵn có trong mảng: " . $tinhTongSoChan . '<br>';
    echo "<hr>";

    //  Code lại
    $arrIntegerRandom          = []; //   Mảng rỗng
    $tongCacSoNguyenChanRandom = 0;
    $tongCacSoNguyenLeRandom   = 0;
    for ($i = 0; $i < 10; $i++) {

        //  ChatGPT said Sai: Lỗi logic mỗi vòng lặp gắn đè các số nguyên lên mảng và ép kiểu từ int sang array
        // $arrIntegerRandom = (array)rand(1,100); // Tạo số từ 1 đến 100
        // // print_r("Mảng các số nguyên ngẫu nhiên từ hàm rand: ". $arrIntegerRandom . "<br/>");
        // var_dump($arrIntegerRandom);

        //  Đúng:
        $arrIntegerRandom[] = rand(1, 100);
        // print_r($arrIntegerRandom);
    }
    // die;

    foreach ($arrIntegerRandom as $arrIntRandom) {
        if ($arrIntRandom % 2 == 0) {
            echo "Đây là các số chẵn: $arrIntRandom" . "<br/>";
            $tongCacSoNguyenChanRandom += $arrIntRandom;
        } else {
            echo "Còn đây là các số lẻ: $arrIntRandom" . "<br/>";
            $tongCacSoNguyenLeRandom += $arrIntRandom;
        }
    }
    echo "Tổng của các số nguyên chẵn ramdom là: $tongCacSoNguyenChanRandom";
    echo "<br/>";
echo "Tổng của các số nguyên lẻ ramdom là: $tongCacSoNguyenLeRandom";
?>