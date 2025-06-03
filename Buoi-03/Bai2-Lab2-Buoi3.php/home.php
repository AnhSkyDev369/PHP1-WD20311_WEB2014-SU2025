<?php
if (!isset($_COOKIE['username'])) {
    header('Location: login.php');
    exit;
}
$username = $_COOKIE['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ Cookie</title>
</head>
<body>
    <h2>Xin chào, <?php echo htmlspecialchars($username); ?>!</h2>
    <form action="logout.php" method="post">
        <button type="submit">Đăng xuất</button>
    </form>
</body>
</html>