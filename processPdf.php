<?php

$name = $_POST["recipe"];
$htmlname = $name.".html";
$recipe= file_get_contents($htmlname);

$DOM = new DOMDocument;
$DOM->loadHTML($recipe);

$finder = new DomXPath($DOM);
$classname="eng";
$nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");

$fileName = $name.".txt";
$file = fopen($fileName,"w+");
fwrite($file, $name);

fwrite($file, "\n\nSkładniki:\n\n");

// echo "Składniki:";
// echo "<br>";

$counter = 1;
foreach($nodes as $node)
{
    fwrite($file, $counter);
    fwrite($file, ". ");
    fwrite($file, $node->nodeValue);
    fwrite($file, "\n");
    // echo $node->nodeValue;
    // echo "<br>";
    $counter++;
}
fwrite($file, "\n\nPrzygotowanie:\n\n");

// echo "<br>";
// echo "Przygotowanie:";
// echo "<br>";
$classname="prep";
$nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
$counter =1;
foreach($nodes as $node)
{
    fwrite($file, $counter);
    fwrite($file, ". ");
    fwrite($file, $node->nodeValue);
    fwrite($file, "\n");
    $counter++;
    // echo $node->nodeValue;
    // echo "<br>";
}

fclose($file);

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
header('Content-Length: ' . filesize($fileName));
header('Pragma: public');

//Clear system output buffer
flush();

//Read the size of the file
readfile($fileName);

//Terminate from the script
die();
//header("Location: szakszuka.html");
?>