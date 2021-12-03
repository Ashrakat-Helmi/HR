<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';
//print_r($_SESSION);

//read all department
$selsect = "SELECT * FROM `applist`";
$s = mysqli_query($conect, $selsect);


if (isset($_SESSION['applicant'])|| ($_SESSION['admin'])) {
} else {
    header("location:/hrSystem/login.php");
}

?>

<div class="container col-md-6 mrg">
    <div class="box">
        <h1 class="apptext">List Applicant</h1>
        <table class="table " style="background-color: #bbb;">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($s as $data) { ?>
                    <tr>
                        <th> <?php echo $data['id'] ?></th>
                        <th> <?php echo $data['name'] ?></th>
                        <th> <?php echo $data['status'] ?></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include '../shared/script.php' ?>