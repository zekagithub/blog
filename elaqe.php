<?php  include 'layout/header.php'; ?>

<div id="columns" class="container">
	<!-- Column 1 -->
	<div id="column-1">
		<!-- <div class="page-subject"> İletişim </div> -->
		<div class="page-cont box-shadow">
		<div id="page">
		<form id="mesajform" action="" method="post" onsubmit="return false;">
			<p class="cont">Lütfen aşağıdaki alanları eksiksiz doldurunuz.</p>
			<div class="fieldset">
				<input type="text" name="name" placeholder="Adınız Soyadınız"/>
			</div>
			<div class="fieldset">
				<input type="text" name="email" placeholder="Email Adresiniz"/>
			</div>
			<div class="fieldset">
				<input type="text" name="subject" placeholder="Mesaj Konusu"/>
			</div>
			<div style="clear:both;"></div>
			<div class="fieldset-textarea">
				<textarea name="message"  rows="10"></textarea>
			</div>
			<button type="submit" class="submit" onclick="mesajgonder();" style="float:right; margin-right:3%; margin-top:3%; margin-bottom:5%;">Gönder</button>
		</form>
		</div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<!-- Column 1 END -->
    <script>
        function mesajgonder() {

            var deyer=$('#mesajform').serialize();
             $.ajax({
                 type:"POST",
                 url:'mesajgonder.php',
                 data:deyer,
                 dataType:'json',
                 success:function (result) {
                     if (result=="bos"){
                         swal("Diqqet","bos xanalari doldurun","warning");
                     } else if(result=="no"){
                         swal("xeta","gonderirken bir xeta oldu","error");
                     } else if(result=="yes"){
                         swal({
                             title: "Gonderildi!",
                             text: "tebrikler!",
                             icon: "success",
                             timer:2000
                         });
                     }
                 }
             });


        }



    </script>




	<!-- Column 2 -->
    <?php  include 'layout/right.php'; ?>

	<!-- Column 2 END -->
	<div style="clear:both;"></div>
</div>
<!-- Footer -->
<?php  include 'layout/footer.php'; ?>
