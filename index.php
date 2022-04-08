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
  
  <form action="" method="GET">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">
    <label for="age">Età</label>
    <input type="text" name="age" id="age">
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email">
    <button>Accedi</button>
  </form>
  <?php 

  if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['email'])) {
      $name = $_GET['name'];
      $age = $_GET['age'];
      $email = $_GET['email'];
      $pos_chiocciola = strpos($email, '@');
      if (strlen($name) > 3) {
        echo "<p>accesso autorizzato</p>";
      } elseif (is_numeric($age)) {
        echo "<p>accesso autorizzato</p>";
      } elseif ($pos_chiocciola !== false && strpos($email, '.', $pos_chiocciola) !== false) {
        echo "<p>accesso autorizzato</p>";
      }; 
    }

  ?>
<p>NON FUNZIONA BENE</p>
<br><br>
<p>SNACK 4********************************************************************************************************************************************************************</p>
<?php 
random(1, 100, 15);
function random($min, $max, $length) {
  $array_numeri = [];

  while (count($array_numeri) < $length) {
    $random_num = rand($min, $max);
    if (!in_array($random_num, $array_numeri)){
      $array_numeri[] = $random_num;
    }
  };
  var_dump($array_numeri);
  echo 'i numeri sono <br>';
  foreach ($array_numeri as $num){
    echo $num . "<br>";
  }
}

?>
<br><br>
<p>SNACK 5********************************************************************************************************************************************************************</p>
<?php 
  $text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero in repellat voluptates maxime minima optio quos possimus commodi nemo. Cumque aliquam eligendi error minus assumenda esse debitis, autem eos temporibus?
  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus voluptas eum nisi dolore, ab quos repudiandae ut amet similique, id exercitationem qui, suscipit sint officiis animi cumque veritatis corrupti earum?
  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum voluptates repudiandae iusto, beatae omnis error quas assumenda corrupti fugit exercitationem culpa eos laudantium explicabo et earum debitis hic ratione! Eligendi!
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, omnis! Accusamus, recusandae! Officiis, culpa. Quidem cupiditate, quod delectus, vitae ea odit dolores debitis, quos non fugiat voluptates voluptatem quae dolore?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero in repellat voluptates maxime minima optio quos possimus commodi nemo. Cumque aliquam eligendi error minus assumenda esse debitis, autem eos temporibus?
  Lorem ipsum dolor, sit amet consectetur adipisicing elit.';

  $parags = explode('.', $text);
  echo $text;
  echo " <br><br> I PARAGRAFI SONO: <br>";
  foreach ($parags as $parag){
    echo $parag . "<br><br>" ;
  }


?>



</body>
</html>