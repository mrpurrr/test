<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $update_sql = "UPDATE users SET name = '$name', email = '$email', age = $age WHERE id = $id";
        if ($conn->query($update_sql) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengguna</title>
</head>
<body>
    <h1>Edit Data Pengguna</h1>
    <form method="POST" action="update.php?id=<?php echo $user['id']; ?>">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>

        <label for="age">Usia:</label><br>
        <input type="number" id="age" name="age" value="<?php echo $user['age']; ?>" required><br><br>

        <input type="submit" value="Update">
    </form>
    <a href="index.php">Kembali ke Daftar</a>
</body>
</html>
