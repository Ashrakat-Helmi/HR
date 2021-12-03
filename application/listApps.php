<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';
//read all department
$selsect = "SELECT applications.id , applications.name appName, department.name depName , cv ,experience , email , password , img ,phone FROM `applications`JOIN `department` ON applications.departmentId = department.id;";
$s = mysqli_query($conect, $selsect);
//delete

if (isset($_GET['rejected'])) {
    $id = $_GET['rejected'];
    $update = "UPDATE `applist` SET status = 'rejected' WHERE id=$id";
    $u = mysqli_query($conect, $update);




    header("location: /hrSystem/application/listApps.php");
}
if (isset($_GET['Accepted'])) {
    $id = $_GET['Accepted'];
    $update = "UPDATE `applist` SET status = 'accepted' WHERE id=$id";
    $u = mysqli_query($conect, $update);



    header("location: /hrSystem/application/listApps.php");
}


if ($_SESSION['admin']) {
} else {
    header("location: /hrSystem/login.php");
}
?>

<div class="container col-md-6 ">
    <div class="box mrg">
    <h1 class="apptext">List Applicant</h1>
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
                        <th> <?php echo $data['appName'] ?></th>
                        <th> <a href="/hrSystem/application/applicant.php?details=<?php  echo $data['id'] ?>">View details</a></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include '../shared/script.php' ?>