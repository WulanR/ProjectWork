<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Kuliner</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <table width="100%" class="table table-striped" id="dataTables-example">
                            <a href="<?php echo base_url('').'index.php/add_kuliner/index'; ?>" class="btn btn-primary">Tambah</a>

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id</th>
                                        <th>Admin</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Keterangan</th>
                                        <th>Alamat</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <?php
                                $no = 1;
                                foreach ($kuliner as $data) {
                                    echo'
                                    <tr>
                                        <td>'.$no.'</td>
                                        <td>'.$data->ID_KULINER.'</td>
                                        <td>'.$data->ID_ADMIN.'</td>
                                        <td>'.$data->NAMA_KULINER.'</td>
                                        <td>'.$data->HARGA_KULINER.'</td>
                                        <td>'.$data->KETERANGAN.'</td>
                                        <td>'.$data->ALAMAT_KULINER.'</td>
                                        <td>'.$data->FOTO.'</td>
                                        <td>
                                            <a href="'.base_url().'index.php/table_kuliner/hapus/'.$data->ID_KULINER.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                            <a href="'.base_url().'index.php/edit_kul/index/'.$data->ID_KULINER.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Edit</a>
                                        </td>
                                    </tr>
                                    ';
                                    $no++;
                                }
                                ?>

                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>