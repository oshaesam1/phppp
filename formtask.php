<?php
session_start();
?>
<html>
<head> 

</head>
<body>
<style>
    label {font-family:cursive}
    h3 {font-family: cursive}
</style>
    <h3> Sign up  :</h3>
<form>
<form class="form" action="createtask.php" method="post" > 
<label> name: </label> <br> <br> 
<input type="required" name="the name" placeholder="enter full name " >
<br> <br>
<label >Email: </label> <br> <br> 
<input type="required" name="email " placeholder="enter full name " >
<br><br> 
 <label >password : </label> <br> <br>
<input type="password" name="pass" placeholder="enter email address" >
<br>
<br>
<label> age: </label> <br> <br>
<input type="number" name="age" placeholder="enter full name " ><br> <br>
<label> phone number: </label> <br> <br>
<input type="number" name="phone" placeholder="enter full name " >
<br>
<br>
<br>

<input class="sumbit" type="submit" value = "Submit" >
</body>
</html>