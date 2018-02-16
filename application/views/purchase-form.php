<?php ?>

<div class="moyn-extra-content">
  <div class="purchasing">
    <div class="purchase-form">
      <div class="title">Purchasing: <?php echo $product->name_item; ?></div>
      <form	
        action="<?php echo base_url(); ?>purchase/save_order"
        class="mt-32"
        id="purchase-form">
        <div class="mb-16">Please fill following form</div>
        <input class="hide" name="id_item" type="text" value="<?php echo $product->id_item; ?>"></input>
        <input class="mb-8" name="fullname" type="text" placeHolder="Fullname" required autofocus />
        <input class="mb-8" name="email" type="text" placeHolder="Email" required />
        <input class="mb-8" name="quantity" type="text" placeHolder="Quantity" required />
        <input class="mb-8" name="phone" type="text" placeHolder="Phone" required />
        <textarea class="mb-8" name="address" cols="30" rows="3" placeHolder="Shipping Address" required></textarea>
        <textarea class="mb-8" name="message" cols="30" rows="3" placeHolder="Message"></textarea>
        <button class="moyn-btn mt-16 f-right">BUY</button>
      </form>
    </div>
  </div>
</div>