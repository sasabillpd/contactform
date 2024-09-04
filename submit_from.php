<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $nim = $_POST["nim"];
    $prodi = $_POST["prodi"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO contacts (name, nim, prodi, email, message, phone, address, gender) 
            VALUES ('$name', '$nim', '$prodi', '$email', '$message', '$phone', '$address', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
