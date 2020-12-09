<?php
    session_start();
    session_unset();
    session_destroy();
    include'../php/userValidation.php';
?>