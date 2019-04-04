<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Artikel</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url()?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url()?>assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>assets/admin/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/datables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="<?php echo base_url()?>index.php/Admin">Start Bootstrap</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <!--<li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>-->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>index.php/Admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="<?php echo base_url()?>index.php/Login">Login</a>
                    <a class="dropdown-item" href="<?php echo base_url()?>index.php/Login/register">Register</a>
                    <a class="dropdown-item" href="<?php echo base_url()?>index.php/Login/forgot">Forgot Password</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a class="dropdown-item" href="404.html">404 Page</a>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>index.php/Admin/charts">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url()?>index.php/Admin/article">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Artikel</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url()?>index.php/Admin/view">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Gambar</span></a>
            </li>
        </ul>





        <div id="container-wraper">
            <div class="container">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col">

                        <h1>Artikel
                            <small>List</small>
                            <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                        </h1>


                        <table class="table table-striped" id="mydata">
                            <thead>
                                <tr>
                                    <th>ID Artikel</th>
                                    <th>Judul Aritkel</th>
                                    <th>Deskripsi</th>
                                    
                                    <th style="text-align: right;">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- MODAL ADD -->
            <form>
                <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Artikel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Id Artikel</label>
                                    <div class="col-md-10">
                                        <input type="text" name="id_artikel" id="id_artikel" class="form-control" placeholder="Id Artikel">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Judul Artikel</label>
                                    <div class="col-md-10">
                                        <input type="text" name="judul_artikel" id="judul_artikel" class="form-control" placeholder="Judul Artikel">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Deskripsi</label>
                                    <div class="col-md-10">
                                        <input type="text" name="full_artikel" id="full_artikel" class="form-control" placeholder="Deskripsi">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--END MODAL ADD-->

            <!-- MODAL EDIT -->
            <form>
                <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Artikel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Id Artikel</label>
                                    <div class="col-md-10">
                                        <input type="text" name="id_artikel_edit" id="id_artikel_edit" class="form-control" placeholder="Id Artikel" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Judul Artikel</label>
                                    <div class="col-md-10">
                                        <input type="text" name="judul_artikel_edit" id="judul_artikel_edit" class="form-control" placeholder="Judul Article">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Deskripsi</label>
                                    <div class="col-md-10">
                                        <input type="text" name="desk_artikel_edit" id="desk_artikel_edit" class="form-control" placeholder="Deskripsi">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--END MODAL EDIT-->

            <!--MODAL DELETE-->
            <form>
                <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Artikel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <strong>Are you sure to delete this record?</strong>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id_artikel_delete" id="id_artikel_delete" class="form-control">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--END MODAL DELETE-->

            <script type="text/javascript" src="<?php echo base_url().'assets/admin/js/jquery-3.2.1.js'?>"></script>
            <script type="text/javascript" src="<?php echo base_url().'assets/admin/js/bootstrap.js'?>"></script>
            <script type="text/javascript" src="<?php echo base_url().'assets/admin/js/jquery.dataTables.js'?>"></script>
            <script type="text/javascript" src="<?php echo base_url().'assets/admin/js/dataTables.bootstrap4.js'?>"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    show_artikel();

                    $('#mydata').dataTable();

                    //fungsi menampilkan semua artikel
                    function show_artikel() {
                        $.ajax({
                            type: 'ajax',
                            url: '<?php echo site_url('C_CRUD/article_data')?>',
                            async: false,
                            dataType: 'json',
                            success: function(data) {
                                var html = '';
                                var i;
                                for (i = 0; i < data.length; i++) {
                                    html += '<tr>' +
                                        '<td>' + data[i].id_artikel + '</td>' +
                                        '<td>' + data[i].judul_artikel + '</td>' +
                                        '<td>' + data[i].full_artikel + '</td>' +
                                        
                                        '<td style="text-align:right;">' +
                                        '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_artikel="' + data[i].id_artikel + '" data-judul_artikel="' + data[i].judul_artikel + '" data-desk_artikel="' + data[i].desk_artikel + '">Edit</a>' + ' ' +
                                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_artikel="' + data[i].id_artikel + '">Delete</a>' +
                                        '</td>' +
                                        '</tr>';
                                }
                                $('#show_data').html(html);
                            }

                        });
                    }

                    //Save artikle
                    $('#btn_save').on('click', function() {
                        var id_artikel = $('#id_artikel').val();
                        var judul_artikel = $('#judul_artikel').val();
                        var full_artikel = $('#full_artikel').val();
                        $.ajax({
                            type: "POST",
                            url: "<?php echo site_url('C_CRUD/save')?>",
                            dataType: "JSON",
                            data: {
                                id_artikel: id_artikel,
                                judul_artikel: judul_artikel,
                                full_artikel: full_artikel
                            },
                            success: function(data) {
                                $('[name="id_artikel"]').val("");
                                $('[name="judul_artikel"]').val("");
                                $('[name="full_artikel"]').val("");
                                $('#Modal_Add').modal('hide');
                                show_artikel();
                            }
                        });
                        return false;
                    });

                    //get data for update record
                    $('#show_data').on('click', '.item_edit', function() {
                        var id_artikel = $(this).data('id_artikel');
                        var judul_artikel = $(this).data('judul_artikel');
                        var full_artikel = $(this).data('full_artikel');

                        $('#Modal_Edit').modal('show');
                        $('[name="id_artikel_edit"]').val(id_artikel);
                        $('[name="judul_artikel_edit"]').val(judul_artikel);
                        $('[name="desk_edit"]').val(full_artikel);
                    });

                    //update record to database
                    $('#btn_update').on('click', function() {
                        var id_artikel = $('#id_artikel_edit').val();
                        var judul_artikel = $('#judul_artikel_edit').val();
                        var full_artikel = $('#desk_artikel_edit').val();
                        $.ajax({
                            type: "POST",
                            url: "<?php echo site_url('C_CRUD/update')?>",
                            dataType: "JSON",
                            data: {
                                id_artikel: id_artikel,
                                judul_artikel: judul_artikel,
                                full_artikel: full_artikel
                            },
                            success: function(data) {
                                $('[name="id_artikel_edit"]').val("");
                                $('[name="judul_artikel_edit"]').val("");
                                $('[name="desk_artikel_edit"]').val("");
                                $('#Modal_Edit').modal('hide');
                                show_artikel();
                            }
                        });
                        return false;
                    });

                    //get data for delete record
                    $('#show_data').on('click', '.item_delete', function() {
                        var id_artikel = $(this).data('id_artikel');

                        $('#Modal_Delete').modal('show');
                        $('[name="id_artikel_delete"]').val(id_artikel);
                    });

                    //delete record to database
                    $('#btn_delete').on('click', function() {
                        var id_artikel = $('#id_artikel_delete').val();
                        $.ajax({
                            type: "POST",
                            url: "<?php echo site_url('C_CRUD/delete')?>",
                            dataType: "JSON",
                            data: {
                                id_artikel: id_artikel
                            },
                            success: function(data) {
                                $('[name="id_artikel_delete"]').val("");
                                $('#Modal_Delete').modal('hide');
                                show_product();
                            }
                        });
                        return false;
                    });

                });

                //upload gambar
            </script>
        </div>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Travel Bucket List 2018</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->


    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url()?>index.php/Login/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/admin/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url()?>assets/admin/js/demo/datatables-demo.js"></script>

</body>

</html>