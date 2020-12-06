function setCompleted(params){
    console.log("Task completed");
    var col = params.parentNode;
    var row = col.parentNode;
    var task = $(row).children()[0];
    if(task.className == "completed"){
        $(task).removeClass("completed");
        params.innerHTML = "<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-square\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z\"/></svg>";
    }else{
        $(task).addClass("completed");
        params.innerHTML ="<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-check-square-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\"/></svg>";
    } 
    AjaxCallToXML(1);
}

function setImportant(params){
    console.log("Task is important");
    var col = params.parentNode;
    if(col.className == "important"){
        $(col).removeClass("important");
        params.innerHTML = "<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-star\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/></svg>";
    }else{
        $(col).addClass("important");
        params.innerHTML ="<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-star-fill\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z\"/></svg>";
    }
    AjaxCallToXML(2);
}

function deleteTask(params){
    console.log("Task deleted");
    var col = params.parentNode;
    var row = col.parentNode;
    var index = row.rowIndex-1;
    var body = $("tbody")[0];
    body.removeChild(body.childNodes[index]);
    AjaxCallToXML(3);
}

function AjaxCallToXML(params){
    switch (params) {
        case 1:
            var url = "../php/completeTask.php";
            break;
        case 2:
            var url = "../php/updateImportantInTask.php";
            break;
        case 3:
            var url = "../php/deleteTask.php";
            break;
    
        default:
            break;
    }

}