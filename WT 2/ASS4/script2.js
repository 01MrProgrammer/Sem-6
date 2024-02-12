$(document).ready(function(){
    $("#usernameInput").keyup(function(){
        var username = $(this).val();
        if(username === ''){
            $("#response").text("Stranger, please tell me your name!");
        } else {
            $.ajax({
                url: "check_username.php",
                type: "POST",
                data: {username: username},
                success: function(response){
                    $("#response").text(response);
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
        }
    });
});
