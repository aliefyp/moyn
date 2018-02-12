<div class="row">
    <form method="post" class="form-horizontal" action="<?php echo base_url();?>input_news/submit_news" enctype="multipart/form-data">
    <div class="span10">
      <div class="widget">

        <div class="widget-header"> <i class="icon-list-alt"></i>
          <h3> <?php echo $_title; ?></h3>
        </div>
        <div class="widget-content">            
                <fieldset>
                  <div class="control-group">                     
                    <label class="control-label" for="news_title">News Title</label>
                    <div class="controls">
                      <input type="text" class="span3" id="news_title" name="news_title" value="<?php echo empty($result['content']['name']) ? '' : $result['content']['name']; ?>" placeholder="News Title">
                      <input type="hidden" class="span3" id="id_news" name="id_news" value="<?php echo empty($id_project) ? '' : $id_project;?>">
                    </div>    
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="news_desc">News Description</label>
                    <div class="controls">
                      <textarea rows="5" cols="50" type="text" name="news_desc" id="news_desc" placeholder="News Description"></textarea>
                    </div>
                  </div>
                
                    <div class="control-group" id="foto_input0">                     
                      <label class="control-label" for="project_img">Image</label>
                      <div class="controls" id="img_area">
                        <input type="file" name="fotos[]" id="foto0" onchange="showImage(this,0)">
                      </div>
                    </div>

                  <!-- <div class="control-group">
                    <div class="controls">
                      <a class="btn btn-success" id="btn_plus"><i class="icon-plus"></i></a>
                    </div>
                  </div> -->

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
