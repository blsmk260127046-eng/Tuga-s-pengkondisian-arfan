<?php

function tentukanTarif($jenisMobil) {
    if (strtolower($jenisMobil) == 'sedan') {
        return 300000;
    } elseif (strtolower($jenisMobil) == 'suv') {
        return 500000;
    } else {
        return 0; 
    }
}

$jenis = 'SUV';
$lamaSewa = 4;
$tarifHarian = tentukanTarif($jenis);
$totalBiaya = 0;

echo "Rincian Sewa Mobil $jenis:\n";

for ($hari = 1; $hari <= $lamaSewa; $hari++) {
    echo "Hari ke-$hari: Rp " . number_format($tarifHarian, 0, ',', '.') . "\n";
    $totalBiaya += $tarifHarian;
}

if ($lamaSewa > 3) {
    $diskon = $totalBiaya * 0.10;
    $totalBiaya -= $diskon;
    echo "Diskon (10%): Rp " . number_format($diskon, 0, ',', '.') . "\n";
}

echo "Total Pembayaran: Rp " . number_format($totalBiaya, 0, ',', '.') . "\n";
?>