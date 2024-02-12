$(document).ready(function(){
    // Populate select box with customers' names
    $.ajax({
        url: "get_customers.php",
        type: "GET",
        success: function(response){
            $("#customerSelect").html(response);
        },
        error: function(xhr, status, error){
            console.error(xhr.responseText);
        }
    });

    // Get order details on select change
    $("#customerSelect").change(function(){
        var selectedCustomer = $(this).val();
        if(selectedCustomer !== ""){
            $.ajax({
                url: "get_order_details.php",
                type: "POST",
                data: {selectedCustomer: selectedCustomer},
                success: function(response){
                    $("#orderDetails").html(response);
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
        } else {
            $("#orderDetails").html("Please select a customer first.");
        }
    });
});
