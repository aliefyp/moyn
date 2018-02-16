<?php ?>

<div class="moyn-extra-content <?php if($this->uri->segment(1)=="product"){echo 'active';}?>">
  <div class="purchasing">
    <img src="<?php echo $product->url_img_item ?>" alt="<?php echo $product->name_item ?>" class="product-img" />
    <div class="product-desc">
      <div class="title"><?php echo $product->name_item ?></div>
      <div class="description"><?php echo $product->deskripsi_item ?></div>
      <a class="moyn-btn mb-8" onclick="goBack()">BACK</a>
      <a class="moyn-btn mb-8" href="<?php echo base_url(); ?>purchase?id_item=<?php echo $product->id_item ?>">BUY</a>
    </div>
  </div>
</div>