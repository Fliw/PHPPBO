<?php
//Semua Pemograman PHP OOP Dimulai Dengan Class
class Hello {
    //membuat sebuah fungsi yang akan mengembalikan kalimat "Hai Nama saya PHP"
    public function sapa(){
    return "Hai, Nama Saya PHP";
    }
}
//membuat objek baru dengan nama penampil, Berdasarkan Blueprint Dari Class Hello
$Penampil = new Hello();
//memanggil fungsi dari objek yang telah kita buat
echo $Penampil->sapa();
?>