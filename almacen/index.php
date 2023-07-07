<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/almacen/listado_de_productos.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Lista de Produtos</h1>
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
                            <h3 class="card-title">Produtos Registrados</h3>

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
                                        <th><center>Nro</center></th>
                                        <th><center>Código</center></th>
                                        <th><center>Categoria</center></th>
                                        <th><center>Imagem</center></th>
                                        <th><center>Nome</center></th>
                                        <th><center>Descrição</center></th>
                                        <th><center>Stock</center></th>
                                        <th><center>Preço Compra</center></th>
                                        <th><center>Preço Venda</center></th>
                                        <th><center>Data Compra</center></th>
                                        <th><center>Usuário</center></th>
                                        <th><center>Ações</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach ($productos_datos as $productos_dato) { 
                                        $id_producto = $productos_dato['id_producto'];
                                        ?>
                                    <tr>
                                        <td><?php echo $contador = $contador + 1; ?></td>
                                        <td><?php echo $productos_dato['codigo']; ?></td>
                                        <td><?php echo $productos_dato['categoria']; ?></td>
                                        <td>
                                            <img src="<?php echo $URL."/almacen/img_productos/".$productos_dato['imagen']; ?>" width="50px" alt="">
                                        </td>
                                        <td><?php echo $productos_dato['nombre']; ?></td>
                                        <td><?php echo $productos_dato['descripcion']; ?></td>
                                        <td><?php echo $productos_dato['stock']; ?></td>
                                        <td><?php echo $productos_dato['stock_minimo']; ?></td>
                                        <td><?php echo $productos_dato['precio_venta']; ?></td>
                                        <td><?php echo $productos_dato['fecha_ingreso']; ?></td>
                                        <td><?php echo $productos_dato['email']; ?></td>
                                        <td>
                                        <center>
                                               <div class="btn-group">
                                                    <a href="show.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Ver</a>
                                                    <a href="update.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                                    <a href="delete.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Excluir</a>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Permissões",
                "infoEmpty": "Mostrando 0 a 0 de 0 Permissões",
                "infoFiltered": "(Filtrado de _MAX_ total de Permissões)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Permissões",
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