<?php
session_start();
if(isset($_SESSION["user"]))
{
    echo " Welcome you're signed in!"."<br>";
    echo "<a href='logouttask.php'>logout</a>"."<br>";
    echo "<a href='deletetask.php'>delete your profile</a>"."<br>";
    echo "<a href='updatetask.php'>Edit your profile</a>"."<br>";

}
else
{
    echo "you're not signed in!";
}
?>