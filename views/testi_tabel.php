 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Testimoni Oleh Oleh Shinta</h3>
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
                                  <th><i class="fa fa-bookmark"></i> Testimoni</th>
                                  <th><i class="fa fa-bookmark"></i> Gambar Upload</th>
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
                                  <td><?php echo $d['testimoni']; ?></td>
                                  <td style="text-align:center" style="width:50%;"><img src=<?php echo base_url($d['upload']); ?> style="height:100px;"></td>
                              </tr>
                              </tbody>
                              <?php }} ?>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->    
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->