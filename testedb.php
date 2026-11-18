<?php

require_once "Bebida.php";
require_once "Sobremesa.php";

$bebida = new Bebida("Refrigerante", 350, false, 7.50);

echo "Bebida: " . $bebida->getNome() . "<br>";
echo "Volume: " . $bebida->getVolume() . "<br>";
echo "Alcoólico: " . ($bebida->getAlcoolico() ? "Sim" : "Não") . "<br>";
echo "Preço: R$ " . $bebida->getPreco() . "<br><br>";

$sobremesa = new Sobremesa("Sorvete", 20.00);

echo "Sobremesa: " . $sobremesa->getNome() . "<br>";
echo "Preço antes do desconto: R$ " . $sobremesa->getPreco() . "<br>";

$sobremesa->aplicarDesconto(10);

echo "Preço depois do desconto: R$ " . $sobremesa->getPreco() . "<br>";

?>