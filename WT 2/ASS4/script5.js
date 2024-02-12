$(document).ready(function(){
    $("#searchInput").keyup(function(){
        var userInput = $(this).val();
        if(userInput !== ''){
            $.ajax({
                url: "get_suggestions.php",
                type: "POST",
                data: {userInput: userInput},
                success: function(response){
                    $("#suggestions").html(response);
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
        } else {
            $("#suggestions").html("");
        }
    });
});
