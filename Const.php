<?php
//di kelas kucing ini kita membuat sebuah konstanta bernama manja yang akan diisi nilai boolean true
//konstanta adalah variabel yang tidak boleh diubah dan harus tetap konstan
//keyword untuk membuat sebuah konstanta adalah dengan kalimat const
class kucing{
   const manja=TRUE; 
}
//percabangan jika kucingnya manja maka akan echo tulisan "kucing itu manja cuy" 
//untuk mengakses konstanta dari luar kelas maka harus menggunakan
//namakelas::konstanta
if(kucing::manja){
    echo "Kucing Itu Manja Cuy";
}
?>