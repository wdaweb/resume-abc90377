<div class="edu m-5">
<h4>工作經歷管理</h4>
<hr>
<table class="mx-auto text-center " >
<tr>
    <td width="20%">工作標題</td>
    <td width="10%">工作時間</td>
    <td width="40%">工作說明</td>
    <td width="10%">排序</td>
    <td width="10%">顯示</td>
    <td width="10%">刪除</td>
</tr>
<style>
    #rank{
        width:50px;
    }
</style>
<form action="./api/edit.php" method='post' >
<?php
include_once("base.php");
$data=$Job->all("Order by rank");
foreach($data as $v){
?>
<tr>
    <td><input type="text" name="title[]" value="<?=$v['title'];?>"></td>
    <td><input type="text" name="time[]" value="<?=$v['time'];?>"></td>
    <td  width="40%"><textarea name="txt[]" cols="20" rows="3"><?=$v['txt'];?></textarea></td>
    <td  ><input type="text" name="rank[]" id="rank" value="<?=$v['rank'];?>"></td>
    <td><input type="checkbox" name="sh[]" value="<?=$v['id'];?>" <?=$v['sh']==1?'checked':'';?>></td>
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


<form action="./api/add.php" method="post" enctype="multipart/form-data">
<hr>

<div class="addForm m-5">
    <h4>新增工作經歷</h4>
    <hr>
標題:<input type="text" name="title" ><br>
時間:<input type="text" name="time" ><br>
內容:<textarea name="txt"  cols="60" rows="5"></textarea><br>
<input type="hidden" name="table" value="<?=$_GET['do'];?>">
<input type="submit" value="新增">
<input type="reset" value="重置">

</div>
</form>