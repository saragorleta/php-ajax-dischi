<?php
include 'src/db.php';

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/dist/style.css">
  <title>Document</title>
</head>
<body>


  <?php foreach ($dischi as $disco) {
    var_dump($disco);

    $immagine= $disco['image'];
    $autore= $disco['author'];
    $titolo=$disco['title'];
    $anno= $disco['year'];

  ?>



    <img src="<?php echo $immagine ?>" alt="">
    <h1><?php echo $autore ?></h1>
    <h2><?php echo $titolo ?></h2>
    <h2><?php echo $disco ?></h2>


  <?php } ?>

</body>
</html>
