<?php

if($_POST['acc']=="admin" && $_POST['pw']=="1234"){
    session_start();
    $_SESSION['login']="sus";
    // print_r($_SESSION);
    header("location:../backend.php");
}else{
    header("location:../login.php?msg=fail");
}