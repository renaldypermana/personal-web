<?php include 'header.php'; ?>
<?php $id = $_GET['id'];
	if (($id == '0') OR ($id == '1')) :
?>
	<div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally grid">
      <div class=" row">
      	<div class="column">
		<div class="ui column left grid container">
 			 <div class="column">
  				<a  href="<?php echo $portofolio1[$id]['img1'][0] ?>" data-lightbox="dashboard" data-title=""><img src="<?php echo $portofolio1[$id]['img1'][0] ?>" width="535px">
  				</a>
  			</div>
        <div class="four column left row container">
  		  <div class="column">
  		  	<a  href="<?php echo $portofolio1[$id]['img1'][1] ?>" data-lightbox="dashboard" data-title=""><img src="<?php echo $portofolio1[$id]['img1'][1] ?>" width="250px" >
  		  	</a>
  		  </div>
  		  <div class="column">
  		  	<a  href="<?php echo $portofolio1[$id]['img1'][0] ?>" data-lightbox="dashboard" data-title=""><img src="<?php echo $portofolio1[$id]['img1'][2] ?>" width="250px" style="margin: 0 130px">
  		  	</a>
  		  </div>
  		</div>
		</div>
	</div>
	<div class="column">
		<br>
		 <h3 class="ui header"><?php echo $portofolio1[$id]['nama']?>
		 </h3>
		 <p>
		 <?php echo $portofolio1[$id]['deskripsi']?>
		 </p>
		 <p>
		 	<i class="ui red label"><?php echo $portofolio1[$id]['tag']?></i>
		 </p>
		<div class="ui basic pink button"><a href="index.php"><-KEMBALI</a></div>
    </div>
	</div>
	</div>
	</div>
	</div>
  <a href="<?php echo $portofolio1[$id]['img1'][3] ?>" data-lightbox="dashboard" data-title=""></a>
  <?php include 'footer.php'; ?>
	
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