<?php
    if (!isset($_SESSION['email'])) {
        header('location:../php/loginRegister.php');
    }
?>