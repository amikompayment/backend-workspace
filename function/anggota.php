<?php

  function anggota(){
    global $dbc;

    $query  = "SELECT * FROM anggota";
    $result = mysqli_query($dbc, $query) or die('ERROR: ANGGOTA');

    return $result;

  }

  function login($user, $pass){
    global $dbc;

    $query = "SELECT * FROM anggota WHERE username ='$user' AND password = '$pass';";

    if($result = mysqli_query($dbc, $query)){
      if(mysqli_num_rows($result) != 0 )return true;
      else return false;
    }
  }

  function saldo($anggota){
    global $dbc;
    $query  = "SELECT saldo FROM anggota WHERE username = '$anggota'";
    $result = mysqli_query($dbc, $query) or die('ERROR: SALDO');

    return $result;
  }
