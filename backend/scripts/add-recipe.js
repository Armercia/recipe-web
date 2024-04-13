$(document).ready(function() {
    $(".add-recipe-btn").click(function(){
        var recipe_name = $("#recipe_name").val();
        var recipe_description = $("#recipe_description").val()
        var recipe_instructions = $("#recipe_instructions").val()
        var recipe_ingredients = $("#recipe_ingredients").val()
        var recipe_time = $("#recipe_time").val()
        var recipe_image = $("recipe-image")
        var file = recipe_image.files[0];
        

        if (recipe_name === "" || recipe_description === "" || recipe_instructions === "" || recipe_ingredients === "" ) {
            alert ("Tell us more about your recipe")
        } else {
            var reader = new FileReader();

        reader.onload = function (event) {
            var imageData = event.target.result;
            $.ajax({
                url: "./backend/php/add-recipe.php",
                method: "POST",
                data: {
                    recipe_name: recipe_name,
                    recipe_description: recipe_description,
                    recipe_instructions: recipe_instructions,
                    recipe_ingredients: recipe_ingredients,
                    recipe_time: recipe_time,
                    recipe_image: imageData,
                    add_recipe: 1
                }, 
                success: function(response) {
                    if (response == "success") {
                        alert ("Added Recipe successfully");
                    } else {
                        alert(response);
                    }
                }
            })
        }}

        reader.readAsDataURL(file);
    })

})