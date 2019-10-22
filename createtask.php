<?php

         session_start();
         $_SESSION["user"]=1;
         if(isset($_POST["submit"])){
            $name=$_POST["name"];
            $age=$_POST["age"];
            $pass=$_POST["pass"];
            $phonenumber=$_POST["phonenumber"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "form task";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "INSERT INTO users(name,password,age,phone number )VALUES ('$name','$pass','$age','$phonenumber')";

            if (mysqli_query($conn, $sql)) {//returns true or false
               echo "New record created successfully";
               header("Location:Sessiontask.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
    