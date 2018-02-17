<?php ?>
<html>
  <head></head>
  <body>
    <div style="margin-bottom:32px">Dear <?php echo $fullname; ?></div>
    <div style="margin-bottom:16px">Your order will be proccessed soon. Our team will contact you shortly.</div>
    <table style="margin-bottom:32px">
      <tr>
        <td>Item</td>
        <td>: <?php echo $item_name; ?></td>
      </tr>
      <tr>
        <td>Quantity</td>
        <td>: <?php echo $quantity; ?></td>
      </tr>
      <tr>
        <td>Address</td>
        <td>: <?php echo $address; ?></td>
      </tr>
      <tr>
        <td>Message</td>
        <td>: <?php echo $message; ?></td>
      </tr>
    </table>
    <div>Best regards,</div>
    <div>MOYN team</div>
  </body>
</html>
