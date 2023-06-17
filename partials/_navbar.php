<nav class="navbar navbar-expand-sm navbar-dark ps-5 fixed-top">
  <div class="container-fluid">
    <a id="iSchool" class="navbar-brand" href="index.php">iSchool</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ps-5 custom-nav">
        <li class="nav-item">
          <a class="nav-link custom-nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="courses.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="payment_status.php">Payment</a>
        </li>
        <?php
        if (!isset($_SESSION)){
          session_start();
      }
          if (isset($_SESSION['is_login'])) {
            echo '<li class="nav-item">
                    <a class="nav-link custom-nav-link" href="#">My Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="./logout.php">Logout</a>
                  </li>';
          }
          else{
            echo '<li class="nav-item">
                    <a class="nav-link custom-nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</a>
                  </li>';
          }
        ?>
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link custom-nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>