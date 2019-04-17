<?php
  $gewicht = $_GET["gewicht"];// haalt values uit HTTP
  $lengte = $_GET["lengte_cm"];
  $bmi;

//voor challange 2

if (is_numeric($gewicht)){
  echo "";
}else {
  echo $gewicht . " <- This is NOT a number, please enter a number. <br>";
  $gewicht = 0;
  $bmi = "BMI cannot be calculated <br><br>";
  echo $bmi;
}

  if (is_numeric($lengte)){
    echo "";
  }else {
    echo $lengte . " <- This is NOT a number, please enter a number. <br>";
    $lengte = 0;
    $bmi = "BMI cannot be calculated <br><br>";
    echo $bmi;
  }

  $lengte = $lengte / 100;

  BMLcalc($gewicht,$lengte);

function BMLcalc($gewicht,$lengte){
  echo "Gewicht = " . $gewicht . " kg<br>";
  echo "Lengte = " . $lengte . " meter<br>";
  $bmi = $gewicht / ($lengte*$lengte);


  switch($bmi){


    case $bmi == -1 and $bmi < 0.1:
    echo "Bmi kan niet bepaald worden.";
    break;

    case $bmi > 0.1 and $bmi < 18.5:
    echo "Bmi = " . round($bmi, 1) . " - u bent Ondergewicht.";
    break;

    case $bmi > 18.5 and $bmi < 25:
    echo "Bmi = " . round($bmi, 1) . " - u heeft een normaal gewicht.";
    break;

    case $bmi > 25 and $bmi < 27:
    echo "Bmi = " . round($bmi, 1) . " - u heeft Licht overgewicht.";
    break;

    case $bmi > 27 and $bmi < 30:
    echo "Bmi = " . round($bmi, 1) . " - u heeft Matig overgewicht.";
    break;

    case $bmi > 30 and $bmi < 40:
    echo "Bmi = " . round($bmi, 1) . " - u heeft Obesitas.";
    break;

    case $bmi > 40:
    echo "Bmi = " . round($bmi, 1) . " - u heeft Morbide obesitas.";
    break;

  }
}
?>
