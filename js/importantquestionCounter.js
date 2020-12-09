$('document').ready(function (params) {
    var interval = 2000;
    $.ajax({
        url:"./importantquestionCounter.php",
        cache:false,
        type:"POST",
        success: function (params) {
            $('#2').html('Garrantzitsuak ' + params);
        }
    });
    setInterval(() => {
        $.ajax({
            url:"./importantquestionCounter.php",
            cache:false,
            type:"POST",
            success: function (params) {
                $('#2').html('Garrantzitsuak ' + params);
            }
        })
    }, interval);

})