<div class="edu m-5">
<h4>聯絡資訊</h4>
<hr>
<table class="mx-auto text-center " >
<tr>
    <td>聯絡資訊</td>
    <td>顯示</td>
    <td>刪除</td>
</tr>
<form action="./api/edit.php" method='post' >
<?php
include_once("base.php");
$data=$Contact->all();
foreach($data as $v){
?>
<tr>
    <td><input type="text" name="title[]" value="<?=$v['title'];?>"></td>
    <td><input type="checkbox" name="sh[]" value="<?=$v['id'];?>" <?=$v['sh']==1?'checked':'';?>></td>
    <td><input type="checkbox" name="del[]" value="<?=$v['id'];?>"></td>
    
    <input type="hidden" name="id[]" value="<?=$v['id'];?>">
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
</tr>
<?php
}
?></table>
<input type="submit" value="確認編輯" class="float-right">
</form>
</div>

<form action="./api/add.php" method="post" enctype="multipart/form-data">
<hr>

<div class=" m-5 addForm">
<h4>新增聯絡方式</h4>
<hr>
<input type="text" name="title" ><br>
<input type="hidden" name="table" value="<?=$_GET['do'];?>">
<input type="submit" value="新增">
<input type="reset" value="重置">

</div>
</form>