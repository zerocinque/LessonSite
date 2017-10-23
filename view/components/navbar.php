<?php 
    $page = $_SERVER['REQUEST_URI'];
    $page = explode('/', $page);
    $page = $page[count($page)-1];
 ?>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../">Lessons</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li <?php echo (strcmp($page, 'index.php') == 0 || strcmp($page, '') == 0) ? 'class="active"' : ''?> ><a href="index.php">Home</a></li>
            <li <?php echo strcmp($page, 'subject.php') == 0 ? 'class="active"' : ''?> ><a href="subject.php">Subject</a></li>
            <li <?php echo strcmp($page, 'lesson.php') == 0 ? 'class="active"' : ''?> ><a href="lesson.php">Lesson</a></li>
            <li <?php echo strcmp($page, 'registraion.php') == 0 ? 'class="active"' : ''?> ><a href="registration.php">Registration</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

            <?php 
            //var_dump($_SESSION['user']);
                echo !isset($_SESSION['user']) ? '' :  '<li><a href="#">'.$_SESSION['user']->name. ' ' . $_SESSION['user']->surname . '</a></li>'
             ?>

        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>