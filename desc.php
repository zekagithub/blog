<?php  include 'layout/header.php';
$yazi_id=$_GET['id'];



$yazi=$db->prepare('SELECT * FROM yazilar INNER JOIN kateqoriya on yazilar.yazi_kat_id=kateqoriya.kat_id where yazi_id=?  ');
$yazi->execute(array($yazi_id));
$yazicek=$yazi->fetch();

?>


<div id="columns" class="container">

	<!-- Column 1 -->
	<div id="column-1">
		<!-- Post -->
		<div class="post">
			<div class="post-header">
				<h1><?=  $yazicek['yazi_title'];  ?></h1>
			</div>
			<div class="post-meta">
				<p>
					<span><a href="#" title="Admin"><i class="mdi mdi-account-circle"></i> Admin</a></span>
					<span><a href="#" title="#"><i class="mdi mdi-pound-box"></i><?=  $yazicek['kat_title'];  ?></a></span>
					<span><i class="mdi mdi-calendar-clock"></i><?=  $yazicek['yazi_date'];  ?></span>
					<span><i class="mdi mdi-comment"></i> 30 Yorum </span>
					<span style="border:0;"><i class="mdi mdi-eye"></i> <?=  $yazicek['yazi_hit'];  ?></span>
				</p>
			</div>
			<div class="post-thumbnail">
				<img src="img/<?=  $yazicek['yazi_image'];  ?>" alt="Fashion">
			</div>
			<div class="post-text">
				<p><?=  $yazicek['yazi_metn'];  ?></p>
			</div>
			<div style="clear:both;"></div>
			<div class="post-info">
				<p>Yazıya serh etmeyi unutmayın...</p>
				<div style="clear:both;"></div>
			</div>

		</div>
		<!-- Post -->
		<!-- Related Post-->
		<div class="related-post">
			<h2>Benzer Yazılar</h2>
            <?php
            $benzer=$db->prepare('SELECT * FROM yazilar INNER JOIN kateqoriya on yazilar.yazi_kat_id=kateqoriya.kat_id where yazi_kat_id=? limit 4  ');
            $benzer->execute(array($yazicek['yazi_kat_id']));
            $benzercek=$benzer->fetchALL();
            ?>

<?php foreach($benzercek as $benzer):  ?>
			<div class="related-post-item">
				<a href="desc.php/?id=<?php echo $benzer['yazi_id'];  ?>"><img src="img/<?php echo $benzer['yazi_image'];  ?>"/></a>
				<h3><a href="desc.php?id=<?php echo $benzer['yazi_id'];  ?>"><?php echo $benzer['yazi_title'];  ?></a></h3>
				<p><?php echo $benzer['yazi_date'];  ?>/p>
			</div>

<?php endforeach; ?>

		</div>
		<!-- Related Post End -->

		<!-- Yorumlar-->
				<div class="related-post">
					<h2>Yapılan Yorumlar</h2>
						<div class="sidebar-post" style="height: auto;">
							<div class="sidebar-post-info">
								<b style="text-transform: capitalize;">Mustafa Kartal</b>
								<span style="float:right;">24 Ocak 2018</span>
							</div>
							<div class="sidebar-post-meta">
								<p><big><i> Lorem ipsum dolor.</i></big></p>
							</div>
							<!-- cevap -->
							<div class="sidebar-post" style="height: auto; background-color: #ddd; margin-top: 10px;">
								<div class="sidebar-post-info">
									<b style="text-transform: capitalize;">Admin</b>
									<span style="float:right;">24 Ocak 2018</span>
								</div>
								<div class="sidebar-post-meta">
									<p><big><b>Cevap</b> : <i>Çok teşekkürler.</i></big></p>
								</div>
							</div>
							<!-- end cevap -->
						</div>
					</div>
					<!-- Yorumlar End -->

		<!-- Yorum Yap-->
					<div class="related-post" style="padding-bottom: 0;">
						<h2>Serh Et</h2>
						<div id="page" style="padding: 0; margin-left: 15px; width: 100%;">
							<form action="" method="post" >
								<p class="cont">Lütfen aşağıdaki alanları eksiksiz doldurunuz.</p>
								<div class="fieldset">
									<input type="text" name="name" placeholder="Adınız Soyadınız"/>
								</div>
								<div class="fieldset">
									<input type="email" name="email" placeholder="Email Adresiniz"/>
								</div>
								<div class="fieldset">
									<input type="text" name="yorum_ekleyen_website" placeholder="https://www.mstfkrtll.com"/>
								</div>
								<div style="clear:both;"></div>
								<div class="fieldset-textarea">
									<textarea name="yorum_icerik" rows="10" placeholder="Yorumunuzz..."></textarea>
								</div>
								<button type="submit" class="submit" style="float:right; margin-right:3%; margin-top:3%; margin-bottom:5%;">Gönder</button>
							</form>
						</div>
					</div>
					<!-- Yorum Yap End -->
	</div>
	<!-- Column 1 END -->
	<!-- Column 2 -->
    <?php  include 'layout/right.php'; ?>

	<!-- Column 2 END -->
	<div style="clear:both;"></div>
</div>
<!-- Footer -->
<?php  include 'layout/footer.php'; ?>
