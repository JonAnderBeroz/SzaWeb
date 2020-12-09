<?php
session_start();
$counter = 0;
$tasks = simplexml_load_file('../xml/user.xml');
foreach($tasks->user as $user){
    if(strcmp($_SESSION['email'],$user->email) == 0){
        if($user->tasks->task){
            $i = 1;
            foreach($user->tasks->task as $task){
                if($task['important'] == 'yes'){
                    $counter+=1;
                }
            }
        }
        echo $counter;
    }
}
?>