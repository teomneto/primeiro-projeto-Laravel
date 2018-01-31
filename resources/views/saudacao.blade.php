<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Saudação</title>
  </head>
  <body>

    <?php for($i = 0;$i < 100; $i++): ?>
        <!-- //PHP no meio do <!DOCTYPE html> -->
        <!-- comentario no HTML nao aparece para usuario -->
<!-- comentario posso usar duas chaves da no mesmo -->

        <h1> Ola <?= $i ?></h1>

        <h1> Ola {{ $i }} </h1>
      <?php endfor; ?>

    <h1>OLA MUNDO... TUDO BEM COM VOCE.</h1>



  </body>
</html>
