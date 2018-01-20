<div class="row">
    <form method="post" class="form-horizontal" action="<?php echo base_url();?>siswa/tambahSiswa">
    <div class="span7">
      <div class="widget">

        <div class="widget-header"> <i class="icon-list-alt"></i>
          <h3> <?php echo $_title; ?></h3>
        </div>
        <div class="widget-content">            
                <fieldset>                  
                  <div class="control-group">                     
                    <label class="control-label" for="project_name">Project Name</label>
                    <div class="controls">
                      <input type="text" class="span3" id="project_name" name="project_name" value="" placeholder="Project Name">
                    </div>    
                  </div>

                  <div class="control-group">                     
                    <label class="control-label" for="project_status">Status</label>
                    <div class="controls">
                      <select name="project_status" id="project_status" class="span2">
                        <option value="-">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>                      
                  </div>
                                    
                  <div class="control-group">                     
                    <label class="control-label" for="project_img">Image</label>
                    <div class="controls">
                      <input type="file" name="Image">
                    </div>
                    <div class="controls">
                      <input type="file" name="Image">
                    </div>
                    <div class="controls">
                      <a href="" class="btn btn-success">tambah</a>
                    </div>
                  </div>                   
                  
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button> 
                    <button class="btn">Cancel</button>
                  </div>
                </fieldset>            
        </div>
      </div>
    </div>
    <div class="span5">
      <div class="widget">

        <div class="widget-header"> <i class="icon-list-alt"></i>
          <h3> Form Biaya Pendaftaran Siswa</h3>
        </div>
          <div class="widget-content">
            <div class="control-group">                     
              <label class="control-label" for="firstname">Biaya Daftar</label>
              <div class="controls">
                <input type="text" class="span3" id="biaya_daftar" name="biaya_daftar" value="" placeholder="Biaya Pendaftaran">                                      
              </div>    
            </div>

            <div class="control-group">                     
              <label class="control-label" for="firstname">Biaya Bimbel</label>
              <div class="controls">
                <input type="text" class="span3" id="biaya_bimbel" name="biaya_bimbel" value="" placeholder="Biaya Bimbel">                                      
              </div>    
            </div>

          </div>          
      </div>
    </div>
</form>
</div>

<script type="text/javascript">
</script>
