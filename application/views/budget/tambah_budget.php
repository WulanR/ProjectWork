<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header">Tambah Budget</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">

                                <?php
                                    if(!empty($notif)){
                                    echo '<div class="alert alert-danger">';
                                    echo $notif;
                                    echo '</div>';
                                    }
                                ?>

                                    <form method="post" id='form-tempat' enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <input type="text" class="form-control" name="kategori">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="text" class="form-control" name="jumlah">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>