<?php
$profieArray = [
    "nama" => "Trisna",
     "kelas" => "TI11"
    ];

echo $profieArray ["nama"] . "<br>" ;
echo $profieArray ["kelas"];

echo "----";

$profileMultiArray = [
    [
        "nama" => "Trisna",
        "semester" => 2
    ], [
        "nama" => "Atika",
        "semester" => 2
    ], [
        "nama" => "Darma",
        "semester" => 2
    ]

];

foreach($profileMultiArray as $profile){
    echo $profile ['nama'] . "<br>";
    echo $profile ['semester'] . "<br>"; 
} 