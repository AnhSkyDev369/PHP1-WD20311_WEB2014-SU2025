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
<h2>Bài 1</h2>
<table border="1">
    <tr>
        <td>Màu sắc</td>
        <td>Background</td>
    </tr>
    <?php
    foreach ($color as $colorkey => $colorvalue) {
        echo "<tr>";
        echo "<td>$colorvalue</td>";
        echo "<td style=background-color:$colorkey;></td>";
        echo "</tr>";
    }
    ?>
</table>
<table border="2">
    <tr>
        <td>Màu sắc</td>
    </tr>
    <tr>
        <td>Background</td>
    </tr>
</table>

<h2>Bài 2</h2>
<?php
    $arrayNgauNhien = [];
    $tongCacSoChan = 0;
    $soChan = [];
    for ($i=0; $i < 10 ; $i++) { 
        $arrayNgauNhien[] = rand(1,100);
    }
    echo "<pre>";
    var_dump($arrayNgauNhien);
    foreach ($arrayNgauNhien as $key => $value) {
        if ($value % 2 == 0) {
            $soChan[] = $value;
            $tongCacSoChan += $value;
        }
    }
    echo "Danh sách 10 phần tử ngẫu nhiên có trong mảng là: " . implode(", ", $arrayNgauNhien) . "<br/>";
    echo "Danh sách các số chẵn có trong mảng ngẫu nhiên là: " . implode(", ", $soChan) . "<br>";
    echo "Tổng của các số chẵn có trong mảng là: $tongCacSoChan";
?>