<?php
    require_once('_connection.php');
    if (isset($_POST['course_submit_btn'])) {
        // if (($_POST['course_name'] == "") || ($_POST['course_desc'] == "") || ($_POST['course_author'] == "") || ($_POST['course_duration'] == "") || ($_POST['course_original_price'] == "") || ($_POST['course_sale_price'] == "") || ($_POST['course_img'] == "")) {
        //     $msg = '<div class="alert alert-danger mt-3 ml-4> First Fill All Fields </div>'
        // }

        $course_name = $_POST['course_name'];
        $course_desc = $_POST['course_desc'];
        $course_author = $_POST['course_author'];
        $course_duration = $_POST['course_duration'];
        $course_sale_price = $_POST['course_sale_price'];
        $course_original_price = $_POST['course_original_price'];
                // Image Code 
        $random_course_img = strtotime("now");
        $course_img = $random_course_img."_".$_FILES ['course_img'] ['name'];
        $course_img_temp = $_FILES ['course_img'] ['tmp_name'];
        move_uploaded_file($course_img_temp, "images/course_images/$course_img");

        // $random_pic = strtotime("now");
        // $course_img = $random_pic."_".$_FILES ['course_img'] ['name'];
        // $temp_pic = $_FILES ['course_img'] ['tmp_name'];
        // move_uploaded_file($temp_pic, "images/course_images/$course_img");

        $sql = "INSERT INTO `course` (`course_name`, `course_desc`, `course_author`, `course_img`, `course_duartion`, `course_sale_price`, `course_original_price`) VALUES ('$course_name', '$course_desc', '$course_author', '$course_img', '$course_duration', '$course_sale_price', '$course_original_price')";
        
        if($conn->query($sql)){
            // echo "<script>window.location.href='index.php?courses'</script>";
            $msg = '<div class="alert alert-success col-sm-8 mt-3 ml-5 mx-auto"> Course Added Successfully </div>';
        }
        else{
            $msg = '<div class="alert alert-danger col-sm-8 mt-3 ml-5 mx-auto"> Unable to Add Course </div>';
            // echo "<br>Error!". $conn->connect_error;
        }
    }
?>

<div class="col-md-10 mt-2 bg-light mx-auto p-5">
    <h3 class="text-center">Add New Courses</h3>
    <form method="post"  enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="course_name" class="form-label fw-bold">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" required="">
        </div>
        <div class="mb-3">
            <label for="course_desc" class="form-label fw-bold">Course Description</label>
            <textarea class="form-control" id="course_desc" name="course_desc" required=""></textarea>
        </div>
        <div class="mb-3">
            <label for="course_author" class="form-label fw-bold">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author" required="">
        </div>
        <div class="mb-3">
            <label for="course_duration" class="form-label fw-bold">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" required="">
        </div>
        <div class="mb-3">
            <label for="course_original_price" class="form-label fw-bold">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" required="">
        </div>
        <div class="mb-3">
            <label for="course_sale_price" class="form-label fw-bold">Course Selling Price</label>
            <input type="text" class="form-control" id="course_sale_price" name="course_sale_price" required="">
        </div>
        <div class="mb-3">
            <label for="course_img" class="form-label fw-bold">Course Image</label>
            <input type="file" class="form-control" id="course_img" name="course_img" required="">
        </div>
        <div class="mt-2 text-center">
            <button type="submit" class="btn btn-danger" name="course_submit_btn" id="course_submit_btn">Submit</button>
            <a href="index.php?courses" class="btn btn-secondary">Close</a>
            <?php if(isset($msg)){ echo $msg; } ?>
        </div>
    </form>
</div>