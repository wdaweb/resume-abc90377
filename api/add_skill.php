<?php
include_once("../base.php");
$data=[];
$data['skillChild']=$_POST['skillChild'];
$data['parent']=$_POST['id'];
$Sc->save($data);


?>