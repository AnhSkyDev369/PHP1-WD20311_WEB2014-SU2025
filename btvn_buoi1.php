<?php
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

<!-- Bài 1 -->
<h2>Bài 1: </h2>
<table border=1>
    <tr>
        <td>Màu sắc</td>
        <td>Background</td>
    </tr>
    <?php
        foreach ($color as $colorkey => $colorvalue) {
            echo "<tr>";
            echo "<td>$colorvalue</td>";
            echo "<td style=background-color:$colorkey></td>";
            echo "</tr>";
        }
    ?>
    <!-- <tr>
        <td>Màu đỏ</td>
        <td>Red</td>
    </tr> -->
</table>

<!-- Bài 2 -->
<h2>Bài 2: </h2>
<?php
    $arrayDefault = [];
    // var_dump($arrayDefault);
    $tongCacSoChan = 0;
    // echo $tongCacSoChan;
    for ($i = 0; $i < 10; $i++) {
        $arrayDefault[] = $arrRandom[] = rand(1, 100);
        echo "<pre>";
        var_dump($arrayDefault);
        // var_dump($arrRandom);
    }
    foreach ($arrayDefault as $arrKey => $arrValue) {
        if ($arrValue % 2 == 0) {
            // echo "Các số chẵn có trong mảng ngẫu nhiên:" . $arrValue . "<br>";
            $tongCacSoChan += $arrValue;
        } else {
            echo "Các số lẻ có trong mảng ngẫu nhiên:" . $arrValue . "<br>";
        }
    }
    echo "Tổng các số chẵn có trong mảng đó: " . $tongCacSoChan;

    // //  ChatGPT tối ưu lại code
    // $arrayDefault1  = [];
    // $tongCacSoChan1 = 0;
    // $soChan         = [];
    // $soLe           = [];

    // // Sinh mảng 10 số ngẫu nhiên từ 1 đến 100
    // for ($i = 0; $i < 10; $i++) {
    //     $arrayDefault1[] = rand(1, 100);
    // }

    // // Duyệt mảng, phân loại chẵn/lẻ
    // foreach ($arrayDefault1 as $value) {
    //     if ($value % 2 == 0) {
    //         $soChan[] = $value;
    //         $tongCacSoChan1 += $value;
    //     } else {
    //         $soLe[] = $value;
    //     }
    // }

    // // Hiển thị kết quả
    // echo "<h3>Mảng ngẫu nhiên:</h3>";
    // echo implode(", ", $arrayDefault1) . "<br><br>";

    // echo "<h3>Các số chẵn:</h3>";
    // echo implode(", ", $soChan) . "<br>";

    // echo "<h3>Các số lẻ:</h3>";
    // echo implode(", ", $soLe) . "<br>";

    // echo "<h3>Tổng các số chẵn:</h3>";
    // echo $tongCacSoChan1;

    //  Sửa lại sau khi tham khảo code của ChatGPT
    $arrayDefault = [];
    // var_dump($arrayDefault);
    $tongCacSoChan2 = 0;
    $tongCacSoLe2   = 0;
    // echo $tongCacSoChan;
    // echo $tongCacSoLe;
    $soChan2 = [];
    $soLe2   = [];
    for ($i = 0; $i < 10; $i++) {
        $arrayDefault2[] = $arrRandom2[] = rand(1, 100);
        echo "<pre>";
        // var_dump($arrayDefault2);
        // var_dump($arrRandom2);
    }
    foreach ($arrayDefault2 as $arrValue2) {
        if ($arrValue2 % 2 == 0) {
            // echo "Các số chẵn có trong mảng ngẫu nhiên:" . $arrValue2 . "<br>";
            $soChan2[] = $arrValue2;
            $tongCacSoChan2 += $arrValue2;
        } else {
            // echo "Các số lẻ có trong mảng ngẫu nhiên:" . $arrValue . "<br>";
            $soLe2[] = $arrValue2;
            //  Bonus
            $tongCacSoLe2 += $arrValue2;
        }
    }
    //  Hiển thị kết quả:
    echo "<h3>Mảng ngẫu nhiên: </h3>";
    echo implode(", ", $arrayDefault2) . "<br><br>";

    //  Danh sách các số chẵn có trong mảng ngẫu nhiên:
    //  Danh sách các số lẻ có trong mảng ngẫu nhiên:
    // echo "Danh sách số chẵn: $soChan2 <br/>";
    // echo "Danh sách số lẻ: $soLe2 <br/>" ;
    echo "Danh sách số chẵn: " . implode(", ", $soChan2) . "<br/>";
    echo "Danh sách số lẻ: " . implode(", ", $soLe2) . "<br/>";

    //  Tổng của các số chẵn có trong danh sách ngẫu nhiên
    echo "Tổng của các số chẵn có trong danh sách: $tongCacSoChan2 <br/>";
    echo "Tổng của các số lẻ có trong danh sách: $tongCacSoLe2";

?>
