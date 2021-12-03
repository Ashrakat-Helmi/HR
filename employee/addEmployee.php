<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';

//add Employee
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $depId = $_POST['depid'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $image_type = $_FILES['img']['type'];
    $image_name = $_FILES['img']['name'];
    $image_tmp = $_FILES['img']['tmp_name'];
    $location = './imgs/';
    move_uploaded_file($image_tmp, $location . $image_name);

    $insert = "INSERT INTO `employess`VALUES (NULL, '$name' ,$salary ,$depId ,'$email ','$phone' ,'$image_name') ";
    $s = mysqli_query($conect, $insert);

    header("location:/hrSystem/employee/listEmployee.php");
}
//update 
$name = " ";
$salary = " ";
$email = "";
$phone = "";
$img = "";
$update = false;
if (isset($_GET['edit'])) {
    $update = true;
    $id = $_GET['edit'];
    $select = "SELECT * FROM `employess` WHERE id= $id";
    $s = mysqli_query($conect, $select);
    $f = mysqli_fetch_assoc($s);
    $name = $f['name'];
    $salary = $f['salary'];
    $email = $f['email'];
    $phone = $f['phone'];
    $img = $f['img'];
    if (isset($_POST['update'])) {
        $namep = $_POST['name'];
        $salaryp = $_POST['salary'];
        $depidp = $_POST['depid'];
        $emailp =  $_POST['email'];
        $phonep = $_POST['phone'];

        $image_type = $_FILES['img']['type'];
        $image_name = $_FILES['img']['name'];
        $image_tmp = $_FILES['img']['tmp_name'];
        $location = './imgs/';
        move_uploaded_file($image_tmp, $location . $image_name);

        $update = "UPDATE `employess` SET name='$namep', salary =$salaryp , depId=$depidp ,email=' $emailp' , phone='$phonep' , img ='$image_name' WHERE id=$id";
        $u = mysqli_query($conect, $update);
        header("location:/hrSystem/employee/emp.php?details=$id");
    }
}

if ($_SESSION['admin'] == 'toma') {
} else {
    header("location: /hrSystem/adminLogin.php");
}

?>


<div class="container col-md-6 mrg" style="color:blanchedalmond;">
    <div class="box">
        <form method="POST" enctype="multipart/form-data">
            <?php if ($update) : ?>
                <h1 class="apptext">Update Employee</h1>
            <?php else : ?>
                <h1 class="apptext">Add Employee</h1>
            <?php endif; ?>


            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name="name" value="<?php echo $name ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Salary</label>
                <input name="salary" value="<?php echo $salary ?>" type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Department</label>

                <?php
                $select = "SELECT * FROM `department`";
                $ss = mysqli_query($conect, $select);
                ?>

                <select name="depid" id="" class="w-100" style="display: block;">
                    <?php foreach ($ss as $data) { ?>

                        <option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>

                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email </label>
                <input name="email" value="<?php echo $email ?>" type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="phone">Phone Num. </label>
                <input name="phone" value="<?php echo $phone ?>" type="tel" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input name="img" value="<?php echo $img ?>" type="file" class="form-control" aria-describedby="emailHelp">
            </div>
            <?php if ($update) : ?>
                <button name="update" type="submit" class="btn btn-primary btn2 btn-block">update</button>
            <?php else : ?>
                <button name="send" type="submit" class="btn btn-primary btn2 btn-block">Add</button>
            <?php endif; ?>
        </form>
    </div>
</div>

<?php
include '../shared/script.php' ?>