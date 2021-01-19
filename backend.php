<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>履歷後台管理</title>
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
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<?php
session_start();
if(!isset($_SESSION['login'])){

    header('location:./login.php');
}

?>
<style>
    body{
        background:#Dcd7c9;
    }
    .wrap{
        width:70vw;
        background: #F2EFEA;
    }
    .controller{
        height:60px;
        background-color: #584544;
            color:white;
    }
    a:link {
  color: white;
}

/* visited link */
a:visited {
  color: white;
}

/* mouse over link */
a:hover {
  color: white;
  font-weight:900;
  text-decoration:none;
}

/* selected link */
a:active {
  color: white;
}

.addForm input{
    margin:5px;
    vertical-align:middle;
}
.addForm textarea{
    margin:5px;
    vertical-align:middle;
}
</style>
<body>
    <div class="wrap border mx-auto my-5">
        <div class="controller d-flex justify-content-around align-items-center">
            <a href="?do=ab">簡介</a>
            <a href="?do=img">照片</a>
            <a href="?do=edu">學歷</a>
            <a href="?do=job">工作經歷</a>
            <a href="?do=skill">技能</a>
            <a href="?do=pf">作品</a>
            <a href="?do=want">求職條件</a>
            <a href="?do=contact">聯絡資訊</a>
            <a href="./">返回前台</a>
        </div>
    
    <div>
        <?php
if(!empty($_GET['do'])){
    $file=$_GET['do'].".php";
    include("back/$file");
}else{
    include("back/ab.php");
}

?>
    </div></div>
</body>
</html>