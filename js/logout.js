function logout(){
    $.ajax({
        url:"../php/sessionDestroyer.php",
        type:"POST",
        cache: false,
        success: function (params) {
            alert(params);
        }
    })
}