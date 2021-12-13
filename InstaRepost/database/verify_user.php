<?php
include "connect_db.php";
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT id, firstname, lastname FROM User WHERE username='$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $verify = password_verify($pass, $user["password"]);
        header('Location: //localhost/fema/instagram/insta.php');
        die();
    } else {
        echo "<p><strong style='color red; font-size: 20px;'>Usuário ou senha incorretos</strong></p>";
    }
    $conn->close();
}