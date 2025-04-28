<?php
session_start();
$_SESSION["eno"]=$_POST["eno"];
$_SESSION["ename"]=$_POST["ename"];
$_SESSION["eaddr"]=$_POST["eaddr"];
echo "Hello,".$_SESSION['ename']." Enter LIC details:"."<br>";
?>
<form action="Display.php" method="post">
Plan No:
<input type="text" name="pno"><br>
Plan Name:
<input type="text" name="pname"><br>
Premium:
<input type="text" name="pre"><br>
<input type="submit" value="Display">
</form>
