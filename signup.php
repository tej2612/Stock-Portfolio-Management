<?php
    include("connection.php");
    if(isset($_POST["signup"])){
        $email = $_POST['email2'];
        $password = $_POST['password2'];
        $name = $_POST['name2'];
        $pan = $_POST['pan2'];
        $dob=$_POST['dob']; 
<<<<<<< HEAD
        $yearDigits = substr($dob, 2, 2);
        $userID = $pan.$yearDigits;
        // ECHO($userID);
        $sql = "INSERT INTO user_details (user_id,name,email,password,pan,dob) VALUES ('$userID','$name', '$email', '$password', '$pan', '$dob')";
=======
        // $yearDigits = substr($dob, 2, 2);
        // $userID = $pan.$yearDigits;
        // ECHO($userID);
        $sql = "INSERT INTO user_details (name,email,password,pan,dob) VALUES ('$name', '$email', '$password', '$pan', '$dob')";
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
        if (mysqli_query($conn, $sql)) {
            echo "User registered successfully!";
            header("Location: index.php"); // Redirect to the index page
            exit();
        } 
        else {
        echo "Error: " . mysqli_error($conn);
        }    
    }
?>