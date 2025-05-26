### Cấu trúc thư mục dự án MVC áp dụng OOP

```php
index.php: 
    -   Là file chạy chính của hệ thống
        (Chứa các đường dẫn để điều hướng người dùng)

env.php:
    -   Là file chứa các biến cấu hình chung của hệ thống

helpers.php: 
    -   Là file chứa những hàm dùng chung trong hệ thống
```

-   app:  Là thư mục chứa toàn bộ source code của hệ thống (Thư mục chính, quan trọng nhất)
    +   Model.php: Là file kết nối với CSDL
    +   Controller.php: Là file có các hàm dùng chung trong controller
    +   Thư mục Models: Là thư mục chứa các file để viết SQL
    +   Thư mục Controllers: Là thư mục chứa các file xử lý logic

-   storage:     Là thư mục chứa tài nguyên của hệ thống
    +   logs:    Là thư mục chứa các lỗi sinh ra
    +   uploads: Là thư mục chứa các file được người dùng gửi lên

-   views:  Là thư mục chứa code giao diện
    +   layouts:    Là thư mục chứa các file giao diện dùng chung (header, footer, sidebar)
    +   home/index.php: Là giao diện trang chủ của hệ thống (dashboard)
    +   Các thư mục view khác (Mỗi categories, products, users), mỗi 1 cái sẽ tạo ra 1 thư mục