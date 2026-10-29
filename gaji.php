<?php
function uangLembur($golongan) {
    if (strtoupper($golongan) == "A") {
        return 50000;
    } else if (strtoupper($golongan) == "B") {
        return 75000;
    } else if (strtoupper($golongan) == "C") {
        return 100000;
    } else {
        return 0;
    }
}

$golongan = strtoupper(trim(readline("Golongan (A/B/C): ")));
$gajiHarian = (int) readline("Gaji pokok per hari: Rp");
$hariKerja = (int) readline("Jumlah hari kerja: ");

$lemburHarian = uangLembur($golongan);

if ($lemburHarian == 0 || $gajiHarian < 0 || $hariKerja <= 0) {
    echo "Data yang dimasukkan tidak valid.\n";
} else {
    $totalGaji = 0;
    $totalLembur = 0;

    for ($hari = 1; $hari <= $hariKerja; $hari++) {
        $totalGaji += $gajiHarian;
        $totalLembur += $lemburHarian;

        echo "Hari ke-$hari\n";
        echo "Gaji: Rp" .
             number_format($gajiHarian, 0, ',', '.') . "\n";
        echo "Lembur: Rp" .
             number_format($lemburHarian, 0, ',', '.') . "\n";
    }

    echo "Total gaji: Rp" .
         number_format($totalGaji, 0, ',', '.') . "\n";
    echo "Total lembur: Rp" .
         number_format($totalLembur, 0, ',', '.') . "\n";
    echo "Total keseluruhan: Rp" .
         number_format($totalGaji + $totalLembur, 0, ',', '.') . "\n";
}
?>
