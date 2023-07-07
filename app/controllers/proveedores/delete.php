<?php

include('../../config.php');

$id_proveedor = $_GET['id_proveedor'];

$sentencia = $pdo->prepare("DELETE FROM tb_proveedores WHERE id_proveedor = :id_proveedor");

$sentencia->bindParam('id_proveedor', $id_proveedor);

if ($sentencia->execute()) {
    session_start();
    //echo "Foi registrada corretsamente";
    $_SESSION['mensaje'] = "Fornecedor foi excluído corretamente.";
    $_SESSION['icono'] = "success";
    //header('Location: ' . $URL . '/categorias/');
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/proveedores";
    </script>
    <?php
} else {
    //echo "Error, as senhas não são iguais...";
    session_start();
    $_SESSION['mensaje'] = "Error não foi possível ecluir o registro";
    $_SESSION['icono'] = "error";
    //header('Location: ' . $URL . '/categorias');
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/proveedores";
    </script>
    <?php
}

