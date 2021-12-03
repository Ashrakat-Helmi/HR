<?php
include '../shared/navbar.php';
include '../shared/config.php';
include '../shared/fun.php';

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $depId = $_POST['depid'];

    $file_type = $_FILES['file']['type'];
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $location = './CVs/';
    move_uploaded_file($file_tmp, $location . $file_name);



    $experience = $_POST['experience'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $image_type = $_FILES['img']['type'];
    $image_name = $_FILES['img']['name'];
    $image_tmp = $_FILES['img']['tmp_name'];
    $location = './img/';
    move_uploaded_file($image_tmp, $location . $image_name);

    $phone = $_POST['phone'];

    $insert = "INSERT INTO `applications`VALUES (NULL, '$name' ,$depId , '$file_name' , '$experience','$email', '$pass','$image_name', '$phone ') ";
    $s = mysqli_query($conect, $insert);
    $insert = "INSERT INTO `applist`(id , name ,password )VALUES (NULL, '$name','$pass') ";
    $s = mysqli_query($conect, $insert);
}




?>
<div class="container  col-md-6   mrg mb-5" style="color:blanchedalmond;">
    <div class="box  ">



        <form method="POST" enctype="multipart/form-data">
            <h1 class=" apptext"> Application</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input name="img" type="file" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="phone">Phone Num.</label>
                <input name="phone" type="tel" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label>Department</label>
                <br>
                <?php
                $select = "SELECT * FROM `department`";
                $ss = mysqli_query($conect, $select);
                ?>

                <select name="depid" id="" class="w-100" style="display: block;">
                    <?php foreach ($ss as $data) { ?>

                        <option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>

                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">CV</label>
                <input name="file" type="file" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Experience</label>
                <input name="experience" type="text" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input name="password" type="password" class="form-control" aria-describedby="emailHelp">
            </div>
            <button name="send" type="submit" class="btn btn2 btn-primary btn-block">Apply</button>
        </form>

    </div>
</div>


<?php
include '../shared/script.php' ?>