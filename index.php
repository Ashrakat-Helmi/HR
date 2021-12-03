<?php
include './shared/navbar.php' ?>







<div class="container ">
    <div class="row justify-content-between">
        <div class="col-md-5 mrg box" style="background-color: rgba(34, 34, 34, 0.5);">

            <h1 class="homeText1 mt-5">Human Resources</h1>
            <h1 class="homeText1">for modern companies</h1>
            <p class="homeText2 mt-5">All-in-one: Recruitments, Appraisal, Expenses, Leaves, Attendances, etc.</p>

        </div>
        <div class="col-md-5 mrg box" style="background-color: rgba(34, 34, 34, 0.5);">
            <?php
            if (isset($_SESSION['admin'])) {
            ?>
                <p class="homeText2 text-center">you are logged in,</p>
                <p class="homeText2 text-center">if you want to leave</p>
                <a class="btn btn-primary btn-block btn2 my-5 " type="submit" href="/hrSystem/adminLogout.php">Logout</a>

            <?php } else if (isset($_SESSION['applicant'])) { ?>
                <p class="homeText2 text-center">you are logged in,</p>
                <p class="homeText2 text-center">if you want to leave</p>
                <a class="btn btn-primary btn-block btn2 my-5 " type="submit" href="/hrSystem/logout.php">Logout</a>
            <?php } else { ?>
                <a class="btn btn-primary btn-block btn2 my-5 " type="submit" href="/hrSystem/adminLogin.php"> Admin Login</a>
                <a class="btn btn-primary btn-block btn2 my-5 " type="submit" href="/hrSystem/login.php">Applicant Login</a>
                <a class="btn btn-primary btn-block btn2 my-5 " type="submit" href="/hrSystem/application/app.php">Apply</a>
            <?php } ?>
        </div>
    </div>
</div>














<?php
include './shared/script.php' ?>