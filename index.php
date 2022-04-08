<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p>SNACK 1********************************************************************************************************************************************************************</p>

<?php 
    $array_partite = [
      [
        'casa' => [
          'team' => 'Olimpia Milano',
          'punti' => 55
        ],
        'ospiti' => [
          'team' => 'Cantù',
          'punti' => 60
        ]
      ],
      [
        'casa' => [
          'team' => 'Pescara',
          'punti' => 87
        ],
        'ospiti' => [
          'team' => 'Teramo',
          'punti' => 79
        ]
      ]
    ]
  ?>
  <div>
    <?php 
      for ($i = 0; $i < count($array_partite); $i++) { ?>
        <h2><?= $array_partite[$i]['casa']['team'] ?> - <?= $array_partite[$i]['ospiti']['team'] ?></h2>
        <p><?= $array_partite[$i]['casa']['punti'] ?> - <?= $array_partite[$i]['ospiti']['punti'] ?></p>
      <?php }
    ?>
  </div>

  <p>SNACK 2********************************************************************************************************************************************************************</p>
  
  <form action="" method="get">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">
    <label for="age">Età</label>
    <input type="text" name="age" id="age">
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email">
    <button>Accedi</button>
  </form>
  <?php 
    $name = $_GET['name'] . '<br>';
    $age = $_GET['age'] . '<br>';
    $email = $_GET['email'];

    if (strlen($name) < 3 ) {
      echo "<p> accesso non autorizzato</p>";
    }

    var_dump(strlen($name))
  ?>


</body>
</html>