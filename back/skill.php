<div class="edu m-5">
<h4>技能管理</h4>
<hr>
<table class="mx-auto text-center skillTb" >
<tr>
    <td width="30%">技能標題</td>
    <td width="40%">技能子項</td>
    <td width="10%">排序</td>
    <td width="10%">顯示</td>
    <td width="10%">刪除</td>
</tr>
<style>
    .skillTb td{
        border-bottom:solid 1px black;
        padding:10px;
    }
.c{
    padding-bottom:20px;
}
.add{
    margin-bottom:20px;
}
</style>
<form action="./api/edit.php" method='post' >
<?php
include_once("base.php");
$data=$Skill->all("Order by rank");
foreach($data as $v){
    
?>
<tr>
<td><input type="text" name="title[]" value="<?=$v['title'];?>"></td>
<td class="c">
    
<input type="text" id="<?=$v['id'];?>" class="add"><button onclick="addskill(<?=$v['id'];?>)">+</button>
<?php
$skillChild=$Sc->all(['parent'=>$v['id']]);
foreach($skillChild as $s){
    ?>
    <p><?=$s['skillChild'];?>
    <button onclick="delskill(<?=$s['id'];?>)">-</button></p>
    <?php
}
?>
    </td>
    <td  ><input type="text" name="rank[]" id="rank" value="<?=$v['rank'];?>"></td>
    <td><input type="checkbox" name="sh[]" value="<?=$v['id'];?>" <?=$v['sh']==1?'checked':'';?>></td>
    <td><input type="checkbox" name="del[]" value="<?=$v['id'];?>"></td>
    <input type="hidden" name="id[]" value="<?=$v['id'];?>">
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
</tr>
<?php
}
?></table>
<br>
<input type="submit" value="確認編輯"  class="float-right">
</form>
</div>


<form action="./api/add.php" method="post" enctype="multipart/form-data">
<hr>

<div class="addForm m-5">
    <h4>新增技能標題</h4>
    <hr>
標題:<input type="text" name="title"><br>
<input type="hidden" name="table" value="<?=$_GET['do'];?>">
<input type="submit" value="新增">
<input type="reset" value="重置">

</div>
</form>
<script>
    function addskill(id){
        addID="#"+id;
        skillChild=$(addID).val()
$.post("api/add_skill.php",{id,skillChild},function(res){
})
    }
    function delskill(id){
 
a=confirm("確認刪除該子項目嗎?");
if(a){
$.post("api/del_skill.php",{id},function(res){

})}
    }
</script>