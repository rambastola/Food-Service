<?php

    session_start();
    include "top.php";
    include "connect.php";
    
    $password = mysqli_real_escape_string($db, $_POST['passcode']);
    
    $sql = "SELECT * FROM members WHERE password='$password'";
    
    $result = mysqli_query($db, $sql);
    
    $allow = $password;

switch ($allow) {
    case "0000000000":
         $_SESSION['password'] = 1;
                    header('Location: station_forms.php');
        break;
    default:
        echo '<div id="success" style="text-align: center; font-family: Tahoma; font-size: 25px;"><p><b><em>Password Incorrect. Click <a href="index.php">HERE</a> to try again.</em></b></p></div>';
}
?>

