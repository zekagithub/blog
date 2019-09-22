<?php   require 'layout/header.php';?>

<?php

$search=@strip_tags($_GET['search']);
$axtar=$db->prepare('SELECT * from yazilar INNER JOIN  kateqoriya on kateqoriya.kat_id=yazilar.yazi_kat_id
where yazi_title LIKE ? order by yazi_id desc ');
$axtar->execute(array('%'.$search.'%'));
$yaz=$axtar->fetchALL(PDO::FETCH_ASSOC);
$say=$axtar->rowCount();



?>



    <!-- Column 1 -->
    <div id="column-1">
        <div class="page-subject">
            <?php echo ' <span style="color: red;"> '. $search.'</span>'." ile bagli neticeler"; ?>
        </div>
<?php  foreach($yaz as $yaz): ?>
            <div class="post-column">
                <a href="desc.php?id=<?php echo $yaz['yazi_id'];  ?>" title="">

                    <img src="img/<?php echo $yaz['yazi_image']; ?>" alt="deneme" width="440px" height="260px"/>
                </a>
                <div class="post-column-bottom">
                    <h1><a href="desc.php?id=<?php echo $yaz['yazi_id']; ?>" title="Vektörel"></a><?php echo $yaz['yazi_title'];  ?></h1>
                    <div class="post-column-meta">
                        <span><a href="category.php?id=<?php echo $yaz['kat_id'];  ?>" title=""><i class="mdi mdi-pound-box"></i><?php echo $yaz['kat_title'];  ?></a></span>
                        <span><i class="mdi mdi-calendar-clock"></i> </span>
                        <span><i class="mdi mdi-comment"></i> 30 Yorum </span>
                        <span style="border:0;"><i class="mdi mdi-eye"></i> <?php echo $yaz['yazi_hit'];  ?> </span>
                    </div>
                </div>
            </div>

<?php endforeach;   ?>

<?php if ($say):  ?>
        <div style="clear:both;"></div>
        <div id="page-numbers" class="box-shadow">
            <ul style="margin-left: 8px;">
                <li><a href="#"> << İlk</a></li>
                <li><a href="#"> < Önceki</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#">11</a></li>
                <li><a href="#">12</a></li>
                <li><a href="#">13</a></li>
                <li><a href="#">14</a></li>
                <li><a href="#">15</a></li>
                <li><a href="#">Sonraki ></a></li>
                <li><a href="#">Son >></a></li>
            </ul>
            <div style="clear:both;"></div>
        </div>
        <?php else: echo "<b>axtardiqiniza uygun netice tapilmadi</b>";endif;  ?>
    </div>
    <!-- Column 1 END -->
    <!-- Column 2 -->
    <?php  include 'layout/right.php'; ?>

    <!-- Column 2 END -->
    <div style="clear:both;"></div>
</div>
<!-- Footer -->
<?php  include 'layout/footer.php'; ?>

