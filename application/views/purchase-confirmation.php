<?php ?>

<div class="moyn-extra-content">
  <div class="purchasing">
    <div class="purchase-form">
      <div class="title">
        <?php
          if ($res == true){
            echo "Thankyou for your order";
          } else {
            echo "Error occured";
          }
          ?>
      </div>
      <div class="mb-16">
        <?php
          if ($res == true){
            echo "We will contact you by email soon.";
          } else {
            echo "Please try again later";
          }
          ?>
      </div>
      <a class="moyn-btn mb-8" href="<?php echo base_url(); ?>shop">BACK</a>
    </div>
  </div>
</div>