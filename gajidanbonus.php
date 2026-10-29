<?php

function tentukanUangLembur($golongan) {
    if (strtoupper($golongan) == 'A') {
        return 50000;
    } elseif (strtoupper($golongan) == 'B') {
        return 75000;
    } elseif (strtoupper($golongan) == 'C') {
        return 100000;
    } else {
        return 0;
    }
}

$golonganKaryawan = 'B';
$hariKerja = 5;
$gajiPokokHarian = 150000;

$lemburHarian = tentukanUangLembur($golonganKaryawan);
$totalGaji = 0;
$totalLembur = 0;

echo "Rincian Gaji Karyawan Golongan $golonganKaryawan:\n";

for ($hari = 1; $hari <= $hariKerja; $hari++) {
    $totalGaji += $gajiPokokHarian;
    $totalLembur += $lemburHarian;
    
    $pendapatanHariIni = $gajiPokokHarian + $lemburHarian;
    echo "Hari ke-$hari: Gaji Rp " . number_format($gajiPokokHarian, 0, ',', '.') . 
         " + Lembur Rp " . number_format($lemburHarian, 0, ',', '.') . 
         " = Rp " . number_format($pendapatanHariIni, 0, ',', '.') . "\n";
}

$totalPendapatan = $totalGaji + $totalLembur;
echo "Total Gaji Pokok: Rp " . number_format($totalGaji, 0, ',', '.') . "\n";
echo "Total Bonus Lembur: Rp " . number_format($totalLembur, 0, ',', '.') . "\n";
echo "Total Pendapatan Keseluruhan: Rp " . number_format($totalPendapatan, 0, ',', '.') . "\n";
?>