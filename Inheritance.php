<?php
//Inheritance Adalah Sebuah Penurunan Atau Pewarisan Sifat Yang Ada Pada Suatu Class
//Disini Sebagai Contoh Saya Akan Membuat sebuah class Dengan Nama Manusia
//Semua Manusia Pasti Mempunyai Kepala Dan Badan
//Kalo Gak Ada, Nanti Malah Serem :v
class Manusia{
    //kita Membuat Property Yang Bersifat Publik dengan Nama Kepala Dan Badan
    public $kepala;
    public $badan;
    //kita membuat sebuah Metode dengan nama berbicara 
    public function Berbicara(){
        //nilai kembali dari metode berbicara
        return "Hai, Saya Adalah Manusia <br>";
    }
}
//disini kita membuat sebuah kelas turunan dari manusia dengan nama programmer
//cara untuk melakukan inheritance adalah dengan menggunakan keyword "extends"
class programmer extends Manusia{
    public function Berbicara_versi_Programmer(){
        return "Hello World <br>";
    }
}
//disini saya membuat objek baru dengan nama "saya" yang merupakan objek dari kelas programmer
$saya = new programmer();
//mengecek apakah $saya itu Sejatinya adalah Kelas Manusia?
//jika True, Dia Akan Menampilkan Kalimat Dibawah ini
if(is_a($saya,'Manusia')){
    echo "Saya Adalah Programmer Dari Manusia <br>";
}
//mengecek apakah $saya itu mempunyai properti dengan nama kepala?
if(property_exists($saya,'kepala')){
    echo "Hai Saya Mempunyai Kepala <br>";
}
//mengecek apakah $saya itu mempunyai metode dengan nama 'berbicara' 
if(method_exists($saya,"berbicara")){
    echo "Saya Juga Bisa Berbicara <br><br>";
}
//terakhir sebagai pembuktian bahwa programmer
// adalah turunan dari manusia, saya akan menampilkan sebuah metode yang ada di kelas manusia
//sekaligus menampilkan metode yang ada di kelas programmer
echo $saya->Berbicara();
echo $saya->Berbicara_Versi_Programmer();
?>