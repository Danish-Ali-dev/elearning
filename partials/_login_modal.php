<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Student Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="student_login_form">
                    <div class="mb-3">
                        <i class="fas fa-envelope"></i><label for="login_email" class="form-label fw-bold">&nbsp;Email</label>
                        <input type="email" required="" class="form-control" id="login_email" name="login_email">
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-key"></i><label for="login_password"
                            class="form-label fw-bold">&nbsp;Password</label>
                        <input type="password" required="" class="form-control" id="login_password" name="login_password">
                        <input type="checkbox" class="my-1" onclick="showLoginPass()"> &nbsp;Show Password
                    </div>
                    <div class="mb-2">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="statusSpinner"></div>
                <div class="statusLogMsg"></div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="login" onclick="check_student_login()">Login</button>
            </div>
        </div>
    </div>
</div>