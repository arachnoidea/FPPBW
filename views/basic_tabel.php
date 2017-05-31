 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Daftar Oleh Oleh Shinta</h3>
        <div class="row">
        
        <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Kode Barang </th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nama Barang</th>
                                  <th><i class="fa fa-bookmark"></i> Harga</th>
                                  <th><i class="fa fa-bookmark"></i> Deskripsi</th>
                                  <th><i class="fa fa-bookmark"></i> Gambar Upload</th>
                                  <th><i class=" fa fa-edit"></i> Edit</th>
                                  <th></th>
                              </tr>
                              </thead>

                              <?php 
                                if (is_array($data)) {
                                  foreach ($data as $d ) {
                                    
                                  ?> 
                              <tbody>
                              <tr>
                                  <td><?php echo $d['kode_barang']; ?></td>
                                  <td class="hidden-phone"><?php echo $d['nama_barang']; ?></td>
                                  <td><?php echo $d['harga']; ?></td>
                                  <td><?php echo $d['deskripsi']; ?></td>
                                  <td style="text-align:center" style="width:50%;"><img src=<?php echo base_url($d['upload']); ?> style="height:100px;"></td>

                                  <td align="center">
                                      <button id="<?php echo "pencil".$d['kode_barang']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button id="<?php echo "trash".$d['kode_barang']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>     

                                      <script type="text/javascript">
                                        document.getElementById("<?php echo "pencil".$d['kode_barang']; ?>").onclick = function() {location.href = "<?php echo base_url()."index.php/Admin/edit_data/".$d['kode_barang']; ?>" };
                                       </script> 

                                       <script type="text/javascript">
                                        document.getElementById("<?php echo "trash".$d['kode_barang']; ?>").onclick = function() {location.href = "<?php echo base_url()."index.php/Admin/do_delete/".$d['kode_barang']; ?>" };
                                       </script> 
                                  </td>
                              </tr>
                              </tbody>
                              <?php }} ?>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->    
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->