<?php
    $title = 'Admin Panel'; 
    include('partials/_head.php');
    include('top-nav.php');
?>
<div class="container-fluid mb-5" style="margin-top: 40px;">
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <?php include('sidebar.php') ?>
        </div>
        <div class="col-sm-9 mt-5">
        <?php
            if(isset($_GET['dashboard'])){
                include('dashboard.php');
                $title = 'Dashboard';
            }
            if(isset($_GET['courses'])){
                include('courses.php');
                $title = 'Courses';
            }
            if(isset($_GET['add_course'])){
                include('add_course.php');
                $title = 'Add Courses';
            }
        ?>
        </div>
</div>

<?php include('partials/_bottom.php'); ?>