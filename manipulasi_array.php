<?php
$arrayBuah = ["Jeruk", "Mangga", "Pisang", "Apel"];

// mengurutkan nilai suatu array
sort($arrayBuah);

//mengehapus nilai array yg paling akhir 
array_pop($arrayBuah);

//menghapus seluruh isi variabel
//bisa juga menghapus spesifikasi dari nilai array tertentu
//unset($arrayBuah);

//untuk menambahkan nilai array di paling akhhir
array_push($arrayBuah, "Durian");

//menghapus nilai array yg paling awal 
array_shift($arrayBuah);

// untuk menambahkan nilai array di paling depan
array_unshift($arrayBuah, "Semangka", "Buah Naga");

//untuk mengganti spesifik nilai array tertentu 
$arrayBuah[0] = "Manggis";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}