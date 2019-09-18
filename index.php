<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="img/png" href="img/ra.png" />
	<title>RA</title>
	<link rel="stylesheet" type="text/css" href="dist/semantic.css">	
	<link rel="stylesheet" type="text/css" href="index.css"><link rel="stylesheet" type="text/css" href="dist/components/progress.css">

    <script type="dist/semantic.js"></script>
    <script type="dist/semantic.min.js"></script>
    <script type="dist/components/progress.js"></script>

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
            'bahasa' => 'C++',
        ],
          [
            'bahasa' => 'HTML',
        ],
          [
            'bahasa' => 'JAVA',
        ],  [
            'bahasa' => 'CSS',
        ],  [
            'bahasa' => 'PHP',
        ],  [
            'bahasa' => 'MYSQL',
        ],
    ];
	?>
          <!-- MAIN MENU -->
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
              <div class="ui text container">
                <h2><?php include 'header.php'; ?></h2>
              </div>
        </header>

        <!-- PROFILE -->
        <div id="myprofile" class="ui container">
            <br>
            <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
         <?php foreach ($profil as $key => $value): ?>
         <h2 class="ui header">
                  <img src="img/ra.png" class="ui circular image">
                  <?php echo $value['profil']?>
                  </h2>
                  <h3>Perkenalkan nama saya <?php echo $value['nama']?> , lahir di <?php echo $value['ttl']?> Tertarik pada bidang it sejak kelas 9 smp. Hobi saya <?php echo $value['hobi']?></h3>
              <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
        </div>

        <!-- KEAHLIAN -->
        <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"My Skill"</h3>
          <?php foreach ($keahlian as $key => $value): ?>
          <div class="ui active progress" data-value="30" data-total="100" id="example5">
           <div class="bar">
            <div class="progress"></div>
             </div>
              <div class="label"><?php echo $value['bahasa']?></div> 
            </div>
            <?php endforeach ?>
        </div>

        <!--PENDIDIKAN -->
        <div class="column"> <h3 style="text-indent: 30px">RIWAYAT PENDIDIKAN</h3>
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
         <?php endforeach ?><br></div>
      </div>
    </div>
  </div>
  <br>  <br>  

  <!-- FORM -->
  <div class="ui container">
    <form class="ui form segment">
  <div class="ui horizontal divider"><p style="text-align: center;" class="ui large">Tell Us About Yourself</p></div>
    <div class="two fields">
    <div class="field">
      <label>Name</label>
      <input placeholder="Name" name="name" type="text" required="">
    </div>
    <div class="field">
      <label>EMAIL</label>
      <input placeholder="email@email" name="name" type="email" required="">
    </div>
  </div>
  <div class="ui form">
  <div class="field">
    <label>Short Text</label>
    <textarea rows="2"></textarea>
  </div>
</div>
<div class="inline field">
    <div class="ui checkbox">
      <input type="checkbox" name="terms">
      <label>I agree to the terms and conditions</label>
    </div>
  </div>
  <div class="ui primary submit button">Submit</div>
</form>
</div>
        
        <br>
    <br>
    
</body>
</html>