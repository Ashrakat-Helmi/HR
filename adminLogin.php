<?php
include './shared/navbar.php';
include './shared/config.php';
include './shared/fun.php';
//print_r($_SESSION);

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];

  $select = "SELECT * FROM `admin`";
  $s = mysqli_query($conect, $select);

  foreach ($s as $data) {
    if ($username == $data['username'] && $pass == $data['password']) {
      $_SESSION['admin'] = $username;

      header("location:/hrSystem/employee/listEmployee.php");
    } else {
      echo "fiald";
    }
  }
}
?>


<div class="container col-md-6 mt-5" style="color:blanchedalmond;">
  <div class="box">
    <form method="POST">
      <h1 class="apptext">Admin Login</h1>
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
      </div>

      <button name="login" type="submit" class="btn btn-block btn2 btn-primary">Login</button>
    </form>
  </div>
</div>











<?php
include './shared/script.php' ?>