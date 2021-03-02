
<main>

  <?php foreach ($dischi as $disco) {
    $immagine= $disco['image'];
    $autore= $disco['author'];
    $titolo=$disco['title'];
    $anno= $disco['year'];

  ?>
      <div class="disco">
        <img src="<?php echo $immagine ?>" alt="">
        <h1><?php echo $autore ?></h1>
        <h2><?php echo $titolo ?></h2>
        <h2><?php echo $anno ?></h2>
      </div>

  <?php } ?>

</main>
