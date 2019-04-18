<?php 
    mysql_connect("[DB서버IP]", "[아이디]", "[패스워드]");
    mysql_select_db("[DB명]");
    mysql_query("set names utf8");

    $email = $_GET[email];
    $oldPass = $_GET[password];
    $newPass = $_GET[newpass];
    
    $sql = "UPDATE User SET password='$newPass' WHERE password='$oldPass' AND email='$email'";

    if (mysql_query($sql)) {
        echo "ok";
    } else {
        echo "error";
    }
    
    mysql_close();
?>