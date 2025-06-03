<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ôn tập làm việc với form</title>
</head>

<body>
  <form action="#" method="">
    <!--Form dùng để người dùng có thể tương tác (nhập, hiển thị) dữ liệu với server
        - Form có thể có nhiều loại input như: text, radio, checkbox, select, textarea
        - Form có thể có nhiều loại button như: submit, reset, button
        - Form có thể có nhiều loại thuộc tính như: action, method, enctype
        - Form có thể có nhiều loại sự kiện như: onsubmit, onreset, onclick, onblur, onfocus
        - Form có thể có nhiều loại kiểu dữ liệu như: text, number, email, date, time, file

        -   Form có 2 thuộc tính là action và method
        -   Action và method là 2 thuộc tính của thẻ form
            + action: là địa chỉ mà dữ liệu sẽ được gửi đến khi người dùng nhấn nút submit
            + method: là phương thức gửi dữ liệu đến server, có 2 phương thức là GET và POST
            + enctype: là kiểu mã hóa dữ liệu khi gửi đến server, có 2 kiểu mã hóa là 
              application/x-www-form-urlencoded và multipart/form-data

        -   action: xác định nơi dữ liệu trong form được gửi tới
            (Nếu bỏ trống thì dữ liệu sẽ tồn tại ở chính file hiện tại)
        -   method: xác định phương thức HTTP sử dụng (GET VÀ POST)

        -       GET: gửi dữ liệu qua URL, không an toàn, không giới hạn kích thước dữ liệu
        -       POST: gửi dữ liệu qua body của request, an toàn hơn, không giới hạn kích thước dữ liệu
        -       Cả GET và POST đều có thể gửi dữ liệu đến server, nhưng cách thức gửi khác nhau
        
        *** So sánh giữa GET VÀ POST:
        -   Đều có thể gửi dữ liệu lên server (nên sử dụng POST), còn GET thì dùng để tìm kiếm dữ liệu, truyền dữ liệu
        -   Khác nhau:
            +   GET: + Dữ liệu sẽ được gửi đi thông qua URL, dữ liệu sẽ hiển thị trực tiếp trên URL
                     + Độ bảo mật thấp nên thường sử dụng ở các tác vụ nhỏ, ví dụ như (Tìm kiếm, truyền dữ liệu giữa các trang,...)       
                     + Tốc độ xử lý nhanh
                    
                    + Dữ liệu sẽ được mã hóa thành chuỗi query string
                    + Dữ liệu sẽ được gửi đi thông qua phương thức GET
                    + Dữ liệu sẽ được lưu vào cache
                    + Dữ liệu sẽ được lưu vào history
                    + Dữ liệu sẽ được lưu vào bookmark
                    + Dữ liệu sẽ bị giới hạn kích thước (khoảng 2000 ký tự)
                    + Không an toàn, không bảo mật
                        + Không thể gửi dữ liệu nhạy cảm như mật khẩu, thông tin cá nhân
                        + Không thể gửi dữ liệu lớn như file, hình ảnh
                        + Không thể gửi dữ liệu nhị phân như file, hình ảnh
                        + Không thể gửi dữ liệu phức tạp như mảng, đối tượng
                        + Không thể gửi dữ liệu nhạy cảm như mật khẩu, thông tin cá nhân
                        + Không thể gửi dữ liệu lớn như file, hình ảnh
                        + Không thể gửi dữ liệu nhị phân như file, hình ảnh
                        + Không thể gửi dữ liệu phức tạp như mảng, đối tượng

            +   POST: + Dữ liệu sẽ được gửi ngầm về phía server, người dùng sẽ không nhìn thấy dữ liệu.
                      + Độ bảo mật cao hơn GET nên được dùng trong các tác vụ gửi dữ liệu quan trọng.
        -->
    <input type="text" id="" name="" value="" placeholder="">
    <!-- 
        - type: xác đinh kiểu dữ liệu mà người dùng sẽ nhập vào ô input
        - id: xác định id của ô input, trong 1 form, id là duy nhất
        - name: xác định tên của trường dữ liệu gửi lên server, tên này sẽ được gửi đến server khi người dùng nhấn nút submit, 
          name chính là key để lưu trữ dữ liệu trong $_POST hoặc $_GET.
        - value: xác định giá trị của ô input, giá trị này sẽ được gửi đến server khi người dùng nhấn nút submit
        - placeholder: xác định giá trị mặc định của ô input, giá trị này sẽ hiển thị khi ô input chưa có giá trị
        - checked: xác định ô input đã được chọn hay chưa, chỉ sử dụng cho các ô input có type là radio hoặc checkbox
        - required: xác định ô input là bắt buộc, không thể để trống
        - maxlength: xác định độ dài tối đa của ô input, không thể nhập quá số ký tự này
        - minlength: xác định độ dài tối thiểu của ô input, không thể nhập ít hơn số ký tự này
        - pattern: xác định mẫu dữ liệu mà ô input phải khớp với mẫu này, nếu không khớp thì không thể gửi dữ liệu lên server
        - size: xác định kích thước của ô input, kích thước này sẽ được tính bằng số ký tự
        - title: xác định tiêu đề của ô input, tiêu đề này sẽ hiển thị khi người dùng di chuột vào ô input
        - accept: xác định kiểu dữ liệu mà ô input chấp nhận, chỉ sử dụng cho các ô input có type là file
        - multiple: xác định ô input có thể chọn nhiều giá trị hay không, chỉ sử dụng cho các ô input có type là file
        - autocomplete: xác định ô input có tự động hoàn thành hay không, chỉ sử dụng cho các ô input có type là text
        - autofocus: xác định ô input sẽ được tự động chọn khi trang web được tải
        
        - readonly: xác định ô input chỉ đọc, không thể chỉnh sửa
        - disabled: xác định ô input không thể chỉnh sửa, không thể gửi dữ liệu lên server
        -->

    <button type="submit">Submit</button>
    <!--  
        -   button: xác định nút bấm, có thể sử dụng để gửi dữ liệu lên server hoặc thực hiện một hành động nào đó
        -   type: xác định kiểu của nút bấm, có 3 kiểu là submit, reset và button
        -   submit: gửi dữ liệu lên server
        -   reset: làm mới form, xóa tất cả dữ liệu trong form
        -   button: thực hiện một hành động nào đó, không gửi dữ liệu lên server
        -   name: xác định tên của nút bấm, tên này sẽ được gửi đến server khi người dùng nhấn nút submit
        -   value: xác định giá trị của nút bấm, giá trị này sẽ được gửi đến server khi người dùng nhấn nút submit
     -->
  </form>
  <!--  
        -   SESSION và COOKIE là vùng lưu trữ dữ liệu tạm thời trên server và trình duyệt của người dùng.
        -   SESSION:là một biến toàn cục, được lưu trữ trên trình duyệt của người dùng, có thể sử dụng để lưu trữ dữ liệu trong suốt quá trình người dùng truy cập vào trang web
        -   COOKIE: là một biến toàn cục, được lưu trữ trên server, có thể sử dụng để lưu trữ dữ liệu trong suốt quá trình người dùng truy cập vào trang web
        
        -   Sự khác nhau:
          + SESSION: 
            - Tồn tại trong suốt 1 phiên làm việc của người dùng
            - Dữ liệu sẽ được lưu trữ tạm thời trên trình duyệt, máy tính người dùng
          + COOKIE:
            - Tồn tại trong 1 khoảng thời gian xác định trước
            - Dữ liệu sẽ được lưu trữ tạm thời trên server
    -->
</body>

</html>
<?php
session_start(); // Bắt đầu phiên làm việc
// Muốn sử dụng SESSION thì phải có hàm session_start() ở đầu file

// Cách sử dụng SESSION
// $_SESSION['ten_bien'] = 'gia_tri_cua_bien';

// Khai báo biến $name
$name = "Nguyễn Thế Anh";

// Gán giá trị vào vùng session
$_SESSION['ho_ten'] = $name;

//  Sử dụng var_dump để kiểm tra giá trị của biến
var_dump($_SESSION['ho_ten']);


// Cách sử dụng COOKIE
// setcookie('ten_bien', 'gia_tri_cua_bien', time() + 3600, '/',...);

// Khai báo biến $name1
$name1 = "Nguyễn Thế Anh";

// Gán giá trị vào vùng cookie
$_COOKIE['ho_ten'] = $name1;

//  Thời gian tồn tại của COOKIE là 1 phút
setcookie('ho_ten', $name1, time() + 1);

//  Sử dụng var_dump để kiểm tra giá trị của biến
var_dump($_COOKIE['ho_ten']);

//  LAB2:
//  -   Thiết kế giao diện 1 form đăng nhập, thực hiện kiểm tra thông tin
//  -   username phải đúng định dạng email, email = 'user@gmail.com'
//  -   password = user@gmail.com
//  -   Khi nhập sai thông tin thì hiển thị lỗi dưới ô input
//  -   Nếu đăng nhập thành công chuyển vào trang chủ và hiển thị 'Xin chào, username'

//  Bài 1: 
//  -   Thực hiện đăng nhập bằng SESSION
//  -   Trong giao diện trang chủ có nút đăng xuất
//  -   Nếu ấn nút đăng xuất thì xoá thông tin người dùng trong SESSION
//  -   Kiểm tra nếu không có thông tin người dùng thì không được truy cập vào trang chủ và tự động quay về trang đăng nhập

//  Bài 2:
//  -   Thực hiện đăng nhập bằng COOKIE
//  -   Set thời gian tồn tại của COOKIE là 1 phút
//  -   Sau 1 phút, khi reload lại trang chủ, nếu COOKIE hết hạn thì tự động quay về trang đăng nhập
