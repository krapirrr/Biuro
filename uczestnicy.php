<?php
$conn = new mysqli("localhost", "root", "", "moja_baza");

if ($conn->connect_error) die("Błąd: " . $conn->connect_error);

$conn->query("INSERT INTO uczestnicy (imie) VALUES ('Jan')");

$result = $conn->query("SELECT * FROM uczestnicy");
while ($row = $result->fetch_assoc()) echo "ID: {$row['id']}" - Imię: {$row['imie']}<br>;

$conn->close();
?>