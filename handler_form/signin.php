<?php
session_start();
require_once '../connect.php';

    $email = $_POST['email'];

    $password = md5($_POST['password']);
    //ищем в БД запись с введенными логином и паролем
    $check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    //mysqli_num_rows() - возвращает число рядов в результирующей выборке
    if (mysqli_num_rows($check_user) > 0) {
    //mysqli_fetch_assoc - Обрабатывает ряд результата запроса и возвращает ассоциативный массив
        $user = mysqli_fetch_assoc($check_user);
    //при успешной авторизации запоминается данные об этом пользователи в сессию 'user'
        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            //"avatar" => $user['avatar'],
            "email" => $user['email'],
           // "role" => $user['role']
        ];
/*if ($user['role'] == 2) {
    header('Location: ../index.php?page=admin');
}else{*/
        header('Location: ../index.php?page=profile');
/*}*/
    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php?page=login');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
