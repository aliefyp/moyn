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
                  <th> Fullname </th>
                  <th> Email </th>
                  <th> Phone </th>
                  <th> Shipping Address </th>
                  <th> Item </th>
                  <th> Quantity </th>
                  <th> Order Time </th>
                  <th> Confirmation </th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if($orders){
                    foreach ($orders as $key => $value) { ?>
                      <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['cust_name'];?></td>
                        <td><?php echo $value['cust_email'];?></td>
                        <td><?php echo $value['cust_phone'];?></td>
                        <td><?php echo $value['shipping_addr'];?></td>
                        <td><?php echo $value['item_order'];?></td>
                        <td><?php echo $value['qty_order'];?></td>
                        <td><?php echo $value['created_at'];?></td>
                        <td>
                          <?php if($value['confirmed']){ ?>
                            <a href="#" class="btn btn-small btn-success">Confirmed</a>
                          <?php }else{ ?>
                            <a href="<?php echo base_url().'order/confirm_order?order_id='.$value['id_order']?>" class="btn btn-small btn-success" onclick="return confirm('Konfirmasi order ini?')"><i class="icon-ok"></i></a>
                          <?php } ?>
                          
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
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Data Siswa</h4>
      </div>
      <div class="modal-body" align="center" id="isidetail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(function(){
    $('#myTable').dataTable();
  });

  function show_img(id){
    $.ajax({
      url: '<?php echo base_url()?>input_news/get_img_news',
      data: {id_news: id},
      typeData: 'json',
      type: 'POST',
      success: function(data){  
      data = JSON.parse(data);
        if(data){
          $('#isidetail').children().remove();
          $('#isidetail').append('<img src="<?php echo base_url()?>upload/'+data.url_img_news+'" width="250">');
        }
      }
    });
      
  }
</script>