<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h2>Xin chào, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <form action="logout.php">
        <button type="submit">
            Đăng xuất
        </button>
    </form>
</body>
</html>
