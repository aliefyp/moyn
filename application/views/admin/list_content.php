<div class="row">

    <div class="span12">
      <div class="widget">
          <div class="widget-header"> <i class="icon-th-list"></i>
            <h3><?php echo $_title?></h3>
          </div>
          
          <div class="widget-content">          
            <table class="table table-striped table-bordered" id="myTable">
              <thead>
                <tr>
                  <th> No. </th>
                  <th> Project </th>
                  <th> Project Type </th>
                  <th> Active </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if($content){
                    foreach ($content as $key => $value) { ?>
                      <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['name'];?></td>
                        <td><?php echo $value['type'];?></td>
                        <td><?php echo $value['active'];?></td>
                        <td>
                          <a class="btn btn-small btn-success" id="show_img" onclick="show_img('<?php echo $project;?>', '<?php echo $value["id"];?>')">Lihat Gambar</a>
                          <a class="btn btn-small btn-warning" href="<?php echo base_url().'manage_content/edit_content?type_proj='.$project.'&id_proj='.$value['id'];?>">Edit</a>
                          <a class="btn btn-small btn-danger" href="<?php echo base_url().'manage_content/delete_content?type_proj='.$project.'&id_proj='.$value['id'];?>" onclick="return confirm('Anda yakin?')">Hapus</a>
                        </td>
                      </tr>
                    <?php }
                  }
                ?>              
              </tbody>
            </table>
          </div>
          <!-- /widget-content --> 
        </div>
    </div>
  </div>
  <div class="moyn-lightbox-container" style="visibility:hidden"></div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/lightbox/js/lightbox.js"></script>
<script type="text/javascript">
  $(function(){
    $('#myTable').dataTable();
  });

  function show_img(type_proj, id_proj){
    $.ajax({
      url: '<?php echo base_url()?>manage_content/get_images',
      data: {type_proj:type_proj, id_proj:id_proj, json:1},
      typeData: 'json',
      type: 'GET',
      success: function(data){
        var json = $.parseJSON(data)
        var arrThumb = []
        $(".moyn-lightbox-container").empty()

        $.each(json, function(index, item) {
          var img = document.createElement("a")
          $(img).attr("href", item.url_irp)
          $(img).attr("class", "moyn-lightbox")
          $(img).attr("data-lightbox", "preview")
          $(img).data("lightbox", "preview")
          $(img).text("image")
          
          $(".moyn-lightbox-container").append(img)          
        })
        
        $(".moyn-lightbox").first().click()
      }
    });
  }
  
</script>