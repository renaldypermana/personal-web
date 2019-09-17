<!DOCTYPE html>
<html>
<head>
	<title>Coba semantic Ui</title>
	<link rel="stylesheet" type="text/css" href="dist/semantic.css">	
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php
	$pendidikan =[
	[ 
		'year' => '2009-2015',
		'school' => 'SDN SIMOKERTO 6 139',
		'location' => 'Surabaya'
	],
	[
		'year' => '2015-2018',
		'school' => 'SMPN 27 SURABAYA',
		'location' => 'Surabaya'
	],
		'year' => '2018-NOW',
		'school' => 'SDN SIMOKERTO 6 139',
		'location' => 'Surabaya'
	];
	?>
	        <div class="ui medium top fixed hidden menu">
            <div class="ui container">
                <a href="#home" class="header activate item">
                    <img class="logo" src="img/ra.png">
                    RENALDY P
                </a>
                <a class="item" href="#myprofile">Profil saya</a>
                <a class="item">About</a>
                <a class="item">Contact Me</a>
            </div>
        </div>
        <header class="bgimg"id="home">
        </header>
		<div id="myprofile">
        <h5>PENDIDIKAN</h5>
        <?php foreach ($pendidikan as $key => $value): ?>
        <div class="ui very relaxed list">
            <div class="item">
             <div class="content">
               <a class="header" style="font-size: 20px"><?php echo $value['year']?></a>
              <div class="description" style="font-size: 17px">Bersekolah di <a><b><?php echo $value['school'] ?></b></a></div>
             </div>
            </div>
         </div>
         <?php endforeach ?><br>
           </div>
           </div>
</body>
</html>