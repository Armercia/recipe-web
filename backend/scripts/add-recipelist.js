$(document).ready(function() {
    $("#add-recipelist-btn").click(function(){
        var list_name = $("#list_name").val();
        $.ajax({
            url: "./backend/php/add-recipelist.php",
            method: "POST",
            data: {
                list_name: list_name
            },
            success: function(response) {
                if (response == "success") {
                    alert ("Created Collection Successfully");
                } else {
                    alert (response)
                }
            }
        })
    })})