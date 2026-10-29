<?php
function bonusSaldo($setoran) {
    if ($setoran >= 100000) {
        return $setoran * 5 / 100;
    } else {
        return 0;
    }
}

$saldo = (int) readline("Saldo awal: Rp");
$setoran = (int) readline("Setoran setiap bulan: Rp");
$jumlahBulan = (int) readline("Jumlah bulan: ");

if ($saldo < 0 || $setoran < 0 || $jumlahBulan <= 0) {
    echo "Data yang dimasukkan tidak valid.\n";
} else {
    for ($bulan = 1; $bulan <= $jumlahBulan; $bulan++) {
        $bonus = bonusSaldo($setoran);
        $saldo += $setoran + $bonus;

        echo "Bulan ke-$bulan\n";
        echo "Setoran: Rp" .
             number_format($setoran, 0, ',', '.') . "\n";
        echo "Bonus: Rp" .
             number_format($bonus, 0, ',', '.') . "\n";
        echo "Saldo akhir: Rp" .
             number_format($saldo, 0, ',', '.') . "\n";
        echo "----------------------\n";
    }
}
?>
