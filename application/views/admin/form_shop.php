<div class="row">
    <form method="post" class="form-horizontal" action="<?php echo base_url();?>my_shop/submit_shop" enctype="multipart/form-data">
    <div class="span10">
      <div class="widget">

        <div class="widget-header"> <i class="icon-list-alt"></i>
          <h3> <?php echo $_title; ?></h3>
        </div>
        <div class="widget-content">            
                <fieldset>                  
                  <div class="control-group">                     
                    <label class="control-label" for="item_name">Item Name</label>
                    <div class="controls">
                      <input type="text" class="span3" id="item_name" name="item_name" value="" placeholder="Item Name">
                    </div>    
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="item_desc">Item Description</label>
                    <div class="controls">
                      <textarea rows="5" cols="50" type="text" name="item_desc" id="item_desc" placeholder="Item Description"></textarea>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="item_price">Item Price</label>
                    <div class="controls">
                      <input type="text" name="item_price" id="item_price" placeholder="Item Price">
                    </div>
                  </div>

                  <div class="control-group">                     
                    <label class="control-label" for="item_status">Status</label>
                    <div class="controls">
                      <select name="item_status" id="item_status" class="span2">
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

  function showImage(elem, num){
      if (elem.files && elem.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#foto'+num).after('<img src="'+e.target.result+'" width="250">');
      };

      reader.readAsDataURL(elem.files[0]);
    }
  }

  $("#item_price").priceFormat({
    prefix: '',
    centsLimit: 0,
    thousandsSeparator: '.',
    clearOnEmpty: true
  });
</script>
