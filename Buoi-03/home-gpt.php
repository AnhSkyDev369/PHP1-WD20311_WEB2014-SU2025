<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: form-gpt.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ GPT</title>
</head>
<body>
    <h2>Xin chào, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
</body>
</html>