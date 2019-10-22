<?php


         if(isset($_POST["submit"])){
            $name=$_POST["name"];
            $email=$_POST["email"];
            $age=$_POST["age"];
            $pass=$_POST["pass"];
            $phone=$_POST["phone"];
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

            $sql = "UPDATE usersnew SET name='".$name."', phonenumber='".$phone."', password='".$pass."' , age ='".$age."' WHERE email='".$email."'";

            if (mysqli_query($conn, $sql)) {//returns true or false
               echo "record Updated successfully";
             
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
        