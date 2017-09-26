<?php
  require_once ('core/init.php');
  $anggota = $_SESSION['anggota'];
  $saldo   = saldo($anggota);

  while($row = mysqli_fetch_assoc($saldo)){
    $saldo_skrg = $row['saldo'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Amikom Payment</title>
    <!-- <link rel="stylesheet" href="/css/master.css"> -->
  </head>
  <body>

    <h3> Amikom Payment </h3>
    <p> Goals: App yang bisa melakukan berbagai pembayaran di link amikom</p>
    <p> Cara Pembayaran:</p>
    <ol>
      <li>Dengan melakukan top-up ke masing masing kebutuhan ( masih bisa dikembangkan dengan barcode, dll )</li>
    </ol>
    <p>Scope: perpustakaan, koperasi, kantin, seminar, pendaftaran UKM</p>
    <p>REQUIRED: Semua object pembayaran harus mempunyai amikom payment</p>

<?php if(isset($_SESSION['anggota'])): ?>
    <h2>Username: <?=$anggota; ?></h2>
    <h2>Saldo: <?=$saldo_skrg; ?></h2>

<?php endif; ?>

    <p>Event:</p>
