<?php
include('../../config.php');

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$rol = $_POST['rol'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];

if ($password_user == $password_repeat) {
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);
    $sentencia = $pdo->prepare("INSERT INTO tb_usuarios 
            (nombres,email,id_rol,password_user,fyh_creacion) 
    VALUES  (:nombres,:email,:id_rol,:password_user,:fyh_creacion)");

$sentencia->bindParam('nombres', $nombres);
$sentencia->bindParam('email', $email);
$sentencia->bindParam('id_rol', $rol);
$sentencia->bindParam('password_user', $password_user);
$sentencia->bindParam('fyh_creacion', $fechaHora);
$sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Usuário foi registrado corretamente.";
    header('Location: ' . $URL . '/usuarios/');

}else{
    //echo "Error, as senhas não são iguais...";
    session_start();
    $_SESSION['mensaje'] = "Error as senhas não são iguais...";
    header('Location: '.$URL.'/usuarios/create.php');
}
