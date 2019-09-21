<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="img/png" href="img/ra.png" />
	<title>Renaldy</title>
	<link rel="stylesheet" type="text/css" href="dist/semantic.css">	
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<!-- TAMPILAN HEADER -->
<?php
	if(isset($_POST['name']) AND isset ($_POST['email'])){
?>
<header class="bgii"id="home">
              <div class="ui text container">
                <h2 style="font-size: 50px; color: white; position:absolute;top:50%;" class="text container" ><?php include 'header.php'; ?></h2>
              </div>
</header>
<div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally celled grid">
      <div class="aligned row">
        <div class="column">
         <h2 class="ui header">
                  <img src="img/ra.png" class="ui circular image">
                  TERIMA KASIH,
                  </h2>
        <h3>UNTUK, <?php echo $_POST['name']?><br>Terimakasih Telah Menghubungi kami,Kami akan Menghubungi anda di email berikut <?php echo $_POST['email']?>. Harap Periksa email anda dalam 48 jam</h3>
        </div>
      </div>
    </div>
  </div>
  <div>
    <p style="text-align: center; font-size: 15px;" class="ui inverted vertical footer segment"><?php include 'footer.php' ?></p>
  </div>
  <?php
	}

	else{
	?>
	<header class="bgii" id="">
		<div class="ui text center container">
			<h3 style="font-size: 30px; color: white; position: absolute;top: 50%"><?php include'header.php'; ?><br>Direct access not permitted.<br>You will redirect to index.php in 5 second</h3>
		</div>
	</header>

	<?php 
	header( "refresh:5;url=index.php" );
	die('');
	}
	?>

</body>
</html>