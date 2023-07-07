<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/compras/listado_de_compras.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
    <div class="col-sm-12">
        <h1 class="m-0">Lista de Compras</h1>
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
<div class="container-fluid">

<div class="row">
<div class="col-md-12">

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Compras Registradas</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body" style="display: block;">

        <div class="table table-responsive">
            <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>
                            <center>Nro</center>
                        </th>
                        <th>
                            <center>Nro Compra</center>
                        </th>
                        <th>
                            <center>Produto</center>
                        </th>
                        <th>
                            <center>Data Compra</center>
                        </th>
                        <th>
                            <center>Fornecedor</center>
                        </th>
                        <th>
                            <center>Comprovante</center>
                        </th>
                        <th>
                            <center>Usuário</center>
                        </th>
                        <th>
                            <center>Preço Compra</center>
                        </th>
                        <th>
                            <center>Quantidade</center>
                        </th>
                        <th>
                            <center>Ações</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $contador = 0;
                foreach ($compras_datos as $compras_dato) {
                    $id_compra = $compras_dato['id_compra'];
                ?>
                    <tr>
                    <td><?php echo $contador = $contador + 1; ?></td>
                    <td><?php echo $compras_dato['nro_compra']; ?></td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-producto<?php echo $id_compra; ?>">
                            <?php echo $compras_dato['nombre_producto']; ?>
                        </button>

                <!--Modal para visualizar produto-->
                <div class="modal fade" id="modal-producto<?php echo $id_compra; ?>">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #07b0d6; color: white;">
                                <h4 class="modal-title">Dados do Produto</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="">Código</label>
                                                    <input type="text" value="<?php echo $compras_dato['codigo']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Nome do Produto</label>
                                                    <input type="text" value="<?php echo $compras_dato['nombre']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Descrição do Produto</label>
                                                    <input type="text" value="<?php echo $compras_dato['descripcion']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Estoque</label>
                                                    <input type="text" value="<?php echo $compras_dato['stock']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Estoque Mínimo</label>
                                                    <input type="text" value="<?php echo $compras_dato['stock_minimo']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Estoque Máximo</label>
                                                    <input type="text" value="<?php echo $compras_dato['stock_maximo']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Data de Entrada</label>
                                                    <input type="text" value="<?php echo $compras_dato['fecha_ingreso']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Preço de Compra</label>
                                                    <input type="text" value="<?php echo $compras_dato['precio_compra_producto']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Preço de Venda</label>
                                                    <input type="text" value="<?php echo $compras_dato['precio_venta_producto']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Categoria</label>
                                                    <input type="text" value="<?php echo $compras_dato['nombre_categoria']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Usuário</label>
                                                    <input type="text" value="<?php echo $compras_dato['nombre_usuarios_producto']; ?>" class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Imagem do Produto</label>
                                            <img src="<?php echo $URL . "/almacen/img_productos/" . $compras_dato['imagen']; ?>" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.fim modal -->

                </td>
                <td><?php echo $compras_dato['fecha_compra']; ?></td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-proveedor<?php echo $id_compra; ?>">
                        <?php echo $compras_dato['nombre_proveedor']; ?>
                    </button>

            <!--Modal para visualizar fornecedores-->
            <div class="modal fade" id="modal-proveedor<?php echo $id_compra; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #07b0d6; color: white;">
                                <h4 class="modal-title">Dados do Fornecedor</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nome do Fornecedor</label>
                                        <input type="text" value="<?php echo $compras_dato['nombre_proveedor'] ;?>" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                        <label for="">Celular do Fornecedor</label>
                                        <a href="https://wa.me/55<?php echo $compras_dato['celular_proveedor'] ;?>" target="_blank" class="btn btn-success btn-sm">
                                        <i class="fa fa-phone"></i>
                                        <?php echo $compras_dato['celular_proveedor'] ;?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                        <label for="">Telefone do Fornecedor</label>
                                        <input type="text" value="<?php echo $compras_dato['telefono_proveedor'] ;?>" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                        <label for="">Empresa</label>
                                        <input type="text" value="<?php echo $compras_dato['empresa'] ;?>" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                        <label for="">E-mail</label>
                                        <input type="text" value="<?php echo $compras_dato['email_proveedor'] ;?>" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                        <label for="">Endereço</label>
                                        <input type="text" value="<?php echo $compras_dato['direccion_proveedor'] ;?>" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.fim modal -->


            </td>
            <td><?php echo $compras_dato['comprobante']; ?></td>
            <td><?php echo $compras_dato['nombres_usuario']; ?></td>
            <td><?php echo $compras_dato['precio_compra']; ?></td>
            <td><?php echo $compras_dato['cantidad']; ?></td>
            <td>
                <center>
                    <div class="btn-group">
                        <a href="show.php?id=<?php echo $id_compra; ?>" type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Ver</a>
                        <a href="update.php?id=<?php echo $id_compra; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                        <a href="delete.php?id=<?php echo $id_compra; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Excluir</a>
                    </div>
                </center>
            </td>

        </tr>

        <?php
        }
        ?>
    </tbody>

        <tfoot>
        </tfoot>
    </table>
</div>

</div>
<!-- /.card-body -->
</div>

</div>
</div>

<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>

<script>
$(function() {
$("#example1").DataTable({
"pageLength": 5,
language: {
    "emptyTable": "Não há informações",
    "info": "Mostrando _START_ a _END_ de _TOTAL_ Compras",
    "infoEmpty": "Mostrando 0 a 0 de 0 Compras",
    "infoFiltered": "(Filtrado de _MAX_ total de Compras)",
    "infoPostFix": "",
    "thousands": ",",
    "lengthMenu": "Mostrar _MENU_ Compras",
    "loadingRecords": "Carregando...",
    "processing": "Processando...",
    "search": "Pesquisar:",
    "zeroRecords": "Nenhum resultado encontrado",
    "paginate": {
        "first": "Primeiro",
        "last": "Último",
        "next": "Próximo",
        "previous": "Anterior"
    }
},
"responsive": true,
"lengthChange": true,
"autoWidth": false,
buttons: [{
        extend: 'collection',
        text: 'Relatórios',
        orientation: 'landscape',
        buttons: [{
            text: 'Copiar',
            extend: 'copy',
        }, {
            extend: 'pdf'
        }, {
            extend: 'csv'
        }, {
            extend: 'excel'
        }, {
            text: 'Imprimir',
            extends: 'print'
        }]
    },
    {
        extend: 'colvis',
        text: 'Ver as Colunas',
        collectionLayout: 'fixed three-column'
    }
],
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>