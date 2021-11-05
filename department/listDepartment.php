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
    header("location: /hrSystem/login.php");
}
?>

<div class="container col-sm-6 mt-5">
    <table class="table table-dark">
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
<?php
include '../shared/script.php' ?>