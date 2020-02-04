<?php
//kita membuat sebuah kelas kendaraan
class kendaraan {
    //kita membuat metoda ini menjadi final
    //metoda / properti final yang Ada Di Parent (Kelas induk) gaboleh di replace sama kelas anak (Child) 
    final public function jalan(){
        //mengembalikan sebuah nilai berisi kalimat string
        return "Kendaraan Ini Jalan";
    }
} 
//membuat sebuah kelas turunan dari kendaraan yang dimana
//dia mencoba untuk replace metoda final jalan() dari si kendaraan
class mobil extends kendaraan {
    //dan tentu saja tidak bisa karna final ini apapun alasannnya tidak boleh diubah
    public function jalan(){
        return "Ngopi Yok";
    }
} 
//jika ingin jalan, silahkan hapus metoda jalan, dan ganti dengan metoda lain

?>