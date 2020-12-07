<?php
    $emailUser = $_POST['emailAddress'];
    $name = $_POST['firstName'];
    $surname = $_POST['lastName'];
    $pass = $_POST['password'];
    $pasahash = hash('sha256', $pass);
    $users = simplexml_load_file('../xml/user.xml');
    $valid = true;
    if ($users) {
        foreach($users->user->email as $email){
            if(strcmp($email,$emailUser) == 0){
                $valid = false;
                break;
            }
        }
        if($valid){
           $user = $users->addChild('user');
           $user->addChild('email', $emailUser);
           $user->addChild('name', $name);
           $user->addChild('surname', $surname);
           $user->addChild('pass', $pasahash);
           $users->asXML('../xml/user.xml');
           include'../php/sessionStarter.php';
           $_SESSION['email'] = $emailUser;
           header('location:Tasks.php');
        }
    }
?>