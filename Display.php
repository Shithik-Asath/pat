<?php
    session_start();
    echo "<center><b>Employee Details</b><br>";
    echo "Employee No:".$_SESSION['eno']."<br>";
    echo "Employee Name:".$_SESSION['ename']."<br>";
    echo "Employee Address:".$_SESSION['eaddr']."<br>"."<hr>";
    echo "<b>LIC Plan Details:</b>"."<br>";
    echo "Plan No:".$_REQUEST['pno']."<br>";
    echo "Plan Name:".$_REQUEST['pname']."<br>";
    echo "Premium:".$_REQUEST['pre']."<br>"."<hr>";
?>
