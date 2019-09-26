<?php include 'header.php' ?>
  
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
          <h2 style="font-size: 50px; color: white; position:absolute;top:50%;left: 40%">
            MY WEBSITE
          </h2>
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
                  <h3><?php echo $value['1nama']?> <?php echo $value['nama']?> , lahir di <?php echo $value['ttl']?> Tertarik pada bidang it sejak kelas 9 smp. Hobi saya <?php echo $value['hobi']?></h3>
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
              <h3>MY SKILL</h3>
              <?php foreach ($keahlian as $key => $value): ?>
                <div class="label">
                  <?php echo $value['bahasa']?>
                </div>
                <div class="ui active indicating progress" id="<?php echo $value['id']?>">
                  <div class="bar">
                    <div class="progress"></div>
                  </div>
                </div>
                <?php endforeach ?>
            </div>

        <!-- PENDIDIKAN -->
            <div class="column">
              <h3 style="text-indent: 30px">RIWAYAT PENDIDIKAN</h3>
               <?php foreach ($pendidikan as $key => $value): ?>
                <div class="ui grid">
                  <div class="three column only">
                    <div class="column">
                      <div class="ui segment">
                        <a class="header" style="font-size: 20px;">
                          <i class="building outline icon"></i><?php echo $value['year']?>
                        </a>
                        <div class="description" style="font-size: 17px">Bersekolah di <a><b><?php echo $value['school'] ?></b></a>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach ?><br>
            </div>
          </div>
        </div>
      </div>
      <br><br> 

      <!-- PORTOFOLIO -->
      <div class="ui horizontal divider container" id="about">
        <p style="text-align: center;" class="ui large">
          MY PORTOFOLIO
        </p>
      </div>
          <div class="ui vertical stripe">
            <div class="ui middle aligned stackable grid container">
              <div class="row">
                <div class="eight wide column">
                  <h3 class="ui header">
                    DASHBOARD SEDERHANA 
                  </h3>
                  <p>
                    Pembuatan Dashboard admin Pegawai/siswa. Menggunakan HTML 5 dan CSS 3.Dengan menu navbar di samping dan ada form dan hasil tabel di administrator tersebut
                  </p>
                </div>
                <div class="six wide right floated column">
                  <a class="" href="img/login.png" data-lightbox="dashboard" data-title="Ini adalah tampilan halaman login.">
                    <img src="img/login.png" style="max-width: 200px">
                  </a>
                </div>
              </div>
              <div class="row">
              <div class="eight wide column">
                <h3 class="ui header">BLU COFFESHOP</h3>
                <p>Pembuatan Website Blu COffeeshop</p>
              </div>
              <div class="six wide right floated column">
                <a class="ui basic pink button" href="img/coffeeshop.png" data-lightbox="coffee" data-title="Ini adalah Halaman utama Blu Coffee shop">
                  GALLERY
                </a>
                <a href="http://wwwaldy.000webhostapp.com" target="blank"><button class="ui basic black button">Demo</button></a></p>
              </div>
              </div>
            </div>
          </div>
      </div>
      <br><br>

       <!-- FORM -->
      <div class="ui container" id="contact">
        <form class="ui form" action="thankyou.php" method="post">
          <div class="ui horizontal divider">
            <p style="text-align: center;" class="ui large">
            contact me
            </p>
          </div>
          <div class="two fields">
            <div class="field">
              <label>NAME</label>
               <input placeholder="NAME" name="name" type="text">
            </div>
            <div class="field">
              <label>EMAIL</label>
               <input placeholder="E-mail Address" name="email" type="text">
            </div>
          </div>
          <div class="ui form">
            <div class="field">
              <label>YOUR MESSAGE</label>
              <textarea rows="2"></textarea>
            </div>
          </div><br>
          <div class="inline field">
            <div class="ui checkbox">
              <input type="checkbox" name="terms">
              <label>I Agree to the Terms and Conditions</label>
            </div>
          </div>
          <div class="ui basic primary submit button">SUBMIT</div>
          <div class="ui error message"></div>
        </form>
      </div>
      <br><br>
  <!-- footer -->
  <?php include 'footer.php' ?>

   <!-- galeri -->
  <?php foreach ($portofolio as $key => $value): ?>
  <a href="<?php echo $value['img'] ?>" data-lightbox="<?php echo $value['data'] ?>" data-title="<?php echo $value['keterangan'] ?>"></a>
  <?php endforeach ?>