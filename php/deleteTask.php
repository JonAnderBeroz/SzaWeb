<?php
    if(isset($_POST['number']) && isset($_POST['email'])){
        $tasks = simplexml_load_file('../xml/user.xml');
        foreach($tasks->user as $user){
            if(strcmp($_POST['email'],$user->email) == 0){
                if($user->tasks->task){
                    $i = 1;
                    foreach($user->tasks->task as $task){
                        if($i == $_POST['number']){
                            echo $tasks->user->tasks[$i];
                            unset($tasks->user->tasks[$i]);
                            echo 'del';
                        }
                        $i+=1;
                    }
                }
            }
        }
    }
?>