<?php 
session_start();

       unset($_SESSION['add_tickets'][$id_del]);   
       header("Location: index.php?page=yourcart");
                
?> 