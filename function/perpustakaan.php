<?php

  function denda($anggota){
    global $dbc;

    $query  = "SELECT * FROM perpustakaan WHERE anggota = '$anggota'";
    $result = mysqli_query($dbc, $query) or die('ERROR: DENDA');

    // die($query);

    return $result;
  }
