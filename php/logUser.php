<?php
    $emailUser = $_POST['loginEmail'];
    $pass = $_POST['loginPassword'];
    $pasahash = hash('sha256', $pass);
    $users = simplexml_load_file('../xml/user.xml');
    $valid = false;
    if ($users) {
        foreach($users->user as $user){
            if(strcmp($user->email,$emailUser) == 0 && strcmp($user->pass,$pasahash) == 0){
                $valid = true;
                break;
            }
        }
        if($valid){
            include'../php/sessionStarter.php';
            $_SESSION['email'] = $emailUser;
            header('location:Tasks.php');
        }
    }
?>