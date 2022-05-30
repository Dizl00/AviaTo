<?php
session_start();
require_once('connect.php');
    $id = $_SESSION['id_del'];
    mysqli_query($link, "DELETE FROM `tickets` WHERE `tickets`.`id` = '$id'");

header('Location: index.php?page=profile');
 ?>