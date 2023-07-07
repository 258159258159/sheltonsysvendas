<?php
include('../../config.php');

$rol = $_POST['rol'];

$sentencia = $pdo->prepare("INSERT INTO tb_roles 
        (rol, fyh_creacion) 
VALUES  (:rol, :fyh_creacion)");

$sentencia->bindParam('rol', $rol);
$sentencia->bindParam('fyh_creacion', $fechaHora);
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Permissão foi registrada corretamente.";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/roles/');
} else {
    //echo "Error, as senhas não são iguais...";
    session_start();
    $_SESSION['mensaje'] = "Error não foi possível realizar o registro";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/roles/create.php');
}
