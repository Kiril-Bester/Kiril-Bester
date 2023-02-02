<?php
        $conn = mysqli_connect("localhost", "root", "", "kimiko entertainment");
         
        if($conn === false){
            die("ERROR: Could not connect! "
                . mysqli_connect_error());
        }
        
        $user_name =  $_REQUEST['Username'];
        $psswrd =  $_REQUEST['Password'];

        $sql = "INSERT INTO college  VALUES ('$user_name','$psswrd')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
 
            echo nl2br("\n$user_name\n$psswrd");
        } else{
            echo "ERROR: There is an Error! Sorry, try connecting again $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
 ?>
