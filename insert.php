<?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "test");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
         $email = $_REQUEST['email'];
   	$comment = $_REQUEST['comment'];
	 $subject= $_REQUEST['subject'];


        
        // Performing insert query execution
        // here our table name is form
        $sql = "INSERT INTO form  VALUES ('$first_name', 
            '$email','$comment','$subject')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

           // echo nl2br("\n$first_name\n $email\n "
          //      . "$comment\n $subject");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>