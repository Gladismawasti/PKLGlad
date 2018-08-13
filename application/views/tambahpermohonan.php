        <!-- Navigation -->        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">FORM ISIAN PERMOHONAN</h1>
                    <br>
                        <?php if ($this->session->flashdata('alert')): ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('alert'); ?>
                        </div>
                       <?php endif; ?>

                       <?php if ($this->session->flashdata('alert1')): ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('alert1'); ?>
                        </div>
                       <?php endif; ?>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="POST" action="" enctype="multipart/form-data" >
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" required="required">
                                            

                                            <label>NIP</label>
                                            <input class="form-control" name="nip" required="required">
                                            

                                            <label>Unit Kerja</label>

                                            <select name="unit_kerja" class="form-control">
                                                <option value="">-- Pilih Unit Kerja --</option>}
                                            <?php foreach ($data as $v): ?>
                                                <option value="<?php echo $v->nama_unitkerja; ?>">
                                                <?php echo $v->nama_unitkerja; ?></option>
                                            <?php endforeach; ?>   
                                            </select>

                                            <a href="<?php echo base_url('index.php/mycontroller/tambahunitkerja'); ?>">[Tambah Unit Kerja]</a>
                                            <br>

                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" name="alamat" required="required"></textarea>
                                            

                                            <label>No Hp</label>
                                            <input class="form-control" name="no_hp" required="required">
                                            

                                            <label>Pangkat</label>
                                            <select name="pangkat" class="form-control" name="pangkat">
                                               <option value="">-- Pilih Pangkat --</option>}
                                                <option value="Juru Muda">Juru Muda</option>
                                                <option value="Juru Muda Tingkat I">Juru Muda Tingkat I</option>
                                                <option value="Juru">Juru</option>
                                                <option value="Juru Tingkat I">Juru Tingkat I</option>
                                                <option value="Pengatur Muda">Pengatur Muda</option>
                                                <option value="Pengatur Muda Tingkat I">pengatur muda tingkat I</option>
                                                <option value="Pengatur">Pengatur</option>
                                                <option value="Pengatur Tingkat I">Pengatur Tingkat I</option>
                                                <option value="Penata Muda">Penata Muda</option>
                                                <option value="Penata Muda Tingkat I">Penata Muda Tingkat I</option>
                                                <option value="Penata">Penata</option>
                                                <option value="Penata Tingkat I">Penata Tingkat I</option>
                                                <option value="Pembina">Pembina</option>
                                                <option value="Pembina Tingkat I">Pembina Tingkat I</option>
                                                <option value="Pembina Utama Muda">Pembina Utama Muda</option>
                                                <option value="Pembina Utama Madya">Pembina Utama Madya</option>
                                                <option value="Pembina Utama">Pembina Utama</option>
                                                 </select>
                                            

                                            <label>Golongan</label>
                                            <select name="golongan" class="form-control" name="golongan">
                                                <option value="">-- Pilih Golongan --</option>}
                                                <option value="I A">I A</option>
                                                <option value="I B">I B</option>
                                                <option value="I C">I C</option>
                                                <option value="I D">I D</option>
                                                <option value="II A">II A</option>
                                                <option value="II B">II B</option>
                                                <option value="II C">II C</option>
                                                <option value="II D">II D</option>
                                                <option value="III A">III A</option>
                                                <option value="III B">III B</option>
                                                <option value="III C">III C</option>
                                                <option value="III D">III D</option>
                                                <option value="IV A">IV A</option>
                                                <option value="IV B">IV B</option>
                                                <option value="IV C">IV C</option>
                                                <option value="IV D">IV D</option>
                                                <option value="IV E">IV E</option>
                                                </select>
                                            

                                            <label>Jabatan</label>
                                            <input class="form-control" name="jabatan" required="required">
                                            

                                            <label>email</label>
                                            <input class="form-control" name="email" required="required">
                    

                                            <label>Jenis Permohonan</label>
                                            <select name="jenis_permohonan" class="form-control" name="jenis_permohonan">
                                                <option value=" ">-- Pilih Permohonan --</option>
                                                <option value="PPK">PPK</option>
                                                <option value="PA">PA</option>
                                                <option value="Admin PA">Admin PA</option>
                                                <option value="PPB">PPB</option>
                                                <option value="Panitia Pokja">Panitia Pokja</option>
                                                <option value="Admin Website">Admin Website</option>
                                            </select>
 
                                            <div class="form-group">
                                            <label>Surat Permohonan</label>
                                            <input type="file" name="surat_permohonan">
                                            <br>
                                             <div class="form-group">
                                            <label>SK Pengangkatan</label>
                                            <input type="file" name="sk_pengangkatan">
                                            <br>
                                             <div class="form-group">
                                            <label>Sertifikat Pengadaan</label>
                                            <input type="file" name="sertifikat_pengadaan">
                                            <br>

                                              <label>Tahun</label>
                                              <input class="form-control" name="Tahun" required="required">

                                             <input type="submit" name="submit" value="Simpan" class="btn btn-primary" />
                                             <input type="reset" name="submit" value="Batal" class="btn btn-primary" />
                                

                                         </div>
                                     </div>
                                 </form>
                                             
                                        </div>
                                            

                                        

