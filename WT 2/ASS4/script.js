$(document).ready(function(){
    $("#printBtn").click(function(){
        $.ajax({
            url: "read_contacts.php",
            type: "GET",
            success: function(response){
                $("#contactsTable").html(response);
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });
});
