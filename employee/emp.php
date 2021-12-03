<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';
//read all employess
if (isset($_GET['details'])) {
    $id = $_GET['details'];

    $selsect = "SELECT employess.name emoName, salary , department.name depName ,email , phone , img FROM `employess` JOIN `department` ON employess.depId = department.id WHERE employess.id=$id";
    $s = mysqli_query($conect, $selsect);
    $f = mysqli_fetch_assoc($s);

    $name = $f['emoName'];
    $salary = $f['salary'];
    $depName = $f['depName'];
    $email = $f['email'];
    $phone = $f['phone'];
    $img = $f['img'];
}
//delete

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM `employess` WHERE id =$id";
    $d = mysqli_query($conect, $delete);
    header("location: /hrSystem/employee/listEmployee.php");
}



if (isset($_SESSION['admin'])) {
} else {
    header("location: /hrSystem/adminLogin.php");
}
?>


<div class="container  col-md-6  mrg" style="color:blanchedalmond;">
    <div class="box " style="background-color: rgba(34, 34, 34, 0.5);">
        <h1 class="text-center apptext">Emplyee's Info</h1>

        <div class="row">
            <div class="col-md-6 h-50">
                <div class="contant">
                    <img src="./imgs/<?php echo $img ?>" class="img-fluid w-100 h-100" style="border-radius: 50%;" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="homeText1 mt-2">Name: <?php echo $name ?></h1>
                <p class="homeText2 mt-2">Department: <?php echo $depName ?></p>
                <p class="homeText2 mt-2">Salary: <?php echo $salary ?></p>
                <p class="homeText2 mt-2">Email: <?php echo $email ?></p>
                <p class="homeText2 mt-2">Phone Num. :<?php echo $phone ?></p>
                <?php if ($_SESSION['admin'] == 'toma') { ?>
                    <th> <a href="C:/hrSystem/employee/emp.php?delete=<?php echo $id ?>" class="btn btn-danger">Delete</a></th>
                    <th> <a href="/hrSystem/employee/addEmployee.php?edit=<?php echo $id ?>" class="btn btn-info">Update</a></th>
                <?php } ?>
            </div>

        </di
        v>
    </div>
</div>



<?php
include '../shared/script.php' ?>