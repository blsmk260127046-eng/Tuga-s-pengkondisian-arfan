<?php

function hitungBonusSetoran($jumlahSetoran) {
   
    if ($jumlahSetoran >= 500000) {
        return 50000;
    } else {
        return 0;
    }
}

$saldoAwal = 1000000;
$setoranBulanan = 600000;
$lamaMenabung = 6; 

$saldoSaatIni = $saldoAwal;

echo "Simulasi Tabungan Anak (Saldo Awal: Rp " . number_format($saldoAwal, 0, ',', '.') . ")\n";
echo "Setoran Bulanan: Rp " . number_format($setoranBulanan, 0, ',', '.') . "\n\n";


for ($bulan = 1; $bulan <= $lamaMenabung; $bulan++) {
    $bonus = hitungBonusSetoran($setoranBulanan);
    $saldoSaatIni += $setoranBulanan + $bonus;
    
    echo "Bulan ke-$bulan:\n";
    echo "- Setoran: Rp " . number_format($setoranBulanan, 0, ',', '.') . "\n";
    
    if ($bonus > 0) {
        echo "- Bonus Setoran: Rp " . number_format($bonus, 0, ',', '.') . "\n";
    }
    
    echo "- Total Saldo: Rp " . number_format($saldoSaatIni, 0, ',', '.') . "\n\n";
}
?>