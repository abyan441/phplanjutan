<?php
// Array dengan index nama dan umur
$data = array(
    array("nama" => "John", "umur" => 25),
    array("nama" => "Alice", "umur" => 30),
    array("nama" => "Bob", "umur" => 28),
    array("nama" => "Emma", "umur" => 22),
    array("nama" => "David", "umur" => 35),
    array("nama" => "Sophia", "umur" => 27),
    array("nama" => "Michael", "umur" => 33),
    array("nama" => "Olivia", "umur" => 29),
    array("nama" => "William", "umur" => 31),
    array("nama" => "Ella", "umur" => 26),
    array("nama" => "James", "umur" => 24),
    array("nama" => "Emily", "umur" => 32),
    array("nama" => "Daniel", "umur" => 23),
    array("nama" => "Mia", "umur" => 34),
    array("nama" => "Alexander", "umur" => 21)
);

// Konversi ke JSON
$json_data = json_encode($data);

// Tampilkan JSON
echo $json_data;
?>
