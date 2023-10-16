<?php
class manusia
{
    public $nama_saya;

    function panggil_nama($saya)
    {
        $this->nama_saya=$saya;
    }
}
//Class turunan atau sub class dari class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}
//Instansisasi class mahasiswa
$informatika = new mahasiswa();
$informatika->panggil_nama("Irma");
$informatika->panggil_mahasiswa("Yuliyanti");

//Menampilkan isi dari property 
echo "Nama Depan Saya : " , $informatika->nama_saya . "</br>";
echo "Nama Belakang Saya : " , $informatika->nama_mahasiswa;

?>

<p><br>Latihan Privat dan Protected</p>
<br>

<?php
class manusiaa
{
    public $nama_depan;
    private $nama_belakang;
    protected $nama_panggilan;

    public function panggil_depan($depan)
    {
        $this->nama_depan = $depan;
    }

    public function setpanggil_belakang($belakang)
    {
        $this->nama_belakang = $belakang;
    }

    public function getpanggil_belakang()
    {
        return $this->nama_belakang;
    }

    public function setnama_panggilan($panggilan)
    {
        $this->nama_panggilan = $panggilan;
    }

    public function getnama_panggilan()
    {
        return $this->nama_panggilan;
    }
}

class mahasiswaa extends manusiaa
{
    public $nim;

    public function panggil_nim($nim)
    {
        $this->nim = $nim;
    }
}

$irma = new mahasiswaa();
$irma->panggil_depan("Irma");
$irma->setpanggil_belakang("Yuliyanti");
$irma->setnama_panggilan("Irma");
$irma->panggil_nim("220202086");

echo "Nama Depan : " . $irma->nama_depan;
echo "<br>Nama Belakang : " . $irma->getpanggil_belakang();
echo "<br>Nama Panggilan : " . $irma->getnama_panggilan();
echo "<br>NIM : " . $irma->nim;
?>