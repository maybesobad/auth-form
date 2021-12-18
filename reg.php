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

    <form action="inc/signup.php" method="post" enctype="multipart/form-data">
        <label>name</label>
        <input type="text" name="full_name" placeholder="enter name">
        <label>login</label>
        <input type="text" name="login" placeholder="enter login">
        <label>email</label>
        <input type="email" name="email" placeholder="enter email">
        <label>profile pic</label>
        <input type="file" name="pic">
        <label>password</label>
        <input type="password" name="password" placeholder="enter password">
        <label>re-enter password</label>
        <input type="password" name="password_confirm" placeholder="re-enter password">
        <button type="submit">auth</button>
        <p>
            already have an acc? - <a href="index.php">login now</a>!
        </p>
        <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message'])
        ?>
        </p>
    </form>

</body>
</html>