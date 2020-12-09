<?php
    if(isset($_POST['number']) && isset($_POST['email'])){
        $tasks = simplexml_load_file('../xml/user.xml');
        foreach($tasks->user as $user){
            if(strcmp($_POST['email'],$user->email) == 0){
                if($user->tasks->task){
                    $i = 1;
                    foreach($user->tasks->task as $task){
                        if($i == $_POST['number']){
                                if(strcmp($task['completed'],'yes') == 0){
                                    $task['completed'] = 'no';
                                    $tasks->asXML('../xml/user.xml');
                                    echo 'ok';
                                    break;
                                }else{
                                    $task['completed'] = 'yes';
                                    $tasks->asXML('../xml/user.xml');
                                    echo 'ok';
                                    break;
                                }
                        }
                        $i+=1;
                    }
                }
            }
        }
    }
?>