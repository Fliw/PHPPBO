<?php
//kita membuat sebuah class motor
class motor {
    //dia mempunyai 2 properti yaitu mesin dan roda
    public $mesin;
    public $roda = 2;
    //dia mempunyai metode jalan yang mengembalikan kalimat dibawah ini
    public function jalan(){
        return "ngeng ngenggg";
    }
}
//membuat sebuah objek motor dengan nama beat
$beat = new motor();
//kita isi properti mesin dari beat dengan nama blue core
$beat->mesin = "Blue Core";

//untuk mengecek apakah $beat merupakan motor?
if(is_a($beat,"motor")){
    echo "Beat Ini Memanglah Seekor Motor <br>";
}
else{
    echo "ini bukan motor gaes<br>";
}
//untuk mengecek apakah properti mesin yang ada di beat itu ada
if(property_exists($beat,"mesin")){
    echo "Beat Ini Udah Pake Mesin <br>";
}
else {
    echo "Beat ngga pake mesin, dia pake magic<br>";
}
//untuk mengecek apakah beat mempunyai metode jalan?
if(method_exists($beat,"jalan")){
    echo "Beat Ini Bisa Berjalan <br>";
}
else {
    echo "beat ini gabisa jalan, dia cuma pajangan di ruang tamu<br>";
}
?>