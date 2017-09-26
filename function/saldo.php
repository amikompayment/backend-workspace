<?php

  // function saldo(){
  //   global $dbc;
  //
  //   $query  = "SELECT id_saldo, nominal FROM saldo";
  //   $result = mysqli_query($dbc, $query) or die('ERROR: SALDO');
  //
  //   return $result;
  // }
  //
  // // function saldo_now(){
  // //   $saldo = saldo();
  // //
  // //   while($row = mysqli_fetch_assoc($saldo)){
  // //     $saldo_saatini = $row['nominal'];
  // //   }
  // //
  // //   return $saldo_saatini;
  // // }
  //
  // function update_saldo($saldo){
  //   $query = "UPDATE saldo SET nominal = '$saldo' WHERE id_saldo=1";
  //
  //   return run($query);
  // }

  function run($query){
    global $dbc;

    if(mysqli_query($dbc, $query)) return true;
    else return false;
  }
 ?>
