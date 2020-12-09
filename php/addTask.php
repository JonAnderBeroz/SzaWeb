<?php
    echo 'in';
    if(isset($_POST['task']) && isset($_POST['email'])){
        echo 'in';
        $tasks = simplexml_load_file('../xml/user.xml');
        foreach($tasks->user as $user){
            if(strcmp($_POST['email'],$user->email) == 0){
                echo 'in';
                if($user->tasks){
                    $newTask = $user->tasks->addChild('task');
                    $newTask-> addChild('text', $_POST['task']);
                    $newTask->addAttribute('completed', 'no');
                    $newTask->addAttribute('important', 'no');
                    echo'ok';
                }else{
                  echo "else";
                  $newTasks = $user->addChild('tasks');
                  $newTask =$newTasks->addChild('task');
                  $newTask-> addChild('text', $_POST['task']);
                  $newTask->addAttribute('completed', 'no');
                  $newTask->addAttribute('important', 'no');
                  echo'ok';
                }
                $tasks->asXML('../xml/user.xml');
            }      
        }
    }
?>