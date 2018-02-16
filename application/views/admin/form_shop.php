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
                      <input type="text" class="span3" id="item_name" name="item_name" value="<?php echo empty($shop_item['name_item'])? '' : $shop_item['name_item'] ?>" placeholder="Item Name">
                      <input type="hidden" class="span3" id="item_id" name="item_id" value="<?php echo empty($shop_item['id_item'])? '' : $shop_item['id_item'] ?>">
                    </div>    
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="item_desc">Item Description</label>
                    <div class="controls">
                      <textarea rows="5" cols="50" type="text" name="item_desc" id="item_desc" placeholder="Item Description"><?php echo empty($shop_item['deskripsi_item'])? '' : $shop_item['deskripsi_item'] ?></textarea>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="item_price">Item Price</label>
                    <div class="controls">
                      <input type="text" name="item_price" id="item_price" placeholder="Item Price" value="<?php echo empty($shop_item['price_item'])? '' : $shop_item['price_item'] ?>">
                    </div>
                  </div>

                  <div class="control-group">                     
                    <label class="control-label" for="item_status">Status</label>
                    <div class="controls">
                      <select name="item_status" id="item_status" class="span2">
                        <option value="-">Select Status</option>
                        <option value="1" <?php echo (!empty($shop_item['active_item']) && $shop_item['active_item'])? 'selected' : ''?> >Active</option>
                        <option value="0" <?php echo (!empty($shop_item['active_item']) && $shop_item['active_item'])? '' : 'selected'?> >Inactive</option>
                      </select>
                    </div>                      
                  </div>
                                    
                  <?php if(isset($img_shop_item) &&   $img_shop_item){ 
                  foreach ($img_shop_item as $key => $value) { ?>
                      <div class="control-group" id="foto_input<?php echo $key?>">                     
                        <label class="control-label" for="project_img">Image</label>
                        <div class="controls" id="img_area">
                          <input type="file" name="fotos[]" id="foto<?php echo $key?>" onchange="showImage(this,'<?php echo $key?>')">
                          <img src="<?php echo base_url().$value['url_img_item']?>" id="imgctr<?php echo $key?>" width="250">
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

$(document).ready(function(){
  $("#item_price").priceFormat({
    prefix: '',
    centsLimit: 0,
    thousandsSeparator: '.',
    clearOnEmpty: true
  });
});
  
</script>
