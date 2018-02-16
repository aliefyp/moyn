<div class="row">
    <form method="post" class="form-horizontal" action="<?php echo base_url().$url_submit;?>" enctype="multipart/form-data">
    <div class="span10">
      <div class="widget">

        <div class="widget-header"> <i class="icon-list-alt"></i>
          <h3> <?php echo $_title; ?></h3>
        </div>
        <div class="widget-content">            
                <fieldset>
                  <div class="control-group">                     
                    <label class="control-label" for="project_name">Project Name</label>
                    <div class="controls">
                      <input type="text" class="span3" id="project_name" name="project_name" value="<?php echo empty($result['content']['name']) ? '' : $result['content']['name']; ?>" placeholder="Project Name">
                      <input type="hidden" class="span3" id="project_num" name="project_num" value="<?php echo $project?>">
                      <input type="hidden" class="span3" id="project_id" name="project_id" value="<?php echo empty($id_project) ? '' : $id_project;?>">
                    </div>    
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="project_type">Project Type</label>
                    <div class="controls">
                      <input type="text" name="project_type" id="project_type" placeholder="Project Type" value="<?php echo empty($result['content']['type']) ? '' : $result['content']['type']; ?>">
                    </div>
                  </div>

                  <div class="control-group">                     
                    <label class="control-label" for="project_status">Status</label>
                    <div class="controls">
                      <select name="project_status" id="project_status" class="span2">
                        <option value="-">Select Status</option>
                        <option value="1" <?php echo (!empty($result['content']['active']) && $result['content']['active']) ? 'selected' : ''; ?>>Active</option>
                        <option value="0" <?php echo (!empty($result['content']['active']) && $result['content']['active']) ? '' : 'selected'; ?>>Inactive</option>
                      </select>
                    </div>                      
                  </div>
                
                <?php if(isset($images) &&   $images){ 
                  foreach ($images as $key => $value) { ?>
                      <div class="control-group" id="foto_input<?php echo $key?>">                     
                        <label class="control-label" for="project_img">Image</label>
                        <div class="controls" id="img_area">
                          <input type="file" name="fotos[]" id="foto<?php echo $key?>" onchange="showImage(this,'<?php echo $key?>')">
                          <img src="<?php echo base_url().$value['url']?>" id="imgctr<?php echo $key?>" width="250">
                        </div>
                      </div>  
                  <?php }
                }
                else{ ?>
                    <div class="control-group" id="foto_input0">                     
                      <label class="control-label" for="project_img">Image</label>
                      <div class="controls" id="img_area">
                        <input type="file" name="fotos[]" id="foto0" onchange="showImage(this,0)">
                      </div>
                    </div>
                <?php $key = 0;}
                ?>

                  <div class="control-group">
                    <div class="controls">
                      <a class="btn btn-success" id="btn_plus"><i class="icon-plus"></i></a>
                    </div>
                  </div>

                  <div class="control-group" id="foto_input0">
                    <div class="controls">
                      *max. size 2MB/image
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
</form>
</div>

<script type="text/javascript">
  var ctr = '<?php echo $key+1;?>';
  var foto_input = '<?php echo $key;?>';
  $('#btn_plus').click(function(){
    $('#foto_input'+foto_input).after('<div class="control-group" id="foto_input'+ctr+'">'+
                                          '<div class="controls" id="img_area">'+
                                            '<input type="file" name="fotos[]" id="foto'+ctr+'" onchange="showImage(this,'+ctr+')">'+
                                          '</div>'+
                                        '</div>');
    ctr++; foto_input++;
  });

  function showImage(elem,num){
      $('#imgctr'+num).remove();
      if (elem.files && elem.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#foto'+num).after('<img src="'+e.target.result+'" id="imgctr'+num+'" width="250">');
      };

      reader.readAsDataURL(elem.files[0]);
    }
  }
</script>
