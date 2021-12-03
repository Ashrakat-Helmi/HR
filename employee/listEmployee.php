<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';
//read all employess
$selsect = "SELECT employess.id , employess.name emoName, salary , department.name depName FROM `employess` JOIN `department` ON employess.depId = department.id ";
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
    header("location: /hrSystem/adminLogin.php");
}
?>


<div class="container col-md-6 col-sm-12 mrg">
    <div class="box">
        <h1 class="apptext">List Employees</h1>
        <table class="table" style="background-color: #bbb;">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>

                    <th scope="col">Details</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($s as $data) { ?>
                    <tr>
                        <th> <?php echo $data['id'] ?></th>
                        <th> <?php echo $data['emoName'] ?></th>

                        <th> <a href="/hrSystem/employee/emp.php?details=<?php echo $data['id'] ?>">view details</a></th>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include '../shared/script.php' ?>