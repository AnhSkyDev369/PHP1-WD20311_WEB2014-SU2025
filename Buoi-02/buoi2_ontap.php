<?php

//  VÒNG LẶP
//  for(giá_trị_ban_đầu; điều_kiện_dừng; bước_nhảy) {
//      Công việc cần lặp
//  }

//  Khi nào cần dùng điều kiện for ?
//  -   Khi biết rõ giá trị ban đầu
//  -   Khi biết rõ điều kiện dừng
//  -   Khi biết trước số lần lặp
//  -   Khi biết rõ bước nhảy

// while (điều_kiện_dừng) {
//  Công việc cần lặp
//  Bước nhảy
// }
// -    Sử dụng khi đã biết rõ điều kiện dừng, nhưng không biết số lần lặp chính xác
// -    Luôn luôn bắt đầu từ 0
// -    Điều kiện được kiểm tra trước ngay từ đầu -> Có thể không chạy lần nào

// do {
//  Công việc cần lặp
//  Bước nhảy 
// } while (điều_kiện _dừng);
//  -   Sử dụng khi đã biết rõ điều kiện dừng, nhưng cũng không biết số lần lặp chính xác
//  -   Đảm bảo vòng lặp chạy ít nhất 1 lần, vì điều kiện được kiểm tra sau, kể cả khi điều kiện đó sai ngay từ đầu.

// Dùng for để hiển thị giá trị của các phần tử trong mảng sau:
$array = [1, 2, 3, 7, 9, 5.8, true, 'xyz'];
for ($i = 0; $i < count($array); $i++) {
    echo "Phần tử nằm ở vị trí $i có giá trị là: " . $array[$i] . "<br/>";
}
// var_dump(count($array));

//  ---------------------------------------------
//  CÂU ĐIỀU KIỆN
//  1.Loại 1: Có 1 trường hợp xảy ra
//  if (điều_kiện) {
//      Công việc
//  }

//  2.Loại 2: Có 2 trường hợp xảy ra
// if (điều_kiện) {
//     Công việc
// } else {
//     Công việc ngược lại
// }

//  3.Loại 3: Có nhiều trường hợp xảy ra
// if (điều_kiện_1) {
//     Công việc 
// } elseif (điều_kiện_2) {
//     Công việc 2
// }elseif (điều_kiện_3) {
//     Công việc 2
// }else {
//     Công việc còn lại 
// }

//  4.Loại 4: 
// switch (giá_trị) {
//     case 'Giá trị 1';
//      Công việc 1
//      break;

//     case 'Giá trị 2';
//      Công việc 2
//      break;

//     default:
//      Công việc còn lại
//      break;
// }


//  KHI NÀO DÙNG IF_ELSEIF_ELSE VÀ SWITCH CASE?
//  Nên dùng if-elseif-else khi:
//  - So sánh nhiều điều kiện phức tạp khác nhau (có sử dụng >,<, >=, <=, !=, ==, ===, !==, ||, &&,...)
//  - So sánh nhiều biến và kiểu dữ liệu khác nhau.

//  Nên dùng switch-case khi:
//  - So sánh, kiểm tra nhiều giá trị cụ thể một biến với nhiều giá trị khác nhau
//  - Không cần sử dụng toán tử so sánh, logic ,... như if-elseif-else
//  - Giá trị của biến là duy nhất và không thay đổi

//  ---------------------------------------------
//  LÀM VIỆC VỚI HÀM
//  Hàm là gì ?
//  Có bao nhiêu loại hàm ?

//  Hàm là 1 khối code dùng để thực hiện 1 nhiệm vụ nhất định nào đó và có tính tái sử dụng cao
//  Có 2 loại hàm chính là hàm trả về và hàm không trả về (trả về 1 giá trị nhất định nào đó (return) )
//  -   Hàm trả về
//  -   Hàm không trả về
//  -   Trong mỗi loại có 2 loại nhỏ là hàm có tham số và hàm không có tham số

// function tenHam() { Tham số được truyền vào trong ngoặc tròn nếu có
//      Công việc triển khai
// }

//  Tên hàm được viết theo quy tắc camelCase

//  Gọi hàm: tenHam();

//  Bài tập:

//  Bài 1:  Sử dụng hàm trả về có tham số để giải phương trình bậc hai

//  Bài 2:  Tạo 1 hàm để hiển thị giá trị của các phần tử trong mảng được truyền vào.

//  Bài 3:  Tạo 1 hàm để tính tổng các số chẵn trong một mảng được truyền vào

//  Giải bài tập:

//  Bài Lab 1:
$heso_a = "";
$heso_b = "";
$heso_c = "";

if (isset($_POST['heso_a'])) {
    $heso_a = $_POST['heso_a'];
}
if (isset($_POST['heso_b'])) {
    $heso_b = $_POST['heso_b'];
}
if (isset($_POST['heso_c'])) {
    $heso_c = $_POST['heso_c'];
}

function giaiPTB2($a, $b, $c)
{
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
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2;
    } elseif ($delta == 0) {
        $x1 = (-$b / (2 * $a));
        echo "Phương trình có nghiệm kép: x1 = x2 = " . $x1;
    } else {
        echo "Phương trình vô nghiệm !";
    }
}
// giaiPTB2(1, -49, -50);
// giaiPTB2(1, -4, 4);
// echo "<br/>";
// giaiPTB2(3, 2, 5);
// echo "<br/>";
// giaiPTB2(2, -7, 3);

?>
<form action="#" method="post">
    <table border="2">
        <tr>
            <td>Hệ số a</td>
            <td><input type="text" name="heso_a" value="<?php echo $heso_a; ?>" /></td>
        </tr>
        <tr>
            <td>Hệ số b</td>
            <td><input type="text" name="heso_b" value="<?php echo $heso_b; ?>" /></td>
        </tr>
        <tr>
            <td>Hệ số c</td>
            <td><input type="text" name="heso_c" value="<?php echo $heso_c; ?>" /></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Giải phương trình bậc 2" />
            </td>
        </tr>
    </table>
</form>


<?php
if (is_numeric($GLOBALS['heso_a']) && is_numeric($GLOBALS['heso_b']) && is_numeric($GLOBALS['heso_c'])) {
    giaiPTB2($GLOBALS['heso_a'], $GLOBALS['heso_b'], $GLOBALS['heso_c']);
} else {
    echo "Hệ số không hợp lệ";
}
?>