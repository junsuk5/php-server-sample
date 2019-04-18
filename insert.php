<?php 
    // 새로운 컨텐츠 추가
    mysql_connect("[DB서버IP]", "[아이디]", "[패스워드]");
    mysql_select_db("[DB명]");
    mysql_query("set names utf8");
    
    $email = $_GET[email];
    $nickname = $_GET[nickname];
    $password = $_GET[password];
    
    
    $sql = "INSERT INTO User (email, nickname, password) VALUES ('$email', '$nickname', '$password')";  
    
    if (!mysql_query($sql)) {
        echo "error";
    } else {
        echo "ok";
    }
    
    
    mysql_close();
?>