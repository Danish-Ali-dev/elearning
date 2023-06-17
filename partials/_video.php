<div class="remove-video-margin">
    <div class="video-parent">
        <video playinline autoplay muted loop>
            <source src="./videos/study.mp4">
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-content">
        <h1 class="my-content">Welcome to iSchool</h1>
        <small class="my-content my-3">Learn and Implement</small>
        <br>
        <?php
        if(!isset($_SESSION)){
            session_start();
        }
            if(isset($_SESSION['is_login'])){
                echo '<a href="" class="btn btn-danger mt-2" data-bs-toggle="modal" data-bs-target="#signupModal">My Profile</a>';
            }
            else{
                echo '<a href="" class="btn btn-danger mt-2" data-bs-toggle="modal" data-bs-target="#signupModal">Get Started</a>';
            }
        ?>
    </div>
</div>