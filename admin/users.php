<?php 
 include("inc/header.php")
?>

<body>
<?php 
 include("inc/navbar.php")
?>



    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-2">
                    <h1><span class="ti-settings" aria-hidden="true"></span>&nbsp;Users</h1>
                </div>
            </div>
        </div>
    </header>


    <section id="breadcrumb ">
        <div class="container pt-1">
            <ol class="breadcrumb pb-0 pt-0">
                <li class="active">Dashboard | Users</li>
            </ol>
        </div>
    </section>


    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group pr-5">
                        <a href="index.html" class="list-group-item list-group-item-action active"><span class="ti-settings" aria-hidden="true"></span>
                                  Dashboard
                                </a>
                        <a href="pages.html" class="list-group-item list-group-item-action"><span class="ti-list-ol" aria-hidden="true"></span>&nbsp;&nbsp;Pages &nbsp;&nbsp;<span class="badge badge-dark badge-pill pl-5" >12</span></a>
                        <a href="hosts.html" class="list-group-item list-group-item-action"><span class="ti-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Hosts &nbsp;&nbsp;<span class="badge badge-dark badge-pill pl-5" >33</span></a>
                        <a href="users.html" class="list-group-item list-group-item-action"><span class="ti-user" aria-hidden="true"></span>&nbsp;&nbsp;Users &nbsp;&nbsp;<span class="badge badge-dark badge-pill pl-5" >22</span></a>
                    </div>
                     </div>

                <div class="col-md-9">
                    <ul class="list-group">
                        <li class="list-group-item active">
                            <h2>Users</h2>
                        </li>
                    </ul>
                    <div class="col-md-12">
                        <li class="list-group-item">
                            <input class="form-control" type="text" placeholder="Filter Users....">
                        </li>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>joined</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dani Daniels</td>
                                <td>DaniDaniels@gmail.com</td>
                                <td>Dec 12, 2018</td>
                                <td>
                                    <a href="edit.html">
                                        <a href="useredit.php" type="button" class="btn btn-info">Edit</a></a> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ava Adams</td>
                                <td>AvaAdams@gmail.com</td>
                                <td>Dec 12, 2018</td>
                                <td>
                                    <a href="edit.html">
                                    <a href="useredit.php" type="button" class="btn btn-info">Edit</a></a> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Lisa Ann</td>
                                <td>LisaAnn@gmail.com</td>
                                <td>Dec 12, 2018</td>
                                <td>
                                    <a href="edit.html">
                                    <a href="useredit.php" type="button" class="btn btn-info">Edit</a></a> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Shyla Stylez</td>
                                <td>ShylaStylez@gmail.com</td>
                                <td>Dec 12, 2018</td>
                                <td>
                                    <a href="edit.html">
                                    <a href="useredit.php" type="button" class="btn btn-info">Edit</a></a> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


 <?php 
 include("inc/footer.php")
?>

    <!--modals-->
    <?php include("inc/moddel.php")?> 
    <?php include("inc/modpage.php")?>
    <?php include("inc/modpost.php")?>
    <?php include("inc/moduser.php")?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>



</html>