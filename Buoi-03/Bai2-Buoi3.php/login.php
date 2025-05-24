<?php

$username = $password = $username_error = $password_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $username_error = 'Email không hợp lệ hoặc đuôi không có gmail';
    }

    $expectedPassword = explode('@', $username)[0] . '@gmail.com';

    if (empty($password)) {
        $password_error = 'Vui lòng nhập mật khẩu';
    } elseif ($password !== $expectedPassword) {
        $password_error = 'Mật khẩu không đúng';
    }

    if (empty($username_error) && empty($password_error) ) {
        setcookie('username', $username, time() + 60, '/');
        header('Location: home.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập với Cookie</title>
</head>
<body>
    <h2>Đăng Nhập Lab 2</h2>
    <form action="" method="post">
        <input type="email" name="username" placeholder="Nhập vào email" value="<?php echo htmlspecialchars($username); ?>">
        <?php if(!empty($username_error)): ?>
            <div style="color: red;"><?php echo $username_error; ?></div>
        <?php endif; ?>
        <br>
        <input type="password" name="password" placeholder="Nhập vào password" value="<?php echo htmlspecialchars($password); ?>">
        <?php if(!empty($password_error)): ?>
            <div style="color: red;"><?php echo $password_error; ?></div>
        <?php endif; ?>
        <br><br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>