<?php
$yaz=$db->prepare('SELECT * FROM yazilar ORDER by yazi_hit desc limit 5');
$yaz->execute();
$yazcek=$yaz->fetchALL(PDO::FETCH_ASSOC);
?>



<div id="column-2">
    <form action="search.php" method="get">
    <div class="sidebar">
        <input type="search" class="search-field"  name="search" title="Arama:">
    </form>
    </div>
    <div class="sidebar">
        <h4>Çox İzlənənlər</h4>
        <?php foreach ($yazcek as $yazcek):   ?>
        <div class="sidebar-post">
            <a href="desc.php?id=<?= $yazcek['yazi_id'];  ?>" title="#"><img src="img/<?= $yazcek['yazi_image']; ?>" alt="Fashion"/></a>
            <div class="sidebar-post-info">
                <h3><a href="desc.php?id=<?= $yazcek['yazi_id'];  ?>" title="Blogging For Fashion"><?php  echo $yazcek['yazi_title'];  ?></a></h3>
            </div>
            <div class="sidebar-post-meta">
               <?= $yazcek['yazi_date'];   ?>
            </div>
        </div>


        <?php  endforeach;  ?>

    </div>

    <div class="sidebar">
        <h4>KATEGORIYA</h4>

        <ul class="social list">
            <?php

            $kat=$db->prepare('SELECT * FROM kateqoriya' );
            $kat->execute();
            $katcek=$kat->fetchAll(PDO::FETCH_ASSOC);



            ?>

            <?php foreach($katcek as $kateqoriya):  ?>
            <li class="border" style="text-align:right;">
                <a href="category.php?id=<?php echo $kateqoriya['kat_id']; ?>">
                    <i class="mdi mdi-pound-box mdi-24px"  style="float:left; margin-right: 5px; color: lightblue;"></i>
                    <span style="float:left;"> <?php echo $kateqoriya['kat_title']; ?>

                        <?php
                        $yazisay=$db->prepare('SELECT * FROM yazilar where yazi_kat_id=?');
                        $yazisay->execute(array($kateqoriya['kat_id']));
                        $cek=$yazisay->fetchAll(PDO::FETCH_ASSOC);
                        $row=$yazisay->rowCount();
                        ?>



                    </span>
                    <span style="padding-left: 3px; padding-right: 3px; background-color: lightblue; color: white; border-radius: 5px;">
<?php echo $row;  ?>

                    </span>
                </a>
            </li>

          <?php endforeach;  ?>


        </ul>

    </div>

    <div class="sidebar">
        <h4>Bizi Izle</h4>
        <ul class="social list">
            <li class="border">
                <a href="<?php echo $ayarcek['site_facebook'];   ?>"><img src="img/socials/facebook.png" alt="Facebook"/><span>Facebook</span></a>
            </li>
            <li class="border">
                <a href="<?php echo $ayarcek['site_youtube'];   ?>"><img src="img/socials/youtube.png" alt="Youtube"/><span>Youtube</span></a>
            </li>
            <li class="border">
                <a href="<?php echo $ayarcek['site_google'];   ?>"><img src="img/socials/google.png" alt="Google Plus"/><span>Google+</span></a>
            </li>
            <li style="padding-bottom:0 !important;">
                <a href="<?php echo $ayarcek['site_instagram'];   ?>"><img src="img/socials/instagram.png" alt="Instagram"/><span>Instagram</span></a>
            </li>
        </ul>
    </div>
</div>