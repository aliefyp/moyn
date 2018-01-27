<div class="row">
    <form method="post" class="form-horizontal" action="<?php echo base_url();?>input_content/submit_content" enctype="multipart/form-data">
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
                      <input type="text" class="span3" id="project_name" name="project_name" value="" placeholder="Project Name">
                      <input type="hidden" class="span3" id="project_num" name="project_num" value="<?php echo $project?>">
                    </div>    
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="project_type">Project Type</label>
                    <div class="controls">
                      <input type="text" name="project_type" id="project_type" placeholder="Project Type">
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
                                    
                  <div class="control-group" id="foto_input0">                     
                    <label class="control-label" for="project_img">Image</label>
                    <div class="controls" id="img_area">
                      <input type="file" name="fotos[]" id="foto0" onchange="showImage(this,0)">
                    </div>
                  </div>

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
  var ctr = 1;
  var foto_input = 0;
  $('#btn_plus').click(function(){
    $('#foto_input'+foto_input).after('<div class="control-group" id="foto_input'+ctr+'">'+
                                          '<div class="controls" id="img_area">'+
                                            '<input type="file" name="fotos[]" id="foto'+ctr+'" onchange="showImage(this,'+ctr+')">'+
                                          '</div>'+
                                        '</div>');
    ctr++; foto_input++;
  });

  function showImage(elem,num){
      if (elem.files && elem.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#foto'+num).after('<img src="'+e.target.result+'" width="250">');
      };

      reader.readAsDataURL(elem.files[0]);
    }
  }
</script>
