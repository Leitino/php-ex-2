<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/PHP/stile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title></title>
  </head>
  <body>
    <?php

        $liste = [
          [
            'messaggio'=> 'seguire lezione',
            'boolean'=> 'completato',
          ],
          [
            'messaggio'=> 'mangiare',
            'boolean'=> 'completato',
          ],
          [
            'messaggio'=> 'fare esercizi',
            'boolean'=> 'completato',
          ],
          [
            'messaggio'=> 'attività fisica',
            'boolean'=> 'incompleto',
          ],
          [
            'messaggio'=> 'doccia',
            'boolean'=> 'completato',
          ],
          [
            'messaggio'=> 'mangiare',
            'boolean'=> 'incompleto',
          ],
          [
            'messaggio'=> 'videogiocare',
            'boolean'=> 'incompleto',
          ],
          [
            'messaggio'=> 'dormire',
            'boolean'=> 'incompleto',
          ],

        ];
      ?>
      <?php foreach ($liste as $lista) {
       //var_dump($lista['boolean']);//
        if ($lista['boolean']=='completato') {?>
          <div class="completato flex">
            <h1> <?php echo $lista['messaggio']; ?></h1>
          </div>
      <?php
        }
        else {?>
          <div class="incompleto flex">
            <h1> <?php echo $lista['messaggio']; ?></h1>
          </div>
      <?php
        }
    } ?>

    <script src ="main.js">

    </script>
  </body>
</html>
