<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <table>
      <tr style="margin-bottom:32px; font-size:18px; font-weight: 600">Pesanan Masuk!<br /><br /></tr>
      <tr></tr>
      <tr style="margin-bottom:16px">Pesanan menunggu respon: </tr>
    </table>
    <table style="margin-bottom:16px">
      <tr>
        <td>Nama</td>
        <td>: <?php echo $fullname; ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>: <?php echo $email; ?></td>
      </tr>
      <tr>
        <td>No. Telfon</td>
        <td>: <?php echo $phone; ?></td>
      </tr>
      <tr>
        <td>Item</td>
        <td>: <?php echo $product->name_item; ?></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td>: <?php echo $quantity; ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>: <?php echo $address; ?></td>
      </tr>
      <tr>
        <td>Pesan</td>
        <td>: <?php echo $message; ?></td>
      </tr>
    </table>
    <div style="margin-bottom:32px;">Segera respon pesanan ini ke alamat email <?php echo $email; ?> atau ke nomor <?php echo $phone; ?></div>
    <div>Regards,</div>
    <div>moyn team</div>
  </body>
</html>
