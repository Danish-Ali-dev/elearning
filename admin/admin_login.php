<div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminadminLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminadminLoginModalLabel">Admin Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="student_login_form">
                    <div class="mb-3">
                        <i class="fas fa-envelope"></i><label for="admin_email" class="form-label fw-bold">&nbsp;Email</label>
                        <input type="email" required="" class="form-control" id="admin_email" name="admin_email">
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-key"></i><label for="admin_password"
                            class="form-label fw-bold">&nbsp;Password</label>
                        <input type="password" required="" class="form-control" id="admin_password" name="admin_password">
                        <input type="checkbox" class="my-1" onclick="showAdminPass()"> &nbsp;Show Password
                    </div>
                    <div class="mb-2">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="adminSpinner"></div>
                <div class="statusAdminMsg"></div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="login" onclick="check_admin_login()">Login</button>
            </div>
        </div>
    </div>
</div>