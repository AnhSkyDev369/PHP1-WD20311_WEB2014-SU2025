<?php
//  Bài 1:  Sử dụng hàm trả về có tham số để giải phương trình bậc hai
$heso_a = $heso_b = $heso_c = "";

if (isset($_POST['heso_a'])) $heso_a = $_POST['heso_a'];
if (isset($_POST['heso_b'])) $heso_b = $_POST['heso_b'];
if (isset($_POST['heso_c'])) $heso_c = $_POST['heso_c'];

function giaiBTVNPT2($a, $b, $c) {
    if ($a == "") $a = 0;
    if ($b == "") $b = 0;
    if ($c == "") $c = 0;

    echo "Phương trình: " . $a . "x^2 + " . $b . "x + " . $c . " = 0";
    echo "<br/>";

    if ($a == 0) {
        if ($b == 0) {
            echo "Phương trình vô nghiệm";
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (-$c / $b));
        }
        return;
    }
    
    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";
    if ($delta > 0) {
        $nghiem1 = (-$b + sqrt($delta)) / (2 * $a);
        $nghiem2 = (-$b - sqrt($delta)) / (2 * $a);
        if ($nghiem1 < $nghiem2) {
            $x1 = $nghiem1;
            $x2 = $nghiem2;
        } else {
            $x1 = $nghiem2;
            $x2 = $nghiem1; 
        }
        echo "Phương trình có 2 nghiệm là: " . "x1 = " . number_format($x1,2) . " và x2 = " . number_format($x2, 2);
    } elseif ($delta == 0) {
        $x1 = (-$b / (2 * $a));
        echo "Phương trình có nghiệm kép: x1 = x2 = " . $x1;
    } else {
        echo "Phương trình vô nghiệm !";
    }
}

?>

<form action="#" method="post">
    <table border="3">
        <tr>
            <td>Hệ số bậc 2, a</td>
            <td><input type="text" name="heso_a" value="<?= $heso_a ?>" /></td>
        </tr>
        <tr>
            <td>Hệ số bậc 1, b</td>
            <td><input type="text" name="heso_b" value="<?= $heso_b ?>" /></td>
        </tr>
        <tr>
            <td>Hệ số tự do, c</td>
            <td><input type="text" name="heso_c" value="<?= $heso_c ?>" /></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Giải phương trình bậc 2" />
            </td>
    </table>
</form>

<?php
if (is_numeric($GLOBALS['heso_a']) && is_numeric($GLOBALS['heso_b']) && is_numeric($GLOBALS['heso_c'])) {
    giaiBTVNPT2($GLOBALS['heso_a'], $GLOBALS['heso_b'], $GLOBALS['heso_c']);
} else {
    echo "Vui lòng nhập các hệ số a, b, c là số!";
}

//  Bài 2:  Tạo 1 hàm để hiển thị giá trị của các phần tử trong mảng được truyền vào.

function showArray($arr) {
    if (is_array($arr)) {
        echo "<br/>Mảng có " . count($arr) . " phần tử là: ";
        foreach ($arr as $key => $value) {
            echo "<br/>Phần tử thứ " . $key . " là: " . $value;
        }
    } else {
        echo "<br/>Giá trị không phải là mảng";
    }
}
showArray('abc');

//  Bài 3:  Tạo 1 hàm để tính tổng các số chẵn trong một mảng được truyền vào

function sumEven($arr) {
    if (is_array($arr)) {
        $sum = 0;
        foreach ($arr as $value) {
            if ($value % 2 == 0) {
                $sum += $value;
            }
        }
        return $sum;
    } else {
        return "Giá trị truyền vào không phải là mảng";
    }
}
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
echo "<br/>Tổng các số chẵn trong mảng là: " . sumEven($numbers);