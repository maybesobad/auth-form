<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>auth and reg</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <form>
        <img src="<?= $_SESSION['user']['pic'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="inc/logout.php" class="logout">logout</a>
    </form>

</body>
</html>