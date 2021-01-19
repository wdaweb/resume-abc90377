<?php
include_once("../base.php");
$table=$_POST['table'];

print_r($_POST);
$DB=new DB($table);
$data=[];
foreach($_POST['id'] as $k=>$id){
    if(in_array($id,$_POST['del'])){
        $DB->del($id);
        if($table=='skill'){
         $Sc->del(['parent'=>$id]);   
        }
        
    }else{
        $data['id']=$id;
        if(in_array($id,$_POST['sh'])){
            $data['sh']=1;
        }else{
            $data['sh']=0;
        }
        if(!empty($_POST['txt'])){
            $data['txt']=$_POST['txt'][$k];
        }
        if(!empty($_POST['time'])){
            $data['time']=$_POST['time'][$k];
        }
        if(!empty($_POST['title'])){
            $data['title']=$_POST['title'][$k];
        }
        if(!empty($_POST['href'])){
            $data['href']=$_POST['href'][$k];
        }
        if(!empty($_POST['rank'])){
            $data['rank']=$_POST['rank'][$k];
        }
        $DB->save($data);
    }
}
if(!empty($_POST['sk'])){
    $sk=[];
    $sk['rank']=$_POST['rank'][$k];
}


to("../backend.php?do=$table");
?>