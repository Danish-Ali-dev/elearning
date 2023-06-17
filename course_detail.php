<?php 
    $title = 'iSchool'; 
    $course_title = 'Popular Courses';
?>
<?php include('partials/_head.php'); ?>
<?php include('partials/_navbar.php'); ?>
<?php include('partials/_course_banner.php'); ?>
<div class="container">
    <div class="row my-5">
        <div class="col-md-4">
            <img src="images/courses/guitor.jpg" class="card-img-top" alt="guitar">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"> <b>Course Name:</b> Learn Guitar</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <p class="card-text">Some quick example text to build </p>
                <form method="post">
                    <p class="card-text d-inline"> Price: <small><del>Rs 2000</del></small>
                        <span class="fw-bold">Rs 200</span>
                    </p>
                    <button type="submit" class="btn btn-primary fw-bold text-white float-end" name="buy">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Lesson no</th>
                    <th scope="col">Lesson Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include('partials/_footer.php'); ?>
<?php include('partials/_bottom.php'); ?>