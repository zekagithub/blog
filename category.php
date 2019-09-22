<?php   require 'layout/header.php';?>

<?php

$kat_id=@$_GET['id'];
if(isset($kat_id)){
$kat=$db->prepare('SELECT  * FROM kateqoriya where kat_id=?');
$kat->execute(array($kat_id));
$katcek=$kat->fetch(PDO::FETCH_ASSOC);




?>


<div id="columns" class="container">
	<!-- Column 1 -->
	<div id="column-1">
		<div class="page-subject">
		<?php  print $katcek['kat_title'] ?>
		</div>
        <?php

        $kat_yaz=$db->prepare('SELECT * FROM yazilar where yazi_kat_id=?');
        $kat_yaz->execute(array($kat_id));
        $kat_yaz_cek=$kat_yaz->fetchALL(PDO::FETCH_ASSOC);
   $r=$kat_yaz->rowcount();




        ?>
        <?php foreach ($kat_yaz_cek as $kat): ?>
		<div class="post-column">
			<a href="#" title="Vektörel">
				<img src="img/<?php  echo $kat['yazi_image'] ; ?>" alt="deneme" width="440px" height="260px"/>
			</a>
			<div class="post-column-bottom">
				<h1><a href="#" title="Vektörel"><?php echo $kat['yazi_title']; ?></a></h1>
				<div class="post-column-meta">
					<span><a href="#" title="#"><i class="mdi mdi-pound-box"></i> <?php echo $kat['yazi_title'];  ?></a></span>
					<span><i class="mdi mdi-calendar-clock"></i> <?php echo $kat['yazi_date']; ?></span>
					<span><i class="mdi mdi-comment"></i> 30 Yorum </span>
					<span style="border:0;"><i class="mdi mdi-eye"></i> <?php echo $kat['yazi_hit'];  ?> </span>
				</div>
			</div>
		</div>


<?php endforeach;  ?>
<?php } ?>


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
	<!-- Column 1 END -->
	<!-- Column 2 -->
    <?php  include 'layout/right.php'; ?>

	<!-- Column 2 END -->
	<div style="clear:both;"></div>
</div>
<!-- Footer -->
<?php  include 'layout/footer.php'; ?>

