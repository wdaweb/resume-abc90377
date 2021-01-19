<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>登入頁面</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <style>
        body{
            height: 100vh;
            background: #Dcd7c9

        }
        
        .login {
            box-shadow: -0.5px 0.5px 4px #a9a9a9;
            border-radius: 5px;
            background-color: #fafafa;

        }
    </style>
</head>
<?php
session_start();
if(isset($_SESSION['login'])){
    header("location:./backend.php");
}
if(isset($_GET['msg']) && $_GET['msg']=='fail'){
$msg="帳號密碼錯誤";
}else{
    $msg="";
}
?>
<body class="d-flex">
    <div class="container  d-flex justify-content-center my-auto ">
        <div class="login d-flex flex-column align-content-center text-center p-5 col-9 col-lg-5">
            <h3 class="pb-3">LOGIN PAGE</h3>
            <p style="color:red;"><?=$msg;?></p>
            <form action="./api/login.php" method="post" >
                <div class="pb-5">
                帳號: <input type="text" name="acc">
            </div>
                <div class="pb-5">
                密碼: <input type="password" name="pw">
            </div>
                <div class="pb-1">
                <input type="submit" name="" value="登入">
            </div>
            </form>
        </div>
    </div>
</body>

</html>