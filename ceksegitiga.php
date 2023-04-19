<?php

$bilangan1 = $_POST['bilangan1'];
$bilangan2 = $_POST['bilangan2'];
$bilangan3 = $_POST['bilangan3'];

if ($bilangan1 == $bilangan2 && $bilangan2 == $bilangan3) {
    echo "SAMA SISI";
} elseif ($bilangan1 == $bilangan2 || $bilangan1 == $bilangan3 || $bilangan2 == $bilangan3) {
    echo "SAMA KAKI";
} else {
    echo "SEMBARANG";
}

?>