
<?php
session_start();
$_SESSION["user"]=1;
?>

<!DOCtybe >
<html>
<head> 

</head>
<body>
<style>
    label {font-family:cursive}
    h3 {font-family: cursive}
</style>
    <h3> Log in :</h3>
<form action="Sessiontask.php" method="post">
<form class="form" > 
<label >Email: </label> <br> <br>
<input type="required" name="the name" placeholder="enter full name " >
<br><br> 
 <label >password : </label> <br> <br>
<input type="password" name="email" placeholder="enter email address" >
<br>
<br>
 <input type="checkbox" name="remember" value="Remember">Remember me
<br><br>
<input class="sumbit" type="submit" value = "Submit" >
</body>
