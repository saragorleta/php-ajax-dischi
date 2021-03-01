<?php
include 'db.php';

foreach ($dischi as $disco) {
  $immagine= $disco['image'];
  $autore= $disco ['author'];
  $titolo=$disco ['title'];
  $anno= $disco ['year'];
};

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<img src="<?php echo $immgine ?>" alt="">
<h1><?php echo $autore ?></h1>
<h2><?php echo $titolo ?></h2>
<h2><?php echo $disco ?></h2>

</body>
</html>
