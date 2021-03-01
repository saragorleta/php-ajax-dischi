<?php
include 'db.php';

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/style.css?v=<?php echo time(); ?>">
  <title>Document</title>
</head>
<body>

<header>


</header>
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

<footer>


</footer>



<script src="dist/script.js" charset="utf-8"></script>

</body>
</html>
