<?php
include 'db.php';
include __DIR__ .'/src/partials-php/head.php';
include __DIR__ .'/src/partials-php/header.php';
include __DIR__ .'/src/partials-php/main.php';
include __DIR__ .'/src/partials-php/footer.php';
?>
  <!-- __DIR__ serve per essere piu specifici nel percorso delle cartelle, e stampa il percorso del file
  è utile soprattutto quando ci sono molte cartelle e bisogna risalire più livelli, in caso di errori si puo'
fare il var_dump(__DIR__) cosi da vedere tutto il percorso  -->

  <!-- abbiamo suddiviso le varie parti in partials-php per organizzare meglio il lavoro
      e abbiamo creato il collegamento ai vari file(head, header, main,footer) -->

  <!-- da ricordare il body->si inserisce nell'header l'apertura e la chiusura nel footer compresa di link src e chiusura html -->
