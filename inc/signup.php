<?php

    session_start();
    require_once 'conn.php';
    

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['pic']['name'];
        if (!move_uploaded_file($_FILES['pic']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'pic error';
            header('Location: ../reg.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `pic`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'wow, successful registration!';
        header('Location: ../index.php');

    } else {
        $_SESSION['message'] = 'password error';
        header('Location: ../reg.php');
    }
?>