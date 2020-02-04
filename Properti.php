<?php
//Semua Pemograman PHP OOP Dimulai Dengan Class
class Mobil {
    //disini kita membuat sebuah properti dari objek mobil
    //mobil mempunyai 4 ban, manufaktur dan warna berbeda beda tiap mobil
    //oleh karna itu, saya hanya mengisi nilai ban saja, karna semua mobil pasti mempunyai 4 ban
    public $ban = 4;
    //properti ini sengaja saya kosongkan agar dapat diisi
    public $manufaktur;
    public $warna;

    //membuat sebuah fungsi yang akan membangun sebuah objek berdasarkan parameter yang diterima
    //fungsi ini akan membuat manufaktur dan warna menjadi dinamis sesuai apa yang diisi nanti

    //kita ambil 2 paramater, yaitu manufaktur dan warna 
    public function __construct($manufaktur,$warna){
        //this manufaktur merujuk pada nilai yang diberi pada baris 29 & 30
        //begitupun dengan warna
        //2 variabel ini kita assignment ke properti yang kosong diatas
        $this->manufaktur = $manufaktur;
        $this->warna = $warna;
    }
    //membuat sebuah fungsi untuk me return sebuah kalimat, perpaduan dari nilai properti yang telah kita isi
    public function Menyapa(){
        return "hai Saya Adalah Mobil Buatan ".$this->manufaktur." Saya Mempunyai ".$this->ban." Ban, Dan Warna Saya Adalah ".$this->warna."<br>";
    }
}
//membuat objek baru dengan manufaktur mazda, dan berwarna merah, serta suzuki
$mazda=new Mobil("Mazda","Merah");
$suzuki=new Mobil("Suzuki","Putih");
//kita panggil salah satu metode yang ada di 2 objek ini, yaitu menyapa
echo $mazda->Menyapa();
echo $suzuki->Menyapa();
?>