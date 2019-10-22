<?php
$id = $_GET["email"];
$con = mysqli_connect("localhost", "root", "", "mydb");//connect to the database

// Create a query for the database
$query = 'SELECT * FROM users WHERE email  = "'.$email.'" ';
$res=mysqli_query($con, $query);
// If the query executed properly proceed
$name="";
$age=0;
$phone=0;
$password="";
if($res){

$row=mysqli_fetch_array($res);
$name=$row['name'];
$age=$row['age'];
$phone=$row['phone']; 
$password=$row['password'];


}


else {

echo "Couldn't issue database query<br />";


}

// Close connection to the database
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            update data
        </title>
    </head>
    <body>
        <form action="updatetask.php" method="post">
            <input type="hidden" name="email" value="<?php echo $id?>">
            <label>Name:</label>
            <br>
            <input type="text" name="name" value="<?php echo $name?>">
            <br>
            <label>age:</label>
            <br>
            <input type="number" name="age" value="<?php echo $age?>">
            <br>
            <label>email:</label>
            <br>
            <input type="email" name="phone" value="<?php echo $email?>">
            <br>
            <label>password:</label>
            <br>
            <input type="password" name="pass" value="<?php echo $password?>">
            <br>
            <input type="submit" name="submit">
       </form>
    </body>
</html> 
