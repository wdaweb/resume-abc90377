<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
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
<?php
include_once('base.php');
?>
    <title>履歷表</title>
    <style>
        body{
            background:#Dcd7c9;
        }
        .wrap {
            background: #F2EFEA;
            width: 60vw;
            line-height: 2rem;
            

        }

        .AB,.CM {
            background-color: #584544;
            color:white;
        }

        .AB img {
            width: 150px;
            height: 150px;

        }

        .expedu {

            padding-left: 20px;
            margin-bottom: 30px;
        }

        .expjobitem {
            border-left: solid  #584544 2px;
            padding-left: 20px;
            margin-bottom: 30px;
        }

        .eduline {
            border-left: solid  #584544 2px;
            padding-left: 20px;
            margin-bottom: 30px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background:  #584544;
            position: relative;
            top: 0px;
            left: -26px;
        }
        .card{
            margin: 10px;
            
        }

        h2,h4{
            color:#EC6A60;
        }
    </style>
</head>

<body class="">
    <div class="wrap border w-60 mx-auto my-5">
        <div class="AB p-5 d-flex">
            <div class="myimg"><img src="img/<?=$Img->find(['sh'=>1])['img'];?>" class=" border rounded-circle"></div>
            <div class="ABtxt mx-5 ">
                <h2>ABOUT ME</h2>
                <div><?=$Ab->find(['sh'=>1])['txt'];?></div>
                <div class="mt-3">
                  求職需求:
                  <?php
                  $w=[];
                  $wants=$Want->all(['sh'=>1]);
                  foreach($wants as $want){
                      $w[]=$want['title'];
                  }
                  $a=implode(" / ",$w);
                  echo $a;

                  ?>
                </div>
                
            </div>
        </div>
        <div class="exp container px-5 pt-5">
            <div class="expitem d-flex  flex-wrap">
            <div class="expedu col-12 mx-auto  mb-5 d-flex flex-column ">
                    <h4 class="mb-3">Education</h4>
                <?php
                $edu=$Edu->all(['sh'=>1]," Order by rank");
                foreach($edu as $e){

?>


                    <div class="eduline">
                        <div class="expeduitem">
                            <div class="dot"></div>
                            <h5><?=$e['title'];?></h5>
                            <h6 class="muted"><?=$e['time'];?></h6>
                            <div><?=$e['txt'];?></div>
                        </div>
                    </div>
                    <?php
                    }

                    ?>
                </div>
                <div class="expjob col-12 mx-auto  mb-5  ">

                    <h4 class="mb-3">Job</h4>
                    <div class="jobline">
<div class="jobwrap d-flex justify-content-around flex-wrap">
    <?php
$job=$Job->all(['sh'=>1]," Order by rank");
foreach($job as $j){
    ?>
                        <div class="expjobitem col-12 col-md-6 d-flex flex-column">

                            <div class="dot"></div>
                            <h5><?=$j['title'];?></h5>
                            <h6 class="muted"><?=$j['time'];?></h6>
                            <pre><?=$j['txt'];?></pre>

                        </div>
                        <?php
}
                        ?>

</div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="skill  exp container px-5">
            <h4  class="my-4">SKILL</h4>
            <div class="skillClassWrap d-flex mx-auto flex-wrap">
                <?php
                $skill=$Skill->all(['sh'=>1]," Order by rank");
                foreach($skill as $s){
                    ?>
                <div class="skillclass col-12 col-lg-4 ">
                    <h5><?=$s['title'];?></h5>
                    <ul>
                        
<?php
$sc=$Sc->all(['parent'=>$s['id']]);
foreach($sc as $sc_value){
    echo "<li>".$sc_value['skillChild']."</li>";
}
?>
                    </ul>
                </div>
                
<?php
                }
                ?>

            </div>
        </div>
        <hr>
        <div class="portfolio  container px-5 ">
            <h4 class="my-4">Portfolio</h4>
            <div class="portfolioWrap d-flex flex-wrap justify-content-around m-3">

            <?php
$pf=$Pf->all(['sh'=>1]);
foreach($pf as $p){


            ?>
              <div class="card" style="width: 18rem;">
                <img src="img/<?=$p['img'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?=$p['title'];?></h5>
                  <p class="card-text"><?=$p['txt'];?></p>
                  <a href="<?=$p['href'];?>" class="btn btn-primary">點我看作品</a>
                </div>
              </div>
        <?php
}
        ?>


            </div>
        </div>

        <div class="CM pb-5">
                <div class="container">
                    <h4 class="text-center mx-auto pt-5 pb-3">Contact Me</h4>
                    <p class="text-center" >感謝您撥冗閱讀，如有任何需要，請隨時聯絡我！</p>
                    <?php
                  $cm=$Contact->all(['sh'=>1]);
                  foreach($cm as $c){

                  ?>
                    <p class="text-center" >
                        <?=$c['title'];?>
                    </p>
                    <?php
                  }
                    ?>

                </div>

            </div>
    </div><a href="./backend.php"><button class="float-right btn-sm m-1" >LOGIN</button></a>
</body>

</html>