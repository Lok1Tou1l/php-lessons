<?php
// Start session at the very beginning
session_start();

require "config.php";

// Initialize variables for error and success messages
$error_message = "";
$success_message = "";

if(isset($_POST['submit'])) {
    if ($_POST['email'] == "" || $_POST['username'] == "" || $_POST['password'] == "") {
        $error_message = "Please fill all fields";
    } else {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

        // Use MySQLi prepared statement with '?' placeholders
        $insert = $conn->prepare("INSERT INTO users (email, username, password) VALUES(?, ?, ?)");
        
        if ($insert === false) {
            $error_message = "Prepare failed: " . $conn->error;
        } else {
            // Bind parameters
            $insert->bind_param("sss", $email, $username, $password);
            
            // Execute and check if successful
            if ($insert->execute()) {
                $success_message = "Registration successful! You can now login.";
            } else {
                $error_message = "Error: " . $insert->error;
            }

            // Close the statement
            $insert->close();
        }
    }
}

// Include header after session/error handling
require "includes/header.php";
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0"><i class="fas fa-user-plus me-2"></i>Create Account</h3>
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
                    <script>
                        // JavaScript redirect after a brief delay
                        setTimeout(function() {
                            window.location.href = "login.php";
                        }, 2000);
                    </script>
                    <?php endif; ?>
                
                    <form method="POST" action="register.php">
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                            <label for="floatingEmail"><i class="fas fa-envelope me-2 text-muted"></i>Email address</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input name="username" type="text" class="form-control" id="floatingUsername" placeholder="username">
                            <label for="floatingUsername"><i class="fas fa-user me-2 text-muted"></i>Username</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword"><i class="fas fa-lock me-2 text-muted"></i>Password</label>
                        </div>
                        
                        <div class="form-floating mb-4">
                            <input name="confirm_password" type="password" class="form-control" id="floatingConfirmPassword" placeholder="Confirm Password">
                            <label for="floatingConfirmPassword"><i class="fas fa-lock me-2 text-muted"></i>Confirm Password</label>
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
                            <label class="form-check-label" for="termsCheck">
                                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                            </label>
                        </div>
                        
                        <div class="d-grid">
                            <button name="submit" class="btn btn-primary btn-lg" type="submit">
                                <i class="fas fa-user-plus me-2"></i>Create Account
                            </button>
                        </div>
                        
                        <div class="text-center mt-4">
                            <p class="mb-0">Already have an account? <a href="login.php" class="fw-bold">Sign In</a></p>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3 bg-light">
                    <div class="small">Secure registration powered by AuthSys</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "includes/footer.php"; ?>