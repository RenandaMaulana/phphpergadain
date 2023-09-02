<?php    
$besaran_pinjaman = 1000000;
$bunga = 0.1;
$lama_angsuran_bulan = 5;
$besar_angsuran;
$total_pinjaman;
    function totalPinjaman()
        {
        $bunga = $besaran_pinjaman * $bunga;
        $total_pinjaman = $bunga + $besaran_pinjaman;
        $besar_angsuran = $total_pinjaman / $lama_angsuran_bulan;
        
        }
        

echo "Total pinjaman adalah " .$besar_angsuran->totalPinjaman();
?>