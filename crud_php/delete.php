<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect ke index.php setelah data dihapus
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
