<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect ke index.php setelah data ditambahkan
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengguna</title>
</head>
<body>
    <h1>Tambah Data Pengguna</h1>
    <form method="POST" action="create.php">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Usia:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <input type="submit" value="Tambah">
    </form>
    <a href="index.php">Kembali ke Daftar</a>
</body>
</html>
