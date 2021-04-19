<?php if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <!-- for jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- for poper ie MODAL -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- for table sorter and pager -->
    <script src="https://mottie.github.io/tablesorter/dist/js/jquery.tablesorter.min.js"></script> 
    <script src="https://mottie.github.io/tablesorter/addons/pager/jquery.tablesorter.pager.js"></script> 
<!-- CSS for tablesorter -->
<style>
    thead th {
    background-repeat: no-repeat;
    background-position:  90% 50%;
    background-size: 20px 20px;

    }
     thead th.defaultUpDown {
        padding-right: 20px;
        background-image: url('images/arrowUpDown.png');
    } 
    thead th.up {
        padding-right: 20px;
        background-image: url('images/arrowUp.png');
    }
    thead th.down {
        padding-right: 20px;
        background-image: url('images/arrowDown.png');
    }
</style>


  </head>
  <!-- To make changes to Navbar and header according to pages-->
  <?php  $page_name = basename($_SERVER['PHP_SELF']);?>
  <body>
    <nav class="navbar navbar-default navbar-expand-md navbar-dark  ">
        <a class="navbar-brand" href="#">Admin straps</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <?php if($page_name=='index.php' || $page_name == ""):?>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <?php else:?>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <?php endif ;?>
                <?php if($page_name=='pages.php' || $page_name =='edit-page.php'):?>
                <li class="nav-item active">
                    <a class="nav-link" href="pages.php">Pages</a>
                </li>
                <?php else:?>
                    <li class="nav-item ">
                    <a class="nav-link" href="pages.php">Pages</a>
                </li>
                <?php endif ;?>
                <?php if($page_name=='posts.php' ):?>
                <li class="nav-item active">
                    <a class="nav-link " href="posts.php" >Posts</a>
                </li>
                <?php else:?>
                    <li class="nav-item ">
                    <a class="nav-link " href="posts.php" >Posts</a>
                </li>
                <?php endif ;?>
                <?php if($page_name=='users.php'):?>
                <li class="nav-item active">
                    <a class="nav-link " href="users.php">Users</a>
                </li>
                <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link " href="users.php">Users</a>
                </li>
                <?php endif ;?>
            </ul>
            <ul class="navbar-nav  navbar-right">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Welcome <?php echo ucfirst($_SESSION['user']);?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log out</a>
                </li>
            </ul>
        </div>
    </nav>
    <header id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1>
                <div class="fa fa-cog mt-2"></div>
                <?php if($page_name=='index.php' || $page_name == ""):?>
                    Dashboard</h1>
                <?php endif;?>
                <?php if($page_name=='pages.php' || $page_name =='edit-page.php'):?>
                    Pages <small>manage your site Pages</small></h1>
                <?php endif;?>
                <?php if($page_name=='posts.php' ):?>
                    Posts <small>manage your site Posts</small></h1>
                <?php endif;?>
                <?php if($page_name=='users.php'):?>
                    Users <small>manage your site Users</small></h1>
                <?php endif;?>
            </div>
            <div class="col-md-2">
                <div class="dropdown class create">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Create Content
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a type="button" class="dropdown-item" data-toggle="modal" data-target="#addPage" >Add Page</a>
                        <a type="button" class="dropdown-item" data-toggle="modal" data-target="#addUser" >Add User</a>
                        <a type="button" class="dropdown-item" data-toggle="modal" data-target="#addPost" >Add Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

