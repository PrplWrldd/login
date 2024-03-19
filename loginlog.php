<?php
    session_start();
    
    include 'login_db.php';

    if(isset($_POST['name']) && isset($_POST['psw'])) {

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data; 
        }

        $name = validate($_POST['name']);
        $psw = validate($_POST['psw']);

        $sql = "SELECT * FROM logintest WHERE name='$name' AND psw='$psw'";
        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['name'] === $name && $row['psw'] === $psw){
                $_SESSION['name'] = $row['name'];
                echo "Login successful";
                exit();
            }
        }
        else{
            header("Location:login.php?error=Incorrect Username or Password");
            exit();
        }
    }
?>