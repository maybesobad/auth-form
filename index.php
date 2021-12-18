<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>auth and reg</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <form action="inc/signin.php" method="post" enctype="multipart/form-data">
        <label>login</label>
        <input type="text" name="login" placeholder="enter login">
        <label>password</label>
        <input type="password" name="password" placeholder="enter password">
        <button type="submit">auth</button>
        <p>
            no acc? - <a href="reg.php">reg now</a>!
        </p>
        <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html> 