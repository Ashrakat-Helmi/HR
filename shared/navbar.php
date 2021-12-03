<?php
ob_start();
session_start();

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/hrSystem/css/all.min.css">
    <link rel="stylesheet" href="/hrSystem/css/main.css">
    <title>Document</title>
</head>

<body style="background-image: url(/hrSystem/img/company.jpg); background-size:cover;">
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/hrSystem/index.php">HR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <?php
                if (isset($_SESSION['admin'])) {

                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Employee
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            if ($_SESSION['admin'] === 'toma') {
                            ?>
                                <a class="dropdown-item" href="/hrSystem/employee/addEmployee.php">Add Employee</a>
                            <?php }  ?>
                            <a class="dropdown-item" href="/hrSystem/employee/listEmployee.php">List Employee</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Department
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            if ($_SESSION['admin'] === 'toma') {
                            ?>
                                <a class="dropdown-item" href="/hrSystem/department/addDepartment.php">Add Department</a>
                            <?php }  ?>
                            <a class="dropdown-item" href="/hrSystem/department/listDepartment.php">List Department</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hrSystem/application/listApps.php">Applications</a>
                    </li>
                <?php }  ?>

            </ul>


        </div>
    </nav> -->
    <div id="nav" class="top-nav-container fixed-top ">

        <div class="container">
            <div class="top-nav">
                <div class="logo">
                    <a class="navbar-brand" href="/hrSystem/index.php">HR</a>
                </div>
                <div id="btnIcon" class="btn-icon icon">
                    <i class="fas fa-bars "></i>
                </div>
                <div class="overlay none"></div>
                <div class="close-icon icon none">
                    <i class="fas fa-times"></i>
                </div>
                <div class="overlay-menu none">
                    <ul>
                        <?php if (isset($_SESSION['admin'])) { ?>
                            <li class="nav-item dropdown">
                                <h6 class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Employee
                        </h6>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    if ($_SESSION['admin'] === 'toma') {
                                    ?>
                                        <a class="dropdown-item" href="/hrSystem/employee/addEmployee.php">Add Employee</a>
                                    <?php }  ?>
                                    <a class="dropdown-item" href="/hrSystem/employee/listEmployee.php">List Employee</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <h6 class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Department
                                    </h6>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    if ($_SESSION['admin'] === 'toma') {
                                    ?>
                                        <a class="dropdown-item" href="/hrSystem/department/addDepartment.php">Add Department</a>
                                    <?php }  ?>
                                    <a class="dropdown-item" href="/hrSystem/department/listDepartment.php">List Department</a>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="/hrSystem/application/listApps.php">Applications</a>
                            </li>
                        <?php }  ?>

                    </ul>
                </div>
                <nav>
                    <ul>
                        <?php if (isset($_SESSION['admin'])) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Employee
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    if ($_SESSION['admin'] === 'toma') {
                                    ?>
                                        <a class="dropdown-item" href="/hrSystem/employee/addEmployee.php">Add Employee</a>
                                    <?php }  ?>
                                    <a class="dropdown-item" href="/hrSystem/employee/listEmployee.php">List Employee</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Department
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    if ($_SESSION['admin'] === 'toma') {
                                    ?>
                                        <a class="dropdown-item" href="/hrSystem/department/addDepartment.php">Add Department</a>
                                    <?php }  ?>
                                    <a class="dropdown-item" href="/hrSystem/department/listDepartment.php">List Department</a>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="/hrSystem/application/listApps.php">Applications</a>
                            </li>
                        <?php }  ?>

                    </ul>
                </nav>




            </div>

        </div>
    </div>