<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Student Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="student_signup_form">
                    <div class="mb-3">
                        <i class="fas fa-user"></i><label for="signup_name" class="form-label fw-bold">&nbsp;Name</label>
                        <small id="msgStatus1"></small>
                        <input type="text" maxlength="20" required="" class="form-control" id="signup_name"
                            name="signup_name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-envelope"></i><label for="signup_email" class="form-label fw-bold">&nbsp;Email</label>
                        <small id="msgStatus2"></small>
                        <input type="email" maxlength="20" required="" class="form-control" id="signup_email" name="signup_email" placeholder="Email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-key"></i><label for="signup_password" class="form-label fw-bold">&nbsp;Password</label>
                        <small id="msgStatus3"></small>
                        <input type="password" maxlength="20" required="" class="form-control" id="signup_password" name="signup_password" placeholder="Password">
                        <input type="checkbox" class="my-1" onclick="showSignupPass()"> &nbsp;Show Password
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span id="msgAlert"></span>
                <button type="submit" class="btn btn-primary" name="signup" id="signup-btn" onclick="addStudent()">Signup</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>