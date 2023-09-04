<?php
class Keahlian_model {
    private $keahlian = [
        [
            "TKP" => "Teknik Konstruksi dan Perumahan (TKP)",
            "DPIB" => "Desain Pemodelan dan Informasi Bangunan (DPIB)",
            "TPTUP" => "Teknik Pemanasan, Tata Udara dan Pendinginan (TPTUP)",
            "TP" => "Teknik Pengelasan (TP)",
            "RPL" => "Rekayasa Perangkat Lunak (RPL)",
            "TB" => "Kuliner",
            "Akuntansi" => "Akuntansi",
        ],
    ];
    public function getKeahlian()
    {
        return $this->keahlian;
    }
}