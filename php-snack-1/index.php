<?php
$matches = [
  [
    'homeTeam' => 'Acqua S.Bernardo Cantù',
    'awayTeam' => 'Fortitudo Lavoropiù Bologna',
    'homePts' => 67,
    'awayPts' => 80
  ],
  [
    'homeTeam' => 'Unahotels Reggio Emilia',
    'awayTeam' => 'Banco di Sardegna Sassari',
    'homePts' => 78,
    'awayPts' => 85
  ],
  [
    'homeTeam' => 'De Longhi Treviso',
    'awayTeam' => 'Umana Reyer Venezia',
    'homePts' => 86,
    'awayPts' => 88
  ],
  [
    'homeTeam' => 'A|X Armani Exchange Milano',
    'awayTeam' => 'Carpegna Prosciutto Pesaro',
    'homePts' => 97,
    'awayPts' => 93
  ],
  [
    'homeTeam' => 'Happy Casa Brindisi',
    'awayTeam' => 'Dolomiti Energia Trentino',
    'homePts' => 74,
    'awayPts' => 73
  ],
  [
    'homeTeam' => 'Germani Brescia',
    'awayTeam' => 'Vanoli Basket Cremona',
    'homePts' => 85,
    'awayPts' => 89
  ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    for ($i=0; $i < count($matches); $i++) { 
     echo $matches[$i]['homeTeam'] . ' - ' . $matches[$i]['awayTeam'] . ' | ' . $matches[$i]['homePts'] . ' - ' . $matches[$i]['awayPts'];
    ?><br><?php
    }
    ?>
  </p>
</body>
</html>