<?php
// Start session at the very beginning before any output
session_start();

require "config.php";

// Initialize variables for error and success messages
$error_message = "";
$success_message = "";
$redirect = false;

if(isset($_POST['submit'])) {
    if ($_POST['email'] == "" || $_POST['password'] == "") {
        $error_message = "Please fill all fields";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare the SELECT statement
        $query = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
        
        if ($query === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameter and execute
        $query->bind_param("s", $email);
        $query->execute();
        
        // Get result
        $result = $query->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $success_message = "Login successful! Welcome, " . $user['username'];
                $redirect = true;
            } else {
                $error_message = "Invalid email or password";
            }
        } else {
            $error_message = "Invalid email or password";
        }

        // Close statement
        $query->close();
    }
}

// Include header after session management
require "includes/header.php";
?>  

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0"><i class="fas fa-sign-in-alt me-2"></i>Sign In</h3>
                </div>
                <div class="card-body p-4">
                    
                    <?php if($error_message): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i><?php echo $error_message; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    
                    <?php if($success_message): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i><?php echo $success_message; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="login.php">
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput"><i class="fas fa-envelope me-2 text-muted"></i>Email address</label>
                        </div>
                        
                        <div class="form-floating mb-4">
                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword"><i class="fas fa-lock me-2 text-muted"></i>Password</label>
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember me
                            </label>
                            <a href="forgot-password.php" class="float-end">Forgot password?</a>
                        </div>
                        
                        <div class="d-grid">
                            <button name="submit" class="btn btn-primary btn-lg" type="submit">
                                <i class="fas fa-sign-in-alt me-2"></i>Sign In
                            </button>
                        </div>
                        
                        <div class="text-center mt-4">
                            <p class="mb-0">Don't have an account? <a href="register.php" class="fw-bold">Create an account</a></p>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3 bg-light">
                    <div class="small">Secure login powered by AuthSys</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "includes/footer.php"; ?>