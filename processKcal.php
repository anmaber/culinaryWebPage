
<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Author" content="Anna Bernaś">
        <title>Pasta i Basta - twoje zapotrzebowanie</title>
        <link rel="stylesheet" type="text/css" href="css/top.css" /> 
        <link rel="stylesheet" type="text/css" href="css/articles.css" /> 

    </head>

    <body>
    <img src = "images/bg_menu.png"/>
    <h1>Twoje wyniki:</h1>
    Aby osiagnąć swój cel potrzebujesz przyjmować: 

    <?php
$gender = $_GET["gender"];
$weigth =$_GET["weigth"];
$heigth = $_GET["heigth"];
$activity = $_GET["aktywnosc"];
$age = $_GET["age"];
$goal = $_GET["cel"];

$ppm = (10*$weigth) + 6.25*$heigth - 5*$age;

if($gender=="male"){
    $ppm += 5; 
}
else{
    $ppm-=161;
}


switch ($activity) {
    case 1:
        $ppm *= 1.2;
        break;
    case 2:
        $ppm *= 1.375;
        break;
    case 3:
        $ppm *= 1.55;
        break;
    case 4:
        $ppm *= 1.715;
        break;
    case 5:
        $ppm *= 1.9;
        break;
}

switch($goal){
    case 1:
        $ppm+=200;
        break;

    case 3:
        $ppm-=200;
        break;
} 
echo ceil($ppm)."kcal";
?>
                <a href="/fun.html">
                <h2>Powrót</h2>
                </a>
    
    <img src = "images/bg_menu.png"/>
    </body>
</html>

