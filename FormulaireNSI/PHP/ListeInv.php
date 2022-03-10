<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Liste des invités</title>
  </head>
  <body>
    <h1>Liste des invités :</h1><br><br>
    <?php
    $handle = fopen("Invites.txt","r");
    if ($handle){
    	while (!feof($handle)){
    	$buffer = fgets($handle);
    	echo $buffer."<br>";
    	}
    fclose($handle);
    }
    ?>
  </body>
</html>
