function logout(){
    $.ajax({
        url:"sessionDestroyer.php",
        type:"GET",
        cache: false,
        success: function (params) {
            alert(params);
        }
    })
}