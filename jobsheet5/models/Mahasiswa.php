<?php

class Mahasiswa
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    public function getAllMahasiswa()
    {
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createMahasiswa($nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat)
    {
        $query = "INSERT INTO mahasiswa (nim,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat)
        VALUES('$nim','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        IF($result){
            return true;
        } else {
            return false;
        }
    }
}