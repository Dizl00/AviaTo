<?php
session_start();
    require_once 'connect.php';

    $login = $_SESSION['user']['login'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $birthday = $_POST['birthday'];
    $citizenship = $_POST['citizenship'];
    $country = $_POST['country'];

    $_SESSION['user']['full_name'] = $full_name;
    $_SESSION['user']['email'] = $email;
    $_SESSION['user']['Phone'] = $number;
    $_SESSION['user']['Birthday'] = $birthday;
    $_SESSION['user']['Citizenship_pass'] = $citizenship;
    $_SESSION['user']['Country_pass'] = $country;

    $edit = mysqli_query($link, "UPDATE `users` SET `full_name` = '$full_name', `email` = '$email', `Phone` = '$number', `Birthday` = '$birthday', `Citizenship_pass` = '$citizenship', `Country_pass` = '$country' WHERE `users`.`login` = '$login'");
      
    header('Location: index.php?page=profile');
?>