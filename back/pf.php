<div class="edu m-5">
<h4>作品管理</h4>
<hr>
<table class="mx-auto text-center " >
<tr>
    
    <td width="10%">作品標題</td>
    <td width="20%">作品圖片</td>
    <td width="20%">作品連結</td>
    <td width="30%">作品說明</td>
    <td width="10%">顯示</td>
    <td width="10%">刪除</td>
</tr>
<style>
    #rank{
        width:50px;
    }
    #pfImg{
        width:100px;
    }
</style>
<form action="./api/edit.php" method='post' >
<?php
include_once("base.php");
$data=$Pf->all();
foreach($data as $v){
?>
<tr>
    <td><input type="text" name="title[]" value="<?=$v['title'];?>"></td>
    <td><img src="img/<?=$v['img'];?>" alt=""  id="pfImg"></td>
    <td  ><input type="text" name="href[]"  value="<?=$v['href'];?>"></td>
    <td  width="40%"><textarea name="txt[]" cols="20" rows="3"><?=$v['txt'];?></textarea></td>
    
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
    <h4>新增作品</h4>
    <hr>
圖片:<input type="file" name="img"><br>
標題:<input type="text" name="title" ><br>
連結:<input type="text" name="href" ><br>
內容:<textarea name="txt"  cols="60" rows="5"></textarea><br>
<input type="hidden" name="table" value="<?=$_GET['do'];?>">
<input type="submit" value="新增">
<input type="reset" value="重置">

</div>
</form>