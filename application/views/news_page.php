<?php 
  $date = date_create($article['created_at'])
?>
<div class="moyn-extra-content active">
  <div class="moyn-news">
    <img src="<?php echo base_url().'upload/'.$article['url_img_news'] ?>" alt="" class="moyn-news-img">
    <div class="moyn-news-title"><?php echo $article['judul_news'] ?></div>
    <div class="moyn-news-date"><?php echo date_format($date,"d F Y") ?></div>
    <div class="moyn-news-content"><?php echo $article['deskripsi_news'] ?></div>
  </div>
</div>