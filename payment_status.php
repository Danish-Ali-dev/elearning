<?php 
    $title = 'Payment Status'; 
?>
<?php include('partials/_head.php'); ?>
<?php include('partials/_navbar.php'); ?>
<?php include('partials/_course_banner.php'); ?>
<div class="container">
    <h1 class="text-center mt-2 mb-5">Payment Status</h1>
    <form class="row col-md-6 mx-auto mt-3">
        <div class="col-md-2">
            <label for="order_id" class="form-label pull-right">Order ID: </label>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" id="order_id">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary mb-3">View</button>
        </div>
    </form>
</div>


<?php include('partials/_contact_us.php'); ?>
<?php include('partials/_footer.php'); ?>
<?php include('partials/_bottom.php'); ?>