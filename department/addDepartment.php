<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';
//add department
if (isset($_POST['send'])) {
    $name = $_POST['name'];

    $insert = "INSERT INTO `department`VALUES (NULL, '$name') ";
    $s = mysqli_query($conect, $insert);
    header("location:/hrSystem/department/listDepartment.php");
}

//update 
$name = " ";
$update = false;
if (isset($_GET['edit'])) {
    $update = true;
    $id = $_GET['edit'];
    $select = "SELECT * FROM `department` WHERE id= $id";
    $s = mysqli_query($conect, $select);
    $f = mysqli_fetch_assoc($s);
    $name = $f['name'];
    if (isset($_POST['update'])) {
        $namep = $_POST['name'];
        $update = "UPDATE `department` SET name='$namep' WHERE id=$id";
        $u = mysqli_query($conect, $update);
        header("location:/hrSystem/department/listDepartment.php");
    }
}
if ($_SESSION['admin'] == 'toma') {
} else {
    header("location: /hrSystem/adminLogin.php");
}

?>
<div class="container col-md-6 mrg" style="color:blanchedalmond;">
    <div class="box">
        <form method="POST">
        <h1 class="apptext">Add Department</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Department Name</label>
                <input name="name" value="<?php echo $name ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


            <?php if ($update) : ?>
                <button name="update" type="submit" class="btn btn-info btn-block">update</button>
            <?php else : ?>
                <button name="send" type="submit" class="btn btn-primary btn2 btn-block">Add</button>
            <?php endif; ?>
        </form>
    </div>
</div>
<?php
include '../shared/script.php' ?>