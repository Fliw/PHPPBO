<?php
//kita membuat class orang 
class orang{
    //didalamnya kita membuat sebuah variabel dengan keyword static
    //keyword static dipakai ketika kita mau akses di metoda / properti walaupun dia ada di luar kelas tanpa deklarasi objek
public static $lapar = "Banget";
public static function tanya(){
    return "Laper ?<br>";
    }
    //disini saya membuat properti nama tanpa keyword static, yang artinya dia akan menghasilkan error ketika diakses tanpa objek
public $nama = "rafli";
}
//output nilai variabel serta konstanta yang ada di kelas orang
echo orang::tanya();
echo orang::$lapar;
echo orang::$nama;
?>