<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15-conditions.php</title>
</head>
<body>
    <h1>15-conditions.php</h1>
    <p>Créez 15-conditions.php : générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X : Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien".</p>
    <?php
      

  $chiffre = rand(0, 10);
    if($chiffre <=3){
        echo "$chiffre : Nul, étudie la prochain fois";
    }
    elseif($chiffre <= 5){
        echo "$chiffre : Peut mieux faire";
    }
    elseif($chiffre <= 7){
        echo "$chiffre : Bien";
    }
    else{
        echo "$chiffre : Tres bien";
        
    }



    ?>
</body>
</html>