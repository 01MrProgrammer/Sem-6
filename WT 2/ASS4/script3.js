$(document).ready(function(){
    // Populate select box with teachers' names
    $.ajax({
        url: "get_teachers.php",
        type: "GET",
        success: function(response){
            $("#teacherSelect").html(response);
        },
        error: function(xhr, status, error){
            console.error(xhr.responseText);
        }
    });

    // Get details button click event
    $("#getDetailsBtn").click(function(){
        var selectedTeacher = $("#teacherSelect").val();
        if(selectedTeacher !== ""){
            $.ajax({
                url: "get_teacher_details.php",
                type: "POST",
                data: {selectedTeacher: selectedTeacher},
                success: function(response){
                    $("#teacherDetails").html(response);
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
        } else {
            $("#teacherDetails").html("Please select a teacher first.");
        }
    });
});
