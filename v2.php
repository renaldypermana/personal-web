<!DOCTYPE html>
<html>
<head>
	<title>RENALDY</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="dist/semantic.css">	
	<link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/card.css">
</head>
<body>
	<?php
	$pendidikan =[
	[ 
		'year' => '2009-2015',
		'school' => 'SDN SIMOKERTO 6 139',
		'img' => 'img/sd.jpg'

	],
	[
		'year' => '2015-2018',
		'school' => 'SMPN 27 SURABAYA',
		'img' => 'img/smp.jpg'
	],
	[
		'year' => '2018-Sekarang',
		'school' => 'SMKN 2 SURABAYA',
		'img' => 'img/smk.jpg'
		],
	];
	?>
   <!-- MAIN MENU -->
	        <div class="ui medium top fixed hidden inverted menu">
            <div class="ui container ui inverted">
                <a href="#home" class="header item">
                    <img class="logo" src="img/ra.png">
                    RENALDY
                </a>
                <a class="item" href="#myprofile">Profil saya</a>
                <a class="item" href="#about" >About</a>
                <a class="item" href="#contact">Contact Me</a>
            </div>
        </div>
        <!-- Header -->
        <header class="bgii"id="home">
              <div class="ui text container">
                <h2 style="font-size: 50px; color: white; position:absolute;top:50%;" class="text container"><?php include 'header.php'; ?></h2>
              </div>
        </header>
        <!-- PENDIDIKAN -->
        <div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
         <h2 class="ui header">
                  <img src="img/pendidikan1.png" class="ui circular image">
                  EDUCATION HISTORY
                  </h2>
        </div>
      </div>
    </div>
  </div>
       <div class="ui three cards container">
   <?php foreach ($pendidikan as $key => $value): ?>
  <div class="ui card" >
    <div class="image">
      <img src="<?php echo $value['img']?>">
    </div>
    <div class="content">
      <div class="header"><?php echo $value['year']?></div>
      <div class="description"><?php echo $value['school']?></div>
    </div>
  </div>
 <?php endforeach ?>
</div>
</body>
</html>