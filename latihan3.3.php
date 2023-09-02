<?php
class Hutang {
    var $besaran_pinjaman;
    var $besaran_bunga;
    var $total_pinjaman;
    var $lama_angsuran;
    var $besar_angsuran;

    public function __construct($besaran_pinjaman, $besaran_bunga, $lama_angsuran) {
        $this->besaran_pinjaman = $besaran_pinjaman;
        $this->besaran_bunga = $besaran_bunga;
        $this->lama_angsuran = $lama_angsuran;
    }

    public function hitungTotalPinjaman() {
        $this->total_pinjaman = $this->besaran_pinjaman + ($this->besaran_pinjaman * ($this->besaran_bunga / 100));
        return $this->total_pinjaman;
    }

    public function hitungBesaranAngsuran() {
        $this->besar_angsuran = $this->total_pinjaman / $this->lama_angsuran;
        return $this->besar_angsuran;
    }

    public function tampilkanInfo() {
        echo "Besaran pinjaman: Rp " . number_format($this->besaran_pinjaman, 0, ",", ".") . "<br>";
        echo "Besar bunga: " . $this->besaran_bunga . "%<br>";
        echo "Total pinjaman: Rp " . number_format($this->total_pinjaman, 0, ",", ".") . "<br>";
        echo "Lama angsuran: " . $this->lama_angsuran . " bulan<br>";
        echo "Besar angsuran per bulan: Rp " . number_format($this->besar_angsuran, 0, ",", ".");
    }
}

// Penggunaan class Hutang
$hutang = new Hutang(1000000, 10, 5);
$hutang->hitungTotalPinjaman();
$hutang->hitungBesaranAngsuran();
$hutang->tampilkanInfo();
?>
