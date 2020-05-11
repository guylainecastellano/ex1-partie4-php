<?php
//on déclare une fonction
function text ($phrase) {
//on retourne le paramètre
return $phrase;
}
//on passe un paramètre text à la fonction
text ('chaine de caractère');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex1 partie4 php</title>
</head>
<body>
  <?php
  //si on affiche le paramètre
  echo text('chaine de caractère');
//echo text
//echo de la variable
  $word = text ('ceci est une chaine de caractères');?>
  <p><?php echo $word;?></p>
</body>
</html>
