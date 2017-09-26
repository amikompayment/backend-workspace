<?php require_once('header.php');

  $succed = '';
  $gagal  = '';

  $anggota = $_SESSION['anggota'];

  $denda = denda($anggota);
?>

  <h4>Perpustakaan</h4>
  <p style="color:red;">khusus mobile *</p>
  <img src="" alt="barcode-scanner">

  <p>Detail Denda</p>
  <?php while($row = mysqli_fetch_assoc($denda)):
    $denda = $row['denda'];

    ?>
<p><?=$denda; ?></p>
  <?php endwhile; ?>

  <p>Total denda: </p>

  <form action="" method="post">
    <input readonly type="text" name="total_denda" value="">
    <input type="submit" name="bayar" value="Bayar Denda">
  </form>

  <br>
  <?=$succed; ?>
  <?=$gagal; ?>

<?php require_once('footer.php'); ?>
