
<?php include 'header.php' ?>
  <div class="ui vertical stripe quote segment container">
    <div class="ui equal width stackable internally grid">
      <div class="center aligned row">
        <div class="column">
          <h2 class="ui header">
                  <img src="img/ra.png" class="ui circular image">
                 RENALDY PERMANA SUNDAWA
                  </h2>
                  <h3>WEBSITE PERSONAL<br>Ini adalah website personal yang menggunakan php,html ,css dan semantic ui</h3>
        </div>
      </div>
    </div>
  </div><br>
  <div class="ui two cards container">
   <?php foreach ($home as $key => $value): ?>
  <div class="ui card" >
    <a href="<?php echo $value['href'] ?>">
    <div class="image">
      <img src="<?php echo $value['img']?>" width="542px" height="300px">
    </div>
    </a>
    <div class="content">
      <div class="header"><?php echo $value['judul']?></div>
      <div class="description"><?php echo $value['deskripsi']?></div>
    </div>
  </div>
 <?php endforeach ?>
</div><br>
<?php include 'footer.php' ?>