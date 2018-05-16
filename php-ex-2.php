<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/PHP/style.css">
    <title>php-ex-2</title>
  </head>
  <body>
    <?php
    $password= $_GET['password'];
    var_dump($password);

     ?>
     <?php
     if ($password == 'Boolean') {?>
      <h1 class ='correct'><?php echo 'Password corretta';?></h1>
      <?php
      }

     else {?>
       <h1 class ='wrong'><?php echo 'Password non corretta';?></h1>
       <?php
     }?>


   </body>
</html>
