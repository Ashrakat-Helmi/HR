<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';
//read all employess
$selsect = "SELECT * FROM `employess`";
$s = mysqli_query($conect, $selsect);

//delete

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `employess` WHERE id =$id";
    $d = mysqli_query($conect, $delete);
    header("location: /hrSystem/employee/listEmployee.php");
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
                <th scope="col">Salary</th>
                <th scope="col">Department ID</th>
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
                    <th> <?php echo $data['salary'] ?></th>
                    <th> <?php echo $data['depId'] ?></th>
                    <?php if ($_SESSION['admin'] == 'toma') { ?>
                        <th> <a href="/hrSystem/employee/listEmployee.php?delete=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a></th>
                        <th> <a href="/hrSystem/employee/addEmployee.php?edit=<?php echo $data['id'] ?>" class="btn btn-info">Update</a></th>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include '../shared/script.php' ?>