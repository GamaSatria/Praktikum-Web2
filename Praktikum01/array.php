<?php 
//Buat Array
$animals = ["Kucing", "Ayam", "Ikan", "Burung"];
//Tampilin Kucing
echo $animals[0]; 
echo $animals[3];


//Looping Array
foreach ($animals as $animal) {
    echo $animal . "<br>";
}

echo "<br>";
//Buat Array Asosiatif
$mahasiswa = ["Nama"=>"Gama", "Umur"=>18, "Alamat"="Lenteng Agung"];

echo $mahasiswa["Nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value
    echo "<br>";       
}
echo :"<br>";

//Buat Array Multimedia
$dosen = [
    ["Pak Rojul","Web"]
    ["Pak Reza","DDP"]
    ["Pak Lukman","OS"]
];

echo $dosen[0][1];
echo "<br>"
?>