<footer>
    <div class="container" id="footer-top">
        <div class="footer-nav">

        </div>
        <div class="footer-nav" id="pop">
            <h4>En çox baxilanlar</h4>
            <?php

            $yaz=$db->prepare('SELECT * FROM yazilar order by yazi_hit desc limit 4 ');
            $yaz->execute();
            $yazcek=$yaz->fetchALL(PDO::FETCH_ASSOC);




            ?>



            <ul class="footer">
            <?php foreach($yazcek as $yazcek):  ?>
                <li>
                    <a href="#" class="left"><img src="img/<?= $yazcek['yazi_image'];  ?>" alt="Fashion"></a>
                    <div class="footer-nav-item">
                        <a href="<?php echo $yazcek['yazi_id'];  ?>"><?= $yazcek['yazi_title'];  ?></a>
                        <p><?= $yazcek['yazi_date'];  ?></p>
                    </div>
                    <div style="clear:both;"></div>
                </li>
                <?php  endforeach;  ?>

            </ul>
        </div>
        <div class="footer-nav">
            <h4>Son Yazılar</h4>

            <?php
            $sonyazi=$db->prepare('SELECT * FROM yazilar yazi_id desc LIMIT 4 ');
            $sonyazi->execute();
            $soncek=$sonyazi->fetchALL(PDO::FETCH_ASSOC);



            ?>



            <ul class="footer">
                <li>
                    <a href="#" class="left"><img src="img/<?= $yazcek['yazi_image'];  ?>" alt="Fashion"></a>
                    <div class="footer-nav-item">
                        <a href="<?= $yazcek['yazi_id'];  ?>"><?= $yazcek['yazi_title'];  ?></a>
                        <p><?= $yazcek['yazi_date'];  ?></p>
                    </div>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <a href="#" class="left"><img src="img/pasta.jpg" alt="Fashion"></a>
                    <div class="footer-nav-item">
                        <a href="#">Family Fun With Pasta</a>
                        <p>3 aralık 2015</p>
                    </div>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <a href="#" class="left"><img src="img/women.jpg" alt="Fashion"></a>
                    <div class="footer-nav-item">
                        <a href="#">Women’s Fashion In 2015</a>
                        <p>3 aralık 2015</p>
                    </div>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <a href="#" class="left"><img src="img/kid.jpg" alt="Fashion"></a>
                    <div class="footer-nav-item">
                        <a href="#">Why Our Kids Need Play</a>
                        <p>3 aralık 2015</p>
                    </div>
                    <div style="clear:both;"></div>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!-- Footer  END -->
<!-- Copyright -->
<div id="copyright">
    <div class="container">
        <div id="design">
            Tasarım & Kodlama : <a href="<?php echo $ayarcek['site_url'];   ?>"><?php echo $ayarcek['site_title'];   ?></a> | Tüm hakları saklıdır.
        </div>
        <nav>
            <ul>
                <li><h5><a href="#">anasehife</a></h5></li>
                <li><h5><a href="#">haqqimda</a></h5></li>
                <li><h5><a href="#">elaqe</a></h5></li>
            </ul>
        </nav>
    </div>
</div>
<!-- Copyright End -->
</body>
</html>