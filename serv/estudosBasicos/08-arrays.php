<?php
// Arrays

$carros = array("BMW", "Veloster", "Fusca");
//echo $carros;//erro: Array to string conversion
echo "<hr>";
$carros[] = "Hilux";
print_r($carros);
echo "<hr>";
echo $carros[2];

/////////////////////////////////////

/// Alterando o indici de todos : deu certo 
$carros = array(1 => "BMW", 2 => "Veloster", 3 => "Fusca"); // reconstroi o array 
//echo $carros;//erro: Array to string conversion
echo "<hr>";
print_r($carros);
echo "<hr>";
echo $carros[2]; // muito zica kkkkk
/////////////////////////////////

/// Alterando so o do primeiro: deu certo 
$carros = array(4 => "BMW", "Veloster", "Fusca");

//echo $carros;//erro: Array to string conversion
echo "<hr>";

/// diciona na prossima casa, mesmo q tenha casas vasias antes  
$carros[] = "Hilux";

// especificando o indice >= menor indici existente, se for menor da bug// pelomenos no meu 
$carros[7] = 'Camaros';

print_r($carros);
echo "<hr>";
echo $carros[5]; // muito zica kkkkk
echo "<hr>";
////////////////////////////////////////
//////////outro metodo de declarar

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
print_r($motos);
echo "<hr>";
echo $motos[1];
echo "<hr>";
//////////////////////////////////////
///// outro metodo 

$clientes = []; //$clientes = ["Allan","Bela"];
$clientes[] = "Allan";
$clientes[] = "Bela";
print_r($clientes);
echo "<hr>";
echo $clientes[1];

///////////// count // quantos slots tem o array
echo "<hr>";
echo $carros[5] . '$carros: ' . count($carros);
echo "<hr>";

//////// foreach: pega o array e coloca na variavel valor a cada rodada
foreach ($carros as $valor) {
    echo $valor . "<br>";
}
//// Arrays associativos
$pessoa = array("nome" => "Allan", "idade" => 23, "altura" => 1.77);
echo $pessoa["nome"];
echo "<hr>";
print_r($pessoa);
$pessoa["cidade"] = "Araras";
echo "<hr>";
var_dump($pessoa);
echo "<hr>";
foreach ($pessoa as $i => $v) { // indice e valor 
    echo $i . ': ' . $v . ". <br>";
}
/// Arrays multidimencionais
$times = array(
    "cariocas" => array("vasco", "flamengo", "botafogo"),
    "paulistas" => array("campeao"=>"sao paulo","vic-camp"=>"palmeiras","terceiro"=>"corinthias"),
    "ingleses" => array("arsenal","chealsea","liverpool")
);
echo "<hr>";
print_r($times);
echo "<hr>";
var_dump($times);
echo "<hr>";
echo $times["ingleses"][1];
echo "<hr>";
foreach ($times["paulistas"] as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
