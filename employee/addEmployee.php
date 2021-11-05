<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';

//add Employee
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $depId = $_POST['depid'];
    $insert = "INSERT INTO `employess`VALUES (NULL, '$name' ,$salary ,$depId) ";
    $s = mysqli_query($conect, $insert);

    header("location:/hrSystem/employee/listEmployee.php");
}
//update 
$name = " ";
$salary = " ";
$update=false;
if (isset($_GET['edit'])) {
    $update=true;
    $id = $_GET['edit'];
    $select = "SELECT * FROM `employess` WHERE id= $id";
    $s = mysqli_query($conect, $select);
    $f = mysqli_fetch_assoc($s);
    $name = $f['name'];
    $salary = $f['salary'];
    if (isset($_POST['update'])) {
        $namep = $_POST['name'];
        $salaryp = $_POST['salary'];
        $depidp = $_POST['depid'];
        $update = "UPDATE `employess` SET name='$namep', salary =$salaryp , depId=$depidp WHERE id=$id";
        $u = mysqli_query($conect, $update);
        header("location:/hrSystem/employee/listEmployee.php");
    }
}

if($_SESSION['admin']== 'toma'){

}else{
    header("location: /hrSystem/login.php");
}

?>


<div class="container col-6 mt-5" style="color:blanchedalmond;">
    <form method="POST">
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

            <select name="depid" id="">
                <?php foreach ($ss as $data) { ?>

                    <option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>

                <?php } ?>
            </select>
        </div>
        <?php if ($update) : ?>
            <button name="update" type="submit" class="btn btn-info btn-block">update</button>
        <?php else : ?>
            <button name="send" type="submit" class="btn btn-info btn-block">Add</button>
        <?php endif; ?>
    </form>
</div>

<?php
include '../shared/script.php' ?>