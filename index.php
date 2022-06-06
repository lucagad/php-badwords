<?php

$paragraph_raw = 'Arrivato a New York per una breve pausa, Newt Scamander pensa che tutto stia andando per il verso giusto, se non fosse per la fuga di alcuni degli Animali Fantastici che potrebbero causare molti problemi sia nel mondo magico che in quello babbano.';

$bad_word = $_GET['word'];
$paragraph_clear = str_replace($bad_word,'***',$paragraph_raw);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BadWords</title>
</head>
<body>

  <h2>Questo è il paragrafo scelto:</h2>
  <p> <?php echo $paragraph_raw ?></p>
  <h4>Lunghezza paragrafo: <?php echo strlen($paragraph_raw) ?> caratteri</h4>

  <h2>Questo è il medesimo paragrafo, ma censurato:</h2>
  <p> <?php echo $paragraph_clear ?></p>
  <h4>Lunghezza paragrafo: <?php echo strlen($paragraph_clear) ?> caratteri</h4>

</body>
</html>