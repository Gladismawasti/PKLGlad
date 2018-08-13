        <!-- Navigation -->        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">TAMBAH UNIT KERJA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Unit Kerja
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form role="form" method="POST" action="">
                                        <div class="form-group">
                                            <label>Nama Unit Kerja</label>
                                            <input class="form-control" name="nama_unitkerja" placeholder="Isikan Nama Instansi / OPD">
                                            <br>

                                            <input button type="submit" name="submit" value="Tambah" class="btn btn-primary" />
                                                                                        
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Unit Kerja
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>    
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data as $v): ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $v->nama_unitkerja; ?></td>
                                        <td>
                                         <a href="/siap/index.php/mycontroller/editunitkerja/<?= $v->id_unitkerja ?>" class="btn btn-warning btn-xs">Edit</a>
                                         <a href="/siap/index.php/mycontroller/hapusunitkerja/<?= $v->id_unitkerja ?>" class="btn btn-danger btn-xs">Delete</a>
                                        </td>
                                    </tr>
                                     <?php endforeach; ?>
                                </tbody>
                            </table>
                                    
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
        </div>
                                            

                                        


