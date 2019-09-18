<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="img/png" href="img/ra.png" />
	<title>RA</title>
	<link rel="stylesheet" type="text/css" href="dist/semantic.css">	
	<link rel="stylesheet" type="text/css" href="index.css"><link rel="stylesheet" type="text/css" href="../dist/components/grid.css">

    <script type="dist/semantic.js"></script>
    <script type="dist/semantic.min.js"></script>
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
	[
		'year' => '2018-Sekarang',
		'school' => 'SMKN 2 SURABAYA',
		'location' => 'Surabaya'
		],
	];
    $profil =[
        [
            'profil' => 'MY PROFILE',
            'nama' => 'Renaldy Permana Sundawa',
            'ttl' => 'Surabaya, 12 Mei 2003',
            'alamat' => 'Jl. Tenggumung baru no 170',
            'no_telp' => ':+6281248689876',
            'email' => 'renaldypermana7@gmail.com',
            'hobi' => 'Berenang dan Berlari',
        ],
    ];
    $keahlian =[
        [
            'cpp' => 'c++'
        ],
    ];
	?>
	        <div class="ui medium top fixed hidden menu">
            <div class="ui container ui inverted">
                <a href="#home" class="header activate item">
                    <img class="logo" src="img/ra.png">
                    RENALDY
                </a>
                <a class="item" href="#myprofile">Profil saya</a>
                <a class="item">About</a>
                <a class="item">Contact Me</a>
            </div>
        </div>
        <header class="bgimg"id="home">
        </header>

        <!-- PROFILE -->
        <div id="myprofile" class="ui container">
            <br>
             <div class="ui grid">
                <?php foreach ($profil as $key => $value): ?>
                    <div class="two column row">
                    <div class="computer only column">
                    <div class="ui segment">
                  <h2 class="ui header">
                  <img src="img/ra.png" class="ui circular image">
                  <?php echo $value['profil']?>
                  </h2>
                  <h3>Perkenalkan nama saya <?php echo $value['nama']?> , lahir di <?php echo $value['ttl']?> Tertarik pada bidang it sejak kelas 9 smp. Hobi saya <?php echo $value['hobi']?></h3>
              </div>
              <?php endforeach ?>
              <!--Pendidikan -->
       <div>
            <h5 style="text-indent: 30px">RIWAYAT PENDIDIKAN</h5>
            <?php foreach ($pendidikan as $key => $value): ?>
                <div class="ui grid">
                  <div class="three column only">
                    <div class="column">
                       <div class="ui segment">
                        <a class="header" style="font-size: 20px; "><i class="building outline icon"></i><?php echo $value['year']?></a>
                         <div class="description" style="font-size: 17px">Bersekolah di <a><b><?php echo $value['school'] ?></b>
                        </a></div>
                        </div>
                     </div>
                </div>
            </div>
         <?php endforeach ?><br>
       </div>
          </div>
           </div>
  </div>
</div>
        
        <br>
    <br>
</body>
</html>