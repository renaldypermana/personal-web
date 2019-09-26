<?php include 'header.php' ?>
<!-- TAMPILAN HEADER -->
<?php
	if(isset($_POST['name']) AND isset ($_POST['email'])):
?>
<header class="bgii"id="home">
    <div class="ui cards container"  style="font-size: 50px; position:absolute;top:30%;left: 30%;opacity: 0.8">
    <div class="ui card" style="width: 500px;">
      <div class="contect">
        <div class="ui header" style="font-size: 20px;">
        <a href="index.php">
        <i class="window close outline icon"></i>
        </a>
        <img src="img/ra.png" class="ui circular image">
                  TERIMA KASIH
        </div> 
        <div class="description">
          <h3>UNTUK, <?php echo $_POST['name']?><br>Terimakasih Telah Menghubungi kami,Kami akan Menghubungi anda di email berikut <?php echo $_POST['email']?>. Harap Periksa email anda dalam 48 jam</h3>
        </div>
      </div>
    </div>
</div>
</header>
<?php include 'footer.php' ?></p>


  <?php
	else:
	?><?php include'header.php'; ?>
	<header class="bgii" id="">
		<div class="ui text center container">
			<h3 style="font-size: 30px; color: white; position: absolute;top: 40%;left: 30%;"><br>Direct access not permitted.<br>You will redirect to index.php in 5 second</h3>
		</div>
	</header>
  <?php include 'footer.php' ?></p>
	<?php 
	header( "refresh:5;url=index.php" );
	die('');
	endif
	?>