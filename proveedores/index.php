<?php
include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/proveedores/listado_de_proveedores.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Lista de Fornecedores
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
                            <i class="fa fa-plus"></i> Criar Novo Fornecedor
                        </button>
                    </h1>

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
                            <h3 class="card-title">Fornecedores Registrados</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">

                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th><center>Nro</center></th>
                                        <th><center>Nome do Fornecedor</center></th>
                                        <th><center>Celular</center></th>
                                        <th><center>Telefone</center></th>
                                        <th><center>Empresa</center></th>
                                        <th><center>E-mail</center></th>
                                        <th><center>Endereço</center></th>
                                        <th><center>Ações</center></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach ($proveedores_datos as $proveedores_dato) {
                                        $id_proveedor = $proveedores_dato['id_proveedor'];
                                        $nombre_proveedor = $proveedores_dato['nombre_proveedor']
                                    ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $contador = $contador + 1; ?></center>
                                            </td>
                                            <td><?php echo $nombre_proveedor; ?></td>
                                            <td>
                                                <a href="https://wa.me/55<?php echo $proveedores_dato['celular']; ?>" target="_blank" class="btn btn-success">
                                                    <i class="fa fa-phone"></i>
                                                <?php echo $proveedores_dato['celular']; ?>
                                                </a>
                                            </td>
                                            <td><?php echo $proveedores_dato['telefono']; ?></td>
                                            <td><?php echo $proveedores_dato['empresa']; ?></td>
                                            <td><?php echo $proveedores_dato['email']; ?></td>
                                            <td><?php echo $proveedores_dato['direccion']; ?></td>
                                            <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-update<?php echo $id_proveedor; ?>">
                                                            <i class="fa fa-pencil-alt"></i> Editar
                                                        </button>

                                                        <!--Modal para atualizar fornecedores-->
                                                        <div class="modal fade" id="modal-update<?php echo $id_proveedor; ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style="background-color: #116f4a; color: white;">
                                                                        <h4 class="modal-title">Atualização de Fornecedor</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">


                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Nome do Fornecedor<b>*</b></label>
                                                                                    <input type="text" id="nombre_proveedor<?php echo $id_proveedor; ?>" value="<?php echo $nombre_proveedor; ?>" class="form-control">
                                                                                    <small style="color: red; display: none;" id="lbl_nombre<?php echo $id_proveedor; ?>"><b>*</b> Este campo é obrigatório</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Celular<b>*</b></label>
                                                                                    <input type="number" value="<?php echo $proveedores_dato['celular']; ?>" id="celular<?php echo $id_proveedor; ?>" class="form-control">
                                                                                    <small style="color: red; display: none;" id="lbl_celular<?php echo $id_proveedor; ?>"><b>*</b> Este campo é obrigatório</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Telefone</label>
                                                                                    <input type="number" value="<?php echo $proveedores_dato['telefono']; ?>" id="telefono<?php echo $id_proveedor; ?>" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Empresa<b>*</b></label>
                                                                                    <input type="text" value="<?php echo $proveedores_dato['empresa']; ?>" id="empresa<?php echo $id_proveedor; ?>" class="form-control">
                                                                                    <small style="color: red; display: none;" id="lbl_empresa<?php echo $id_proveedor; ?>"><b>*</b> Este campo é obrigatório</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">E-mail </label>
                                                                                    <input type="text" value="<?php echo $proveedores_dato['email']; ?>" id="email<?php echo $id_proveedor; ?>" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Endereço<b>*</b></label>
                                                                                    <textarea name="" id="direccion<?php echo $id_proveedor; ?>" cols="30" rows="3" class="form-control"><?php echo $proveedores_dato['direccion'] ?></textarea>
                                                                                    <small style="color: red; display: none;" id="lbl_direccion<?php echo $id_proveedor; ?>"><b>*</b> Este campo é obrigatório</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                        <button type="button" class="btn btn-success" id="btn_update<?php echo $id_proveedor; ?>"><b>Atualizar</b></button>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                        <!-- /.fim modal -->
                                                        <script>
                                                            $('#btn_update<?php echo $id_proveedor; ?>').click(function() {
                                                    var id_proveedor = '<?php echo $id_proveedor; ?>';
                                                    var nombre_proveedor = $('#nombre_proveedor<?php echo $id_proveedor; ?>').val();
                                                                var celular = $('#celular<?php echo $id_proveedor; ?>').val();
                                                                var telefono = $('#telefono<?php echo $id_proveedor; ?>').val();
                                                                var empresa = $('#empresa<?php echo $id_proveedor; ?>').val();
                                                                var email = $('#email<?php echo $id_proveedor; ?>').val();
                                                                var direccion = $('#direccion<?php echo $id_proveedor; ?>').val();

                                                                if (nombre_proveedor == "") {
                                                                    $('#nombre_proveedor<?php echo $id_proveedor; ?>').focus();
                                                                    $('#lbl_nombre<?php echo $id_proveedor; ?>').css('display', 'block');
                                                                } else if (celular == "") {
                                                                    $('#celular<?php echo $id_proveedor; ?>').focus();
                                                                    $('#lbl_celular<?php echo $id_proveedor; ?>').css('display', 'block');
                                                                } else if (empresa == "") {
                                                                    $('#empresa<?php echo $id_proveedor; ?>').focus();
                                                                    $('#lbl_empresa<?php echo $id_proveedor; ?>').css('display', 'block');
                                                                } else if (direccion == "") {
                                                                    $('#direccion<?php echo $id_proveedor; ?>').focus();
                                                                    $('#lbl_direccion<?php echo $id_proveedor; ?>').css('display', 'block');
                                                                } else {
                                                                    var url = "../app/controllers/proveedores/update.php";
                                                                    $.get(url, {
                                                                        id_proveedor:id_proveedor,
                                                                        nombre_proveedor: nombre_proveedor,
                                                                        celular: celular,
                                                                        telefono: telefono,
                                                                        empresa: empresa,
                                                                        email: email,
                                                                        direccion: direccion
                                                                    }, function(datos) {
                                                                        $('#respuesta').html(datos);
                                                                    });
                                                                }


                                                            });
                                                        </script>
                                                        <div id="respuesta_update<?php echo $id_proveedor; ?>"></div>
                                                    </div>



                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete<?php echo $id_proveedor; ?>">
                                                            <i class="fa fa-trash"></i> Excluir
                                                        </button>

                                                        <!--Modal para excluir fornecedor-->
                                                        <div class="modal fade" id="modal-delete<?php echo $id_proveedor; ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style="background-color: #ca0a0b; color: white;">
                                                                        <h4 class="modal-title">Deseja EXCLUIR o Fornecedor?</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">


                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Nome do Fornecedor<b>*</b></label>
                                                                                    <input type="text" id="nombre_proveedor<?php echo $id_proveedor; ?>" value="<?php echo $nombre_proveedor; ?>" class="form-control" disabled>
                                                                                    <small style="color: red; display: none;" id="lbl_nombre<?php echo $id_proveedor; ?>"><b>*</b> Este campo é obrigatório</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Celular<b>*</b></label>
                                                                                    <input type="number" value="<?php echo $proveedores_dato['celular']; ?>" id="celular<?php echo $id_proveedor; ?>" class="form-control" disabled>
                                                                                    <small style="color: red; display: none;" id="lbl_celular<?php echo $id_proveedor; ?>"><b>*</b> Este campo é obrigatório</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Telefone</label>
                                                                                    <input type="number" value="<?php echo $proveedores_dato['telefono']; ?>" id="telefono<?php echo $id_proveedor; ?>" class="form-control" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Empresa<b>*</b></label>
                                                                                    <input type="text" value="<?php echo $proveedores_dato['empresa']; ?>" id="empresa<?php echo $id_proveedor; ?>" class="form-control" disabled>
                                                                                    <small style="color: red; display: none;" id="lbl_empresa<?php echo $id_proveedor; ?>"><b>*</b> Este campo é obrigatório</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">E-mail </label>
                                                                                    <input type="text" value="<?php echo $proveedores_dato['email']; ?>" id="email<?php echo $id_proveedor; ?>" class="form-control" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Endereço<b>*</b></label>
                                                                                    <textarea name="" id="direccion<?php echo $id_proveedor; ?>" cols="30" rows="3" class="form-control" disabled><?php echo $proveedores_dato['direccion'] ?></textarea>
                                                                                    <small style="color: red; display: none;" id="lbl_direccion<?php echo $id_proveedor; ?>"><b>*</b> Este campo é obrigatório</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                        <button type="button" class="btn btn-danger" id="btn_delete<?php echo $id_proveedor; ?>"><b>E X C L U I R</b></button>
                                                                    </div>
                                                                    <div id="respuesta_delete<?php echo $id_proveedor; ?>"></div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                        <!-- /.fim modal -->
                                                        <script>
                                                            $('#btn_delete<?php echo $id_proveedor; ?>').click(function() {
                                                    var id_proveedor = '<?php echo $id_proveedor; ?>';
                                                                    var url2 = "../app/controllers/proveedores/delete.php";
                                                                    $.get(url2, {
                                                                        id_proveedor:id_proveedor}, function(datos) {
                                                                        $('#respuesta_delete<?php echo $id_proveedor; ?>').html(datos);
                                                                    });
                                                            });
                                                        </script>
                                                       
                                                    </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Fornecedores",
                "infoEmpty": "Mostrando 0 a 0 de 0 Fornecedores",
                "infoFiltered": "(Filtrado de _MAX_ total de Fornecedores)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Fornecedores",
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


<!--Modal para registrar fornecedores-->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1d36b6; color: white;">
                <h4 class="modal-title">Criar Novo Fornecedor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nome do Fornecedor<b>*</b></label>
                            <input type="text" id="nombre_proveedor" class="form-control">
                            <small style="color: red; display: none;" id="lbl_nombre"><b>*</b> Este campo é obrigatório</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Celular<b>*</b></label>
                            <input type="number" id="celular" class="form-control">
                            <small style="color: red; display: none;" id="lbl_celular"><b>*</b> Este campo é obrigatório</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Telefone</label>
                            <input type="number" id="telefono" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Empresa<b>*</b></label>
                            <input type="text" id="empresa" class="form-control">
                            <small style="color: red; display: none;" id="lbl_empresa"><b>*</b> Este campo é obrigatório</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">E-mail </label>
                            <input type="text" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Endereço<b>*</b></label>
                            <textarea name="" id="direccion" cols="30" rows="3" class="form-control"></textarea>
                            <small style="color: red; display: none;" id="lbl_direccion"><b>*</b> Este campo é obrigatório</small>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn_create">Registrar Fornecedor</button>
            </div>
            <div id="respuesta"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.fim modal -->

<script>
    $('#btn_create').click(function() {
        //alert('GUARDAR');
        var nombre_proveedor = $('#nombre_proveedor').val();
        var celular = $('#celular').val();
        var telefono = $('#telefono').val();
        var empresa = $('#empresa').val();
        var email = $('#email').val();
        var direccion = $('#direccion').val();

        if (nombre_proveedor == "") {
            $('#nombre_proveedor').focus();
            $('#lbl_nombre').css('display', 'block');
        } else if (celular == "") {
            $('#celular').focus();
            $('#lbl_celular').css('display', 'block');
        } else if (empresa == "") {
            $('#empresa').focus();
            $('#lbl_empresa').css('display', 'block');
        } else if (direccion == "") {
            $('#direccion').focus();
            $('#lbl_direccion').css('display', 'block');
        } else {
            var url = "../app/controllers/proveedores/create.php";
            $.get(url, {
                nombre_proveedor: nombre_proveedor,
                celular: celular,
                telefono: telefono,
                empresa: empresa,
                email: email,
                direccion: direccion
            }, function(datos) {
                $('#respuesta').html(datos);
            });
        }
    });
</script>