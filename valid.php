<?php
    	$conn = mysqli_connect('localhost', 'root', '' , 'test');

        // Check Connection
        if(mysqli_connect_errno()){
            // Connection Failed
            echo 'Failed to connect to MySQL '. mysqli_connect_errno();
        }

        if(isset($_POST['submit'])){
            // Get form data
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $mobileno = mysqli_real_escape_string($conn, $_POST['MobileNumber']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
    
            $query = "INSERT INTO users(username, mobileno,email) VALUES('$username', '$mobileno', '$email')";
    
            if(mysqli_query($conn, $query)){
                header('Location: '.'http://localhost/validation/index.html'.'');
            } else {
                echo 'ERROR: '. mysqli_error($conn);
            }
        }
?>