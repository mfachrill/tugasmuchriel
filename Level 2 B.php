<?php

$angka = array();
for ($i = 100; $i <= 2000; $i++) {
  $angka[] = $i;
}

$angkaterbesar = max($angka);


echo "Angka Terbesar Dari Bilangan 100 Adalah:  " . $angkaterbesar;
?>