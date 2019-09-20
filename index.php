<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="img/png" href="img/ra.png" />
	<title>RA</title>
	<link rel="stylesheet" type="text/css" href="dist/semantic.css">	
	<link rel="stylesheet" type="text/css" href="index.css"><link rel="stylesheet" type="text/css" href="dist/components/progress.css">
  <link rel="stylesheet" type="text/css" href="dist/css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="dist/components/progress.css">
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

            'id' => 'id="example2"',
            'bahasa' => 'C++',
        ],
          [

            'id' => 'id="example3"',
            'bahasa' => 'HTML',
        ],
          [

            'id' => 'id="example4"',
            'bahasa' => 'JAVA',
        ],  [

            'id' => 'id="example5"',
            'bahasa' => 'CSS',
        ],  [

            'id' => 'id="example6"',
            'bahasa' => 'PHP',
        ],  [

            'id' => 'id="example7"',
            'bahasa' => 'MYSQL',
        ],
    ];
$portofolio =[
        [
          'img' => 'img/dashboard.png',
          'data' => 'dashboard',
          'keterangan' => 'ini adalah tampilan dashboard',

        ],
        [
          'img' => 'img/data-siswa.png',
          'data' => 'dashboard',
          'keterangan' => 'ini adalah tampilan data siswa',

        ],
        [
          'img' => 'img/form-izin.png',
          'data' => 'dashboard',
          'keterangan' => 'ini adalah tampilan form izin',
        ],
        [
          'img' => 'img/about.png',
          'data' => 'coffee',
          'keterangan' => 'ini adalah Halaman tentang Blu COFFEESHOP',

        ],
        [
          'img' => 'img/testimoni.png',
          'data' => 'coffee',
          'keterangan' => 'ini adalah halaman testimoni Pelanggan',
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
                <a class="item" href="#about" >About</a>
                <a class="item" href="#contact">Contact Me</a>
            </div>
        </div>
        <!-- Header -->
        <header class="bgimg"id="home">
              <div class="ui text container">
                <h2 style="font-size: 50px; color: white; position:absolute;top:50%;" class="text container"><?php include 'header.php'; ?></h2>
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
        <div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"My Skill"</h3>
          <?php foreach ($keahlian as $key => $value): ?>
          <div class="ui active indicating progress" <?php echo $value['id']?> >
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

  <!-- PORTOFOLIO -->

  <div class="ui horizontal divider container" id="about"><p style="text-align: center;" class="ui large">MY PORTOFOLIO</p></div>
  <div class="ui vertical stripe">
    <div class="ui middle aligned stackable grid container">
    <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">DASHBOARD SEDERHANA </h3>
          <p>Pembuatan Dashboard admin Pegawai/siswa. Menggunakan HTML 5 dan CSS 3.Dengan menu navbar di samping dan ada form dan hasil tabel di administrator tersebut</p>
        </div>
        <div class="six wide right floated column">
          <a class="ui basic pink button" href="img/login.png" data-lightbox="dashboard" data-title="Ini adalah tampilan halaman login.">GALLERY</a>
        </div>
      </div>
       <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Blu coffeeshop</h3>
          <p>Pembuatan website blu Coffeshop <a href="http://wwwaldy.000webhostapp.com"
            ><button class="ui  button">Tampilan website online</button></a></p>
        </div>
        <div class="six wide right floated column">
          <a class="ui basic pink button" href="img/coffeeshop.png" data-lightbox="coffee" data-title="Ini adalah Halaman utama Blu Coffee shop">GALLERY</a>
        </div>
      </div>
    </div>
  </div>
<br><br>
  <!-- FORM -->
  <div class="ui container" id="contact">
    <form class="ui form" action="" method="post">
  <div class="ui horizontal divider"><p style="text-align: center;" class="ui large">contact me</p></div>
    <div class="two fields">
    <div class="field">
      <label>Name</label>
      <input placeholder="Name" name="name" type="text" >
    </div>
    <div class="field">
      <label>EMAIL</label>
      <input placeholder="E-mail Address" name="email" type="text" >
    </div>
  </div>
  <div class="ui form">
  <div class="field">
    <label>Short Text</label>
    <textarea rows="2"></textarea>
  </div>
</div><br>
<div class="inline field">
    <div class="ui checkbox">
      <input type="checkbox" name="terms">
      <label>I agree to the terms and conditions</label>
    </div>
  </div>
  <div class="ui basic primary submit button" type="button" id="test">Submit</div>
  <div class="ui error message"></div>
</form>
</div>
        <br>
    <br>
</div>

<!-- footer -->
  <div>
    <p style="text-align: center; font-size: 15px;" class="ui inverted vertical footer segment"><?php include 'footer.php' ?></p>
  </div>
    <!-- galeri -->
  <?php foreach ($portofolio as $key => $value): ?>
  <a href="<?php echo $value['img'] ?>" data-lightbox="<?php echo $value['data'] ?>" data-title="<?php echo $value['keterangan'] ?>"
></a>
  <?php endforeach ?>
<!-- TES DOANG-->
    <div class="ui modal test">
  <i class="close icon"></i>
  <div class="header">
    THANK YOU
  </div>
  <div class="image content">
    <div class="description">
      <div class="ui header">DEAR, <?php echo $_POST['name']; ?></div>
      <p>we will contact you on <?php echo $_POST['email']; ?></p>
      <p>Is it okay to use this email?</p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Nope
    </div>
    <div class="ui positive right labeled icon button">
      okay
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

<!-- -->
<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.7/d3.min.js"></script>
  <script src="dist/js/lightbox-plus-jquery.js"></script>
    <script src="dist/semantic.js"></script>
    <script src="dist/semantic.min.js"></script>
    <script src="dist/components/progress.js"></script>
  <script src="dist/components/form.js"></script>
    <script srce="dist/components/modal.js"></script>
    <script>
      $('.ui.form')
  .form({
    fields: {
      name: {
        identifier: 'name',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      }, 
      email: {
        identifier: 'email',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter a email'
          }
        ]
      },
      terms: {
        identifier: 'terms',
        rules: [
          {
            type   : 'checked',
            prompt : 'You must agree to the terms and conditions'
          }
        ]
      }
    }
  })
;
$('#example2').progress({
  percent: 54
});

$('#example3').progress({
  percent: 80
});

$('#example4').progress({
  percent: 30
});

$('#example5').progress({
  percent: 30
});

$('#example6').progress({
  percent: 40
});

$('#example7').progress({
  percent: 30
});

$('a[href*="#"]').on('click', function(e) {
  e.preventDefault()

  $('html, body').animate(
    {
      scrollTop: $($(this).attr('href')).offset().top,
    },
    500,
    'linear'
  )
});
$(function(){
  $("#test").click(function(){
   duration: 2000,
    $(".test").modal('show');
  });
  $(".test").modal({
    closable: true
  });
});
    </script>
</body>
</html>