<?php
include './shared/navbar.php';
include './shared/config.php';
include './shared/fun.php';


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $select = "SELECT name , password FROM `applist`";
    $s = mysqli_query($conect, $select);

    foreach ($s as $data) {
        if ($username == $data['name'] && $pass == $data['password']) {
            $_SESSION['applicant'] = $username;

            header("location:/hrSystem/application/appList.php");
        } else {
            echo "fiald";
        }
    }
}
?>


<div class="container col-md-6 mrg" style="color:blanchedalmond;">
    <div class="box">
        <form method="POST">
            <h1 class="apptext">Applicant Login</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button name="login" type="submit" class="btn btn2 btn-block  btn-primary">Login</button>
        </form>
    </div>
</div>











<?php
include './shared/script.php' ?>