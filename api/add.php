<?php
include_once("../base.php");
$table=$_POST['table'];
// print_r($_FILES);
print_r($_POST);
$DB=new DB($table);
$data=[];
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}
if(!empty($_POST['txt'])){
    $data['txt']=$_POST['txt'];
}
if(!empty($_POST['time'])){
    $data['time']=$_POST['time'];
}
if(!empty($_POST['title'])){
    $data['title']=$_POST['title'];
}
if(!empty($_POST['href'])){
    $data['href']=$_POST['href'];
}

switch($table){
    case "img":
        $data['sh']=0;
        break;
    case "ab":
        $data['sh']=0;
        break;
    case "want":
        $data['sh']=1;
        break;
    case "contact":
        $data['sh']=1;
        break;
    case "ab":
        $data['sh']=0;
        break;
    case "pf":
        $data['sh']=1;
        break;
    case "edu":
        $data['sh']=1;
        $rank=$DB->q("SELECT MAX(`rank`) from `edu`");
        $data['rank']=$rank[0][0]+1;
        break;
    case "job":
        $data['sh']=1;
        $rank=$DB->q("SELECT MAX(`rank`) from `job`");
        $data['rank']=$rank[0][0]+1;
        break;
    case "skill":
        $data['sh']=1;
        $rank=$DB->q("SELECT MAX(`rank`) from `skill`");
        // print_r($rank);
        $data['rank']=$rank[0][0]+1;
        break;
}

$DB->save($data);
to("../backend.php?do=$table");
?>