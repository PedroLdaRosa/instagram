<?php
//INCLUI A CONEXÃO DB
include "connect_db.php";

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['nomecompleto']);
    $firstname = mysqli_real_escape_string($conn, $_POST['usuario']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    //SENHA ORIGINAL
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    //senha de segurança usado para password_hash
    $hash = password_hash($pass, PASSWORD_BCRYPT);

    echo "Generated hash code:" . $hash;

    $sql = "INSERT INTO user (username, firstname, lastname, email, pass) VALUES ('$username', '$firstname','teste', '$email', '$hash') ";

    if ($conn->query($sql) === TRUE) {
        echo "<br>New record created successfully";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    //fechar a conexão com banco de dados
    $conn->close();
}
 