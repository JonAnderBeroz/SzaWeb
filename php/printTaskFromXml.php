<?php
$tasks = simplexml_load_file('../xml/tasks.xml');
echo "
<table id=\"tasks\">
<thead>
<tr>
<th>Eginkizkuna</th>
<th>Bukatuta</th>
<th>Garrantzitsua</th>
<th>Ezabatu</th>
</tr>
</thead>
<tbody>
";
$totalTasks=0;
foreach($tasks->xpath("//task") as $task){
        echo "<tr>";
        echo "<td>" . $task->text. "</td>";
        echo "<td>
        <button onclick=\"setCompleted(this)\">
        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-square\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
    <path fill-rule=\"evenodd\" d=\"M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/>
    </svg>
    </button>
        </td>";
        echo " <td>
        <button onclick=\"setImportant(this)\">
        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-star\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
    <path fill-rule=\"evenodd\" d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/>
    </svg>
    </button>
    </td>
        ";
        echo " <td> <button onclick=\"deleteTask(this)\">
        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-trash-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">
    <path fill-rule=\"evenodd\" d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z\"/>
    </svg>
    </button>
    </td>";
        echo"</tr>";
}
echo"
</tbody>
</table>
";
?>