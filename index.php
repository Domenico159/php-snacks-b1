<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--
        Snack 1:
         Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
         Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
         Stampiamo a schermo tutte le partite con questo schema:
         Olimpia Milano - Cantù | 55-60
         
     -->



    <?php


    $matches = [
        
        [
            'squadra casa' => 'Palermo',
            'squadra ospite' => 'Catania',
            'punti squadra casa' => rand(1,100),
            'punti squadra ospite' => rand(1,100),
        ],
        [
            'squadra casa' => 'Milano',
            'squadra ospite' => 'Roma',
            'punti squadra casa' => rand(1,100),
            'punti squadra ospite' => rand(1,100),
        ],
        [
            'squadra casa' => 'Foggia',
            'squadra ospite' => 'Livorno',
            'punti squadra casa' => rand(1,100),
            'punti squadra ospite' => rand(1,100),
        ],
        [
            'squadra casa' => 'Piacenza',
            'squadra ospite' => 'Brescia',
            'punti squadra casa' => rand(1,100),
            'punti squadra ospite' => rand(1,100),
        ],
        [
            'squadra casa' => 'Bergamo',
            'squadra ospite' => 'Torino',
            'punti squadra casa' => rand(1,100),
            'punti squadra ospite' => rand(1,100),
        ],
        
    ];


     ?>

     <!-- Print snack 1 -->
     <h1>Snack 1</h1>
     <?php for($i = 0 ; $i < count($matches);$i++) { ?> 

       <h2><?php echo $matches[$i]['squadra casa'] . '---' . $matches[$i]['squadra ospite'] . ' | ' . $matches[$i]['punti squadra casa'] . ' - ' . $matches[$i]['punti squadra ospite'] ?></h2>
    
    <?php } ?>


    <!-- fine snack 1 -->


    <!-- Snack 2
    Passare come parametri GET (query string) name, mail e age
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri
    2. che mail contenga un punto e una chiocciola
    3. che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
     -->

     <h1>Snack 2</h1>

     <?php 

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    
    if(empty($name) || empty($mail) || empty($age)){
        echo 'Dati mancanti impossibile eseguire il log-in ' ;
    }elseif ((strlen($name) > 3) &&  (strpos($mail,'.') ) && (strpos($mail,'@') )  && (is_numeric($age))){
        echo 'Accesso eseguito';
    }else{
        echo 'Accesso negato , uno o più parametri non sono idonei';
    }


     ?>

     <!-- Fine snack 2 -->


     <!-- Snack 3
     Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
      -->
      <h1>Snack 3</h1>

      <?php 
      
      $numeri = [];

      while(count($numeri) < 15 ){

        $num = rand(1,50);

        if(!in_array($num,$numeri)){
            $numeri[] = $num;
        }
         
      }

      var_dump($numeri);

      ?>




</body>

</html>