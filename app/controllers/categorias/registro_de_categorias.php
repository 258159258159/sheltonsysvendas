<?php

include ('../../config.php');

$nombre_categoria = $_GET['nombre_categoria'];

$sentencia = $pdo->prepare("INSERT INTO tb_categorias 
        (nombre_categoria, fyh_creacion) 
VALUES  (:nombre_categoria, :fyh_creacion)");

$sentencia->bindParam('nombre_categoria', $nombre_categoria);
$sentencia->bindParam('fyh_creacion', $fechaHora);
if ($sentencia->execute()) {
    session_start();
    //echo "Foi registrada corretsamente";
    $_SESSION['mensaje'] = "Categoria foi registrada corretamente.";
    $_SESSION['icono'] = "success";
    //header('Location: ' . $URL . '/categorias/');
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/categorias";
    </script>
    <?php
} else {
    //echo "Error, as senhas não são iguais...";
    session_start();
    $_SESSION['mensaje'] = "Error não foi possível realizar o registro";
    $_SESSION['icono'] = "error";
    //header('Location: ' . $URL . '/categorias');
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/categorias";
    </script>
    <?php
}

