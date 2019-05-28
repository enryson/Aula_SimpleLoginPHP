<?php
include_once("config.php");

session_start();


if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['accountEmail'] ) && isset( $_POST['accountPassword'] ) ) {
        // Getting submitted user data from database
        $accountEmail = mysqli_real_escape_string($mysqli, $_POST['accountEmail']);
        $accountPassword = mysqli_real_escape_string($mysqli, $_POST['accountPassword']);

        $result = mysqli_query($mysqli,"SELECT * FROM account WHERE accountEmail='$accountEmail' AND accountPassword=(select password('$accountPassword'))");
        
        $user = mysqli_fetch_array($result);

        
        
    	
    	if (isset($user) ) {
            $_SESSION['accountId'] = $user['accountEmail'];
            print_r($user['accountEmail']) ;
            //print_r($_SESSION['accountId']) ;
            //header("Location: index.php");
        } 
        header("Location: /views/index.php");
    }
}
/*
if ( isset( $_SESSION['accountId'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
    echo 'Logado!';
} else {
    // Redirect them to the login page
    echo 'SAI JACARÉ!';
}*/
