<?php
      if (!isset($_SESSION['isAuthenticated'])) {
        header('Location: ../../login.php');
        exit();
    }

    if (isset($_POST['add_recipe'])) {
        $recipe_name = $conn->real_escape_string($_POST['recipe_name']);
        $recipe_description = $conn->real_escape_string($_POST['recipe_description']);
        $recipe_instructions = $conn->real_escape_string($_POST['recipe_instructions']);
        $recipe_ingredients = $conn->real_escape_string($_POST['recipe_ingredients']);
        $recipe_time = $conn->real_escape_string($_POST['recipe_time']);
        $recipe_image = $conn->real_escape_string($_POST['recipe_image']);
        
        
        $result_create = $conn->query("INSERT INTO users (recipe_name, recipe_description, recipe_instructions, recipe_ingredients, recipe_time ,recipe_image)
            VALUES ('$recipe_name', '$recipe_description', '$recipe_instructions', '$recipe_ingredients', '$recipe_time' ,'$recipe_image')");
        exit("success");
        // // Decode the base64-encoded image data
        // $recipe_image = str_replace('data:image/jpeg;base64,', '', $recipe_image);
        // $recipe_image = str_replace(' ', '+', $recipe_image);
        // $recipe_image = base64_decode($recipe_image);
    }


?>