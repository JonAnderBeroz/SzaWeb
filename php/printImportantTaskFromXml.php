<?php
$tasks = simplexml_load_file('../xml/user.xml');
echo "
<table id=\"tasks\">
<thead>
<tr>
<th>Eginkizkuna</th>
<th>Bukatuta</th>
<th>Ezabatu</th>
</tr>
</thead>
<tbody>
";
$userTask = "";
foreach($tasks->user as $user){
    if(strcmp($_SESSION['email'],$user->email) == 0){
        if($user->tasks->task){
            $i = 1;
            foreach($user->tasks->task as $task){
                if(strcmp($task['important'], "yes") == 0){
                    if (strcmp($task['completed'], "no") == 0) {
                        echo "<tr id=". $i .">";
                        echo "<td>" . $task->text. "</td>";
                        echo "<td>
                        <button onclick=\"setCompleted(this)\">
                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-square\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>
                        </svg>
                        </button>
                        </td>";
                    }else{
                        echo "<tr id=". $i .">";
                        echo "<td class = \"completed\">" . $task->text. "</td>";
                        echo "<td>
                        <button onclick=\"setCompleted(this)\">
                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-check-square-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" d=\"M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/>
                        </svg>
                        </button>
                        </td>";
                    }
                    echo " <td> <button onclick=\"deleteTask(this)\">
                    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-trash-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path fill-rule=\"evenodd\" d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z\"/>
                    </svg>
                    </button>
                    </td>
                    </tr>";
                    $i+=1;
                }

            }
        }
    }
}
echo"
</tbody>
</table>
";
?>