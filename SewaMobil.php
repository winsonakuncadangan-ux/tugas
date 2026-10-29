<?php
function tarifHarian($jenis) {
    if (strtolower($jenis) == "sedan") {
        return 300000;
    } else if (strtolower($jenis) == "suv") {
        return 500000;
    } else {
        return 0;
    }
}

$jenis = strtolower(trim(readline("Jenis mobil (Sedan/SUV): ")));
$lamaSewa = (int) readline("Lama sewa (hari): ");

$tarif = tarifHarian($jenis);

if ($tarif == 0 || $lamaSewa <= 0) {
    echo "Jenis mobil atau lama sewa tidak valid.\n";
} else {
    $subtotal = 0;

    for ($hari = 1; $hari <= $lamaSewa; $hari++) {
        echo "Hari ke-$hari: Rp" .
             number_format($tarif, 0, ',', '.') . "\n";

        $subtotal += $tarif;
    }

    if ($lamaSewa > 3) {
        $diskon = $subtotal * 10 / 100;
    } else {
        $diskon = 0;
    }

    $total = $subtotal - $diskon;

    echo "Subtotal: Rp" .
         number_format($subtotal, 0, ',', '.') . "\n";
    echo "Diskon: Rp" .
         number_format($diskon, 0, ',', '.') . "\n";
    echo "Total pembayaran: Rp" .
         number_format($total, 0, ',', '.') . "\n";
}
?>
