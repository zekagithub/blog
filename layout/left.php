<div id="column-1">
    <?php
    $yazi=$db->prepare('SELECT * FROM yazilar INNER JOIN  kateqoriya on yazilar.yazi_kat_id=kateqoriya.kat_id order by yazi_id DESC');
    $yazi->execute();
    $yazicek=$yazi->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <?php foreach ($yazicek as $yazilar):  ?>
    <div class="post-column">
        <a href="desc.php?id=<?php echo $yazilar['yazi_id'];   ?>" title="Vektörel">
            <img src="img/<?php print $yazilar['yazi_image'];  ?>" alt="deneme" width="440px" height="260px"/>
        </a>
        <div class="post-column-bottom">
            <h1><a href="#" title="Vektörel"><?php  echo substr( $yazilar ["yazi_metn"],0,150);   ?></a></h1>
            <div class="post-column-meta">
                <span><a href="#" title="#"><i class="mdi mdi"><?php echo  $yazilar['kat_title'] ; ?></span>
                <span><i class="mdi mdi-comment"></i> 30 Yorum </span>
                <span style="border:0;"><i class="mdi mdi-eye"></i> <?php echo $yazilar['yazi_hit']; ?></span>
            </div>
        </div>
    </div>
<?php endforeach;  ?>


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
</div>