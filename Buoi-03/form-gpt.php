<?php
$username = $password = $username_error = $password_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Kiểm tra định dạng email và phải có đuôi @gmail.com
    if (!filter_var($username, FILTER_VALIDATE_EMAIL) || !str_ends_with($username, '@gmail.com')) {
        $username_error = 'Email không hợp lệ hoặc không có đuôi @gmail.com';
    }

    // Kiểm tra password phải giống username
    if (empty($password)) {
        $password_error = 'Vui lòng nhập mật khẩu';
    } elseif ($password !== $username) {
        $password_error = 'Mật khẩu phải giống email';
    }

    // Nếu không có lỗi thì cho đăng nhập
    if (empty($username_error) && empty($password_error)) {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: home-gpt.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form đăng nhập</title>
</head>
<body>
    <h2>Trang đăng nhập</h2>
    <form method="post">
        <input type="email" name="username" value="<?php echo htmlspecialchars($username) ?>" placeholder="Nhập email">
        <?php if (!empty($username_error)): ?>
            <div style="background-color: red; color: white;"><?php echo $username_error ?></div>
        <?php endif; ?>
        <br>
        <input type="password" name="password" value="<?php echo htmlspecialchars($password) ?>" placeholder="Nhập mật khẩu">
        <?php if (!empty($password_error)): ?>
            <div style="background-color: red; color: white;"><?php echo $password_error ?></div>
        <?php endif; ?>
        <br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
