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
                  <th> News Title </th>
                  <th> News Description </th>
                  <th> Month </th>
                  <th> Year </th>
                  <th> Image </th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if($news){
                    foreach ($news as $key => $value) { ?>
                      <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['judul_news'];?></td>
                        <td><?php echo $value['deskripsi_news'];?></td>
                        <td><?php echo $value['bulan_news'];?></td>
                        <td><?php echo $value['tahun_news'];?></td>
                        <td>
                          <a class="btn btn-small btn-success" data-toggle="modal" data-target="#myModal">Lihat Gambar</a>
                          <a class="btn btn-small btn-warning" href="<?php echo base_url().'input_news/edit_news?id_news='.$value['id_news']?>">Edit</a>
                          <a class="btn btn-small btn-danger" href="<?php echo base_url().'input_news/hapus_news?id_news='.$value['id_news']?>" onclick="return confirm('Anda yakin?')">Hapus</a>
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
      <div class="modal-body" align="center">
          <table class="table" id="isidetail">
           
          </table>
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

  function lihatDetail(id_siswa){
    
      
  }
</script>