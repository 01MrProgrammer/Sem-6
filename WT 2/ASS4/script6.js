$(document).ready(function(){
    // Populate select box with book titles
    $.ajax({
        url: "get_books.php",
        type: "GET",
        dataType: "xml",
        success: function(response){
            $(response).find("book").each(function(){
                var title = $(this).find("title").text();
                $("#bookSelect").append("<option value='" + title + "'>" + title + "</option>");
            });
        },
        error: function(xhr, status, error){
            console.error(xhr.responseText);
        }
    });

    // Get book details on select change
    $("#bookSelect").change(function(){
        var selectedBook = $(this).val();
        if(selectedBook !== ""){
            $.ajax({
                url: "get_book_details.php",
                type: "POST",
                data: {selectedBook: selectedBook},
                success: function(response){
                    $("#bookDetails").html(response);
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
        } else {
            $("#bookDetails").html("Please select a book first.");
        }
    });
});
