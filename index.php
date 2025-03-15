<?php
// Start session at the very beginning
session_start();

// Include header after session
require "includes/header.php";
?>

<!-- Hero Section -->
<div class="bg-primary text-white py-5">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h1 class="display-4 fw-bold mb-3">Secure Authentication System</h1>
        <p class="lead mb-4">A modern, secure, and easy-to-use authentication solution for your applications.</p>
        <div class="d-flex gap-3">
          <?php if(isset($_SESSION['user_id'])): ?>
            <a href="dashboard.php" class="btn btn-light btn-lg px-4">Go to Dashboard</a>
          <?php else: ?>
            <a href="login.php" class="btn btn-light btn-lg px-4">Sign In</a>
            <a href="register.php" class="btn btn-outline-light btn-lg px-4">Create Account</a>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6 d-none d-lg-block text-center">
        <i class="fas fa-shield-alt fa-10x opacity-75"></i>
      </div>
    </div>
  </div>
</div>

<!-- Features Section -->
<div class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">Key Features</h2>
    <p class="lead text-muted">Why choose our authentication system</p>
  </div>

  <div class="row g-4">
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center p-4">
          <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
            <i class="fas fa-lock fa-2x text-primary"></i>
          </div>
          <h4 class="card-title">Secure by Default</h4>
          <p class="card-text text-muted">Advanced password hashing and protection against common vulnerabilities.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center p-4">
          <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
            <i class="fas fa-bolt fa-2x text-primary"></i>
          </div>
          <h4 class="card-title">Fast & Efficient</h4>
          <p class="card-text text-muted">Optimized code for quick authentication and seamless user experience.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm">
        <div class="card-body text-center p-4">
          <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
            <i class="fas fa-code fa-2x text-primary"></i>
          </div>
          <h4 class="card-title">Easy Integration</h4>
          <p class="card-text text-muted">Simple to integrate with your existing PHP applications and platforms.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- How It Works Section -->
<div class="bg-light py-5">
  <div class="container py-3">
    <div class="text-center mb-5">
      <h2 class="fw-bold">How It Works</h2>
      <p class="lead text-muted">Three simple steps to get started</p>
    </div>

    <div class="row">
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
          <h3 class="mb-0 text-primary">1</h3>
        </div>
        <h4>Create an Account</h4>
        <p class="text-muted">Register with your email and choose a secure password.</p>
      </div>
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
          <h3 class="mb-0 text-primary">2</h3>
        </div>
        <h4>Login to Your Account</h4>
        <p class="text-muted">Sign in using your email and password credentials.</p>
      </div>
      <div class="col-md-4 text-center">
        <div class="rounded-circle bg-white shadow-sm d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
          <h3 class="mb-0 text-primary">3</h3>
        </div>
        <h4>Access Protected Content</h4>
        <p class="text-muted">Enjoy secure access to your dashboard and protected resources.</p>
      </div>
    </div>
  </div>
</div>

<!-- Call to Action -->
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 text-center">
      <h2 class="fw-bold mb-3">Ready to Get Started?</h2>
      <p class="lead text-muted mb-4">Join thousands of users who trust our authentication system.</p>
      <?php if(isset($_SESSION['user_id'])): ?>
        <a href="dashboard.php" class="btn btn-primary btn-lg px-5">Go to Dashboard</a>
      <?php else: ?>
        <a href="register.php" class="btn btn-primary btn-lg px-5">Create Your Account</a>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php require "includes/footer.php"; ?>