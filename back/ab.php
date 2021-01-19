<div class="m-5">
   
<h4>自我介紹管理</h4> <hr>
<table class="mx-auto text-center">
<tr>
    <td width="300px">自我介紹</td>
    <td width="25%">顯示</td>
    <td width="25%">刪除</td>
</tr>
<form action="./api/edit.php" method='post'>
<?php
include_once("base.php");
$data=$Ab->all();
foreach($data as $v){
?>
<tr>
    <td><textarea name="txt[]" id="" cols="60" rows="3"><?=$v['txt'];?></textarea></td>
    <td><input type="radio" name="sh[]" value="<?=$v['id'];?>" <?=$v['sh']==1?'checked':'';?>></td>
    <td><input type="checkbox" name="del[]" value="<?=$v['id'];?>"></td>
    <input type="hidden" name="id[]" value="<?=$v['id'];?>">
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
</tr>
<?php
}
?></table>
<input type="submit" value="確認編輯"  class="float-right">
</form>
</div>
<br>
<hr class="mt-3">

<form action="./api/add.php" method="post" enctype="multipart/form-data">
<div class="addForm m-5">
    <h4>新增自我介紹</h4>
    <hr>
<textarea name="txt" id="" cols="60" rows="5"></textarea><br>
<input type="hidden" name="table" value="ab">
<input type="submit" value="新增">
<input type="reset" value="重置">

</div>
</form>