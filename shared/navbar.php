<?php

session_start();

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <title>Document</title>
</head>

<body style="background-color: black;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">HR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            if (isset($_SESSION['admin'])) {

            ?>
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Employee
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            if ($_SESSION['admin'] === 'toma')  {
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
                            if ($_SESSION['admin'] === 'toma')  {
                            ?>
                                <a class="dropdown-item" href="/hrSystem/department/addDepartment.php">Add Department</a>
                            <?php }  ?>
                            <a class="dropdown-item" href="/hrSystem/department/listDepartment.php">List Department</a>
                        </div>
                    </li>
                </ul>
            <?php } else {
            } ?>
            <form class="form-inline my-2 my-lg-0">
                <?php
                if (isset($_SESSION['admin'])) {
                ?>
                    <a class="btn btn-outline-success m-2 my-sm-0" type="submit" href="/hrSystem/logout.php">Logout</a>

                <?php }else { ?>
                    <a class="btn btn-outline-success m-2 my-sm-0" type="submit" href="/hrSystem/login.php">Login</a>
                    <?php }?>
            </form>
        </div>
    </nav>