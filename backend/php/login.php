<?php
    require("../../server.php");
    if (isset($_SESSION['isAuthenticated'])) {
        header('Location: ../../index.php');
        exit();
    }

    if (isset($_POST['login'])) {
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        $result = $conn->query("SELECT password from users WHERE email='$email'");
        $hashed_password = $result->fetch_assoc()['password'];
        if($result->num_rows > 0) {
            if(password_verify($password, $hashed_password)) {
                $_SESSION['isAuthenticated'] = true;
                $_SESSION['email']= $email;
                $username = $result->fetch_assoc()['username'];
                $fullname = $result->fetch_assoc()['fullname'];
                $_SESSION['fullname']= $fullname;
                $_SESSION['username']= $username;
                exit ('success');

            } else {
                exit ('Failed to verify password');
            }
        } else {
            exit ('User Does not exist');
        };
    }
?>