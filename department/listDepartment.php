<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';
//read all department
$selsect = "SELECT * FROM `department`";
$s = mysqli_query($conect, $selsect);
//delete

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `department` WHERE id =$id";
    $d = mysqli_query($conect, $delete);
    header("location:/hrSystem/department/listDepartment.php");
}
if ($_SESSION['admin']) {
} else {
    header("location: /hrSystem/adminLogin.php");
}
?>

<div class="container col-md-6 mrg">
    <div class="box">
    <h1 class="apptext">List Departments</h1>
        <table class="table" style="background-color: #bbb;">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <?php if ($_SESSION['admin'] == 'toma') { ?>
                        <th colspan="2">Action</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($s as $data) { ?>
                    <tr>
                        <th> <?php echo $data['id'] ?></th>
                        <th> <?php echo $data['name'] ?></th>
                        <?php if ($_SESSION['admin'] == 'toma') { ?>
                            <th> <a href="/hrSystem/department/listDepartment.php?delete=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a></th>
                            <th> <a href="/hrSystem/department/addDepartment.php?edit=<?php echo $data['id'] ?>" class="btn btn-info">Update</a></th>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include '../shared/script.php' ?>