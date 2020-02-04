<?php
//kita membuat class mobil
//enkapsulasi terbagi menjadi 3, yaitu public,private,protected
//public adalah properti / metoda yang dapat diakses dari luar maupun dalam class
//protected adalah properti / metoda yang bisa diakses dari dalam kelas itu sendiri dan juga turunan / inherintace kelasnya
//private adalah properti / metoda yang dapat diakses hanya dari dalam kelas itu sendiri,
//dan tidak bisa diakses dari luar maupun kelas turunan 
class mobil{
    //properti dengan nama ban yang memiliki nilai 4
    public $ban = 4;
    //properti merk akan kita isi di konstruktor dibawah
    public $merk;
    //disini kita membuat properti dengan enkapsulasi private
    private $supir = TRUE;
    //disini kita membuat properti dengan enkapsulasi protected
    protected $nama_supir = "Yanto";
    //metoda yang bersifat publik
    public function jalan(){
        return "Bremm Breem".$this->nama_supir;
    }
    //sebuah konstruktor untuk mengisi variabel merk
    public function __construct($merk){
        $this->merk = $merk;
    }
}
//sebuah objek baru dengan nama angkot dan merk suzuki
$angkot = new mobil('Suzuki');
//akses properti ban dari angkot (publik)
echo "Ban          = ".$angkot->ban."<br>";
//akses properti merk dari angkot (publik)
echo "Merk         = ".$angkot->merk."<br>";
//akses properti supir dari angkot (private)
echo "Ada Supir    = ".$angkot->supir."<br>";
//akses properti nama supir dari angkot (protected)
echo "nama supir   = ".$angkot->nama_supir."<br>";
//akses metoda ban dari angkot (publik)
echo "Fungsi Jalan = ".$angkot->jalan();
?>