   <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Admin Website OPD Tahun 2018</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 follow-children">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover datatable" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Unit Kerja</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Pangkat</th>
                                        <th>Jabatan</th>
                                        <th>Email</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $index => $v): ?>
                                    <tr class="odd gradeX">
                                        <td class="center"><?= $index + 1 ?></td>
                                        <td class="center"><?php echo $v->nama; ?></td>
                                        <td class="center"><?php echo $v->nip; ?></td>
                                        <td class="center"><?php echo $v->unit_kerja; ?></td>
                                        <td class="center"><?php echo $v->alamat; ?></td>
                                        <td class="center"><?php echo $v->no_hp; ?></td>
                                        <td class="center"><?php echo $v->pangkat; ?></td>
                                        <td class="center"><?php echo $v->jabatan; ?></td>
                                        <td class="center"><?php echo $v->email; ?></td>
                                        <td><?php echo $v->Tahun; ?></td>

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
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
