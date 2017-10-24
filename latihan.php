<?php

echo "================================".'<br>';
echo "Perhitungan bilangan 21 dengan 3".'<br>';
echo "================================".'<br>';

require_once 'penjumlahan.php';

$penjumlahan = new penjumlahan;
$penjumlahan->set_penjumlahan(21,3);
echo "penjumlahan = ".$penjumlahan->get_penjumlahan().'<br>';
echo "pengurangan = ".$penjumlahan->get_pengurangan().'<br>';
echo "perkalian = ".$penjumlahan->get_perkalian().'<br>';
echo "pembagian = ".$penjumlahan->get_pembagian().'<br>';

?>