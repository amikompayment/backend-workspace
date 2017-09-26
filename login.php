<?php require_once('header.php');

  if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if(!empty($user) && !empty($pass)){
      if(login($user, $pass)){
        header('location: index.php');
        $_SESSION['anggota'] = $user;
      }else{
        $error = 'ERROR: kombinasi username dan password salah';
      }
    }else{
        $error = 'ERROR: kolom username atau password masih kosong';
    }
  }

 ?>

<form method="post">
  <label for="user">Username</label><br>
  <input type="text" name="user" value=""><br>
  <label for="pass">Password</label><br>
  <input type="password" name="pass" value=""><br>
  <input type="submit" name="login" value="Login">
  <br>
  <?=$error; ?>
</form>

<?php require_once('footer.php'); ?>
