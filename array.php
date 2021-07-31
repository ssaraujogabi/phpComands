<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

$fruta = array(1=>'maca','uva','laranja');
///print_r($fruta);

$fruta[] = "maracuja";
echo($fruta[4]);

$legumes = array();
$legumes[] = 'cenoura';

echo ("<br> $legumes[0]");
echo "<hr>";

//count
$totalLegumes = count($legumes);
echo("total de legumes: $totalLegumes");

echo "<hr>";
//associativo
$associativoArrayy = array("nome"=>"Gabi", "idade"=>21);
$associativoArrayy["cidade"] = "Estancia";
echo($associativoArrayy["cidade"]);
echo "<hr>";
//foreach

foreach ($associativoArrayy as $key => $value) {
	echo($key." - ".$value."<br>");
}
echo "<hr>";
//array multidimensionais
$esporte = array("cariocas"=> array("time1"=>"vasco", "time2"=>"flamengo"),
	             "paulista"=> array("santos","sao paulo"));
echo($esporte["cariocas"]["time1"]);
echo "<br>";
echo "<hr>";
foreach ($esporte["cariocas"] as $key => $value) {
	echo($key.": ".$value."<br>");
}
echo "<hr>";

$keys = array_keys($associativoArrayy);
print_r($keys);
echo "<hr>";



 ?>
</body>
</html>