<div class="m-5">
    
<h4>個人頭貼管理</h4>
<hr>

<table class="mx-auto text-center">
<tr>
    <td width="300px">圖片</td>
    <td width="25%">顯示</td>
    <td width="25%">刪除</td>
</tr>
<form action="./api/edit.php" method='post'>
<?php
include_once("base.php");
$data=$Img->all();
foreach($data as $v){
?>
<tr>
    <td><img src="./img/<?=$v['img'];?>" style="width:100px;height:100px;"></td>
    <td><input type="radio" name="sh[]" value="<?=$v['id'];?>" <?=$v['sh']==1?'checked':'';?>></td>
    <td><input type="checkbox" name="del[]" value="<?=$v['id'];?>"></td>
    <input type="hidden" name="id[]" value="<?=$v['id'];?>">
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
</tr>
<?php
}
?></table>
<input type="submit" value="確認編輯"   class="float-right"><br>
</form>
</div>


<form action="./api/add.php" method="post" enctype="multipart/form-data">
<hr>
<div class="m-5 addForm">
<h4>新增個人頭貼</h4>
<hr>

履歷圖片<input type="file" name="img" ><br>
<input type="hidden" name="table" value="<?=$_GET['do'];?>">
<input type="submit" value="新增">
<input type="reset" value="重置">

</div>
</form>
