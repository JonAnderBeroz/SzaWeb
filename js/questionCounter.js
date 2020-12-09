$('document').ready(function (params) {
    var interval = 2000;
    $.ajax({
        url:"./countQuestions.php",
        cache:false,
        type:"POST",
        success: function (params) {
            $('#1').html('Eginkizunak ' + params);
        }
    });
    setInterval(() => {
        $.ajax({
            url:"./countQuestions.php",
            cache:false,
            type:"POST",
            success: function (params) {
                $('#1').html('Eginkizunak ' + params);
            }
        })
    }, interval);

})