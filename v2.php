<?php include 'header.php' ?>
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
                <h2 style="font-size: 50px; color: white; position:absolute;top:50%;" class="text container"></h2>
              </div>
        </header>
        <!-- PENUTUP HEADER -->
             <div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
         <h2 class="ui header">
                  MY PROFILE
                  </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="ui items container">
  <div class="item">
    <div class="image">
    	<?php foreach ($profil as $key => $value): ?>
      <img src="img/smp.jpg">
    </div>
    <div class="content">
      <a class="header"><?php echo $value['nama']?></a>
      <div class="meta">
        <span>Description</span>
      </div>
      <div class="description">
        <p>Perkenalkan nama saya <?php echo $value['nama']?> , lahir di <?php echo $value['ttl']?> Tertarik pada bidang it sejak kelas 9 smp. Hobi saya <?php echo $value['hobi']?></p>
      </div>
    </div>  <?php endforeach ?>
  </div></div>
        <!-- MY SKILL -->
	<div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
         <h2>MY SKILL</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="ui four cards container">
   <?php foreach ($keahlian as $key => $value): ?>
  <div class="ui card"><br>
    <div class="image">
      <img src="<?php echo $value['img']?>">
    </div>
    <div class="content">
      <div class="header">
      <div class="ui active indicating progress" <?php echo $value['id']?> >
           <div class="bar">
            <div class="progress"></div>
             </div>
              <div class="label"><?php echo $value['bahasa']?></div> 
            </div></div>
    </div>
  </div>
 <?php endforeach ?>
</div>
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

<!-- PORTOFOLIO -->     
<div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
         <h2 class="ui header">
                  PORTOFOLIO
                  </h2>
        </div>
      </div>
    </div>
  </div>
	<div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
        </div>
      </div>
    </div>
  </div>
<!-- CONTACT ME -->
	<div class="ui container" id="contact">
    <form class="ui form" action="thankyou.php" method="post">
 <div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
         <h2 class="ui header">
                  CONTACT ME
                  </h2>
        </div>
      </div>
    </div>
  </div>
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
  <div class="ui basic primary submit button">Submit</div>
  <div class="ui error message"></div>
</form>
</div>
<div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
         <h2 class="ui header">
                  OR
                  </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="ui container"><br>
  <button class="ui facebook button">
  <i class="facebook icon"></i>
  <a href="https://facebook.com/renaldy.p.s" target="_blank">FACEBOOK</a>
</button>
<button class="ui instagram button">
  <i class="instagram icon"></i>
  <a href="https://instagram.com/renaldyp_s" target="_blank">INSTAGRAM</a>
</button></div><br>
<!-- PENutup -->
<?php include 'footer.php' ?>