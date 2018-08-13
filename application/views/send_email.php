        <!-- Navigation -->        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">FORM KIRIM EMAIL</h1>
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
                                    <form method="POST" action="/siap/index.php/mycontroller/send_email" enctype="multipart/form-data" >
                                        <div class="form-group">
                                            <label>Alamat E-mail Tujuan</label>
                                            <textarea class="form-control" name="to"></textarea>
                                         </div>
                                        <div class="form-group">
                                            <label>No Handphone Tujuan</label>
                                            <textarea class="form-control" name="to_hp"></textarea>
                                         </div>

                                        <div class="form-group">
                                            <label>Title</label>
                                            <textarea class="form-control" name="title" required="required">Pemberitahuan Permohonan</textarea>
                                         </div>
                                         <div class="form-group">
                                            <label>Body</label>
                                            <textarea class="form-control" name="body" required="required" style="height: 130px">Assalamualaikum.wr.wb.       
            Kami dari LPSE Purbalingga ingin menginformasikan bahwa User dan Password Pemohon sudah jadi. Mohon untuk mengubah Password setelah login, terima kasih.

Username : 
Password :

Hormat kami,
-Admin Agency LPSE Purbalingga-</textarea>
                                         </div>
                                        <div class="form-group">
                                            <button class="btn btn-success">Send Email</button>
                                         </div>
                                     </div>
                                 </form>
                                             
                                        </div>
                                            

                                        

