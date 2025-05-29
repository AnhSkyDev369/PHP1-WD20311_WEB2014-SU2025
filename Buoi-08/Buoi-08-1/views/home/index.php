<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình PHP 1</title>
</head>
<body>
    <?php
        require_once './views/layouts/header.php';
        require_once './views/layouts/aside.php';
        require_once './views/layouts/main.php';
    ?>

    <h1><?php echo $title ?></h1>

    <?php
        require_once './views/layouts/footer.php';
    ?>
</body>
</html>
