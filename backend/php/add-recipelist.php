<?php 
     if (!isset($_SESSION['isAuthenticated'])) {
        header('Location: ../../login.php');
        exit();
    }
?>