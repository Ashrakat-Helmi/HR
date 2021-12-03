<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';
//read all department
$name = "";
$depName = "";
$cv = "";
$experience = "";
$email = "";
$img = "";
$phone = "";
//delete
if (isset($_GET['details'])) {

    $id = $_GET['details'];
    $selsect = "SELECT  applications.name appName, department.name depName , cv ,experience , email , img ,phone FROM `applications`JOIN `department` ON applications.departmentId = department.id where applications.id=$id;";
    $s = mysqli_query($conect, $selsect);
    $f = mysqli_fetch_assoc($s);

    $name = $f['appName'];
    $depName = $f['depName'];
    $cv = $f['cv'];
    $experience = $f['experience'];
    $email = $f['email'];
    $img = $f['img'];
    $phone = $f['phone'];
}
if (isset($_GET['rejected'])) {
    $id = $_GET['rejected'];
    $update = "UPDATE `applist` SET status = 'rejected' WHERE id=$id";
    $u = mysqli_query($conect, $update);

    header("location:/hrSystem/application/appList.php");
}
if (isset($_GET['accepted'])) {
    $id = $_GET['accepted'];
    $update = "UPDATE `applist` SET status = 'accepted' WHERE id=$id";
    $u = mysqli_query($conect, $update);

    header("location: /hrSystem/application/appList.php");
}


if ($_SESSION['admin']) {
} else {
    header("location: /hrSystem/login.php");
}
?>

<div class="container  col-md-6  mrg" style="color:blanchedalmond;">
    <div class="box " style="background-color: rgba(34, 34, 34, 0.5);">
        <h1 class="text-center apptext">Applicant Info</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="contant">
                    <img src="./img/<?php echo $img ?>" class="img-fluid w-100 " style="border-radius: 50%" alt="..">
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="homeText1 mt-2"> Name: <?php echo $name ?></h1>
                <p class="homeText2 mt-2"> Department: <?php echo $depName ?></p>
                <p class="homeText2 mt-2">Experinces: <?php echo $experience ?></p>
                <p class="homeText2 mt-2">Email: <?php echo $email ?></p>
                <p class="homeText2 mt-2">Phone Num. :<?php echo $phone ?></p>
                
                <iframe src="/hrSystem/application/CVs/<?php echo $cv ?>" style="width: 100%;height: 30%;border: none;" frameborder="0"></iframe>

                <?php if ($_SESSION['admin'] == 'toma') { ?>
                    <th> <a href="/hrSystem/application/applicant.php?rejected=<?php echo $id ?>" class="btn btn-danger">Rejected</a></th>
                    <th> <a href="/hrSystem/application/applicant.php?accepted=<?php echo $id ?>" class="btn btn-info">Accepted</a></th>
                <?php } ?>
            </div>
        </div>
    </div>
</div>





<!-- <table class="table" style="background-color: #bbb;">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">CV</th>
            <th scope="col">Experience</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Phone</th>
            <?php if ($_SESSION['admin'] == 'toma') { ?>
                <th colspan="2">Action</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
       
            <tr>
                <th> <?php echo $data['id'] ?></th>
                <th> <?php echo $data['appName'] ?></th>
                <th> <?php echo $data['depName'] ?></th>
                <th> <?php echo $data['cv'] ?></th>
                <th> <?php echo $data['experience'] ?></th>
                <th> <?php echo $data['email'] ?></th>
                <th> <?php echo $data['img'] ?></th>
                <th> <?php echo $data['phone'] ?></th>
                <?php if ($_SESSION['admin'] == 'toma') { ?>
                    <th> <a href="/hrSystem/application/listApps.php?rejected=<?php echo $data['id'] ?>" class="btn btn-danger" ٌ>Rejected</a></th>

                    <th> <a href="/hrSystem//application/listApps.php?Accepted=<?php echo $data['id'] ?>" class="btn btn-success">Accepted</a></th>
                <?php } ?>
            </tr>
      
    </tbody>
</table> -->


<?php
include '../shared/script.php' ?>