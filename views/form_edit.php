<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3 style="font-weight: bold; ">Edit Barang</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  
                  <div class="form-panel">
                      <form class="form-horizontal style-form" method="POST" action="<?php echo base_url(); ?>index.php/admin/do_update" enctype="multipart/form-data" >
                          
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode Barang</label>
                              <div class="col-sm-6">
                                  <input type="text" name="kode_barang" class="form-control" value="<?php echo $kode_barang; ?>" readonly>
                              </div>
                          </div> 


                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang; ?>" >
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga </label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>" >
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gambar Upload</label>
                              <div class="col-sm-6"><?php echo form_upload('pic'); ?>
                              </div>
                          </div>

                          <div class="form-group hidden-phone">
                              <label class="col-sm-2 col-sm-2 control-label" for="textarea2">Deskripsi</label>
                              <div class="col-sm-6">
                              <textarea class="form-control" name="deskripsi" row="4" ><?php echo $deskripsi; ?></textarea>
                              </div>
                          </div>
                          <div class="form-actions">
                          <button class="btn btn-primary" name="submit"  type="Submit">Save changes</button>
                          <a href="<?php echo site_url('admin/bt');?>"<button type="reset" class="btn">Cancel</button></a>
                        </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->

          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->