<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Modern authentication system interface">
    <meta name="author" content="AuthSys Team">
    <title>AuthSys - Secure Authentication System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <style>
      :root {
        --primary-color: #4361ee;
        --secondary-color: #3f37c9;
        --accent-color: #4895ef;
        --light-color: #f8f9fa;
        --dark-color: #212529;
      }
      
      body {
        font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        background-color: #f0f2f5;
      }
      
      .navbar {
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 0.8rem 1rem;
        background-color: white !important;
      }
      
      .navbar-brand {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 1.5rem;
      }
      
      .nav-link {
        font-weight: 500;
        color: #495057;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        transition: all 0.2s ease;
      }
      
      .nav-link:hover {
        color: var(--primary-color);
        background-color: rgba(67, 97, 238, 0.05);
      }
      
      .nav-link.active {
        color: var(--primary-color);
        background-color: rgba(67, 97, 238, 0.1);
      }
      
      .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
      }
      
      .btn-primary:hover {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
      }
      
      .auth-btn {
        padding: 0.375rem 1.25rem;
        border-radius: 20px;
        margin-left: 0.5rem;
      }
      
      .hero-section {
        padding: 6rem 0;
        background: linear-gradient(135deg, #4361eebb, #4895efbb), url('https://via.placeholder.com/1600x800') center/cover no-repeat;
        color: white;
        text-align: center;
      }
      
      .feature-box {
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        background-color: white;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 2rem;
      }
      
      .feature-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      }
      
      .feature-icon {
        width: 60px;
        height: 60px;
        background-color: rgba(67, 97, 238, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        color: var(--primary-color);
        font-size: 1.5rem;
      }
      
      .avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        margin-right: 0.5rem;
        background-color: var(--accent-color);
        color: white;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
      }
      
      .footer {
        background-color: var(--dark-color);
        color: white;
        padding: 3rem 0;
        margin-top: 3rem;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <i class="fas fa-shield-alt me-2"></i>AuthSys
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">
                <i class="fas fa-home me-1"></i> Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-info-circle me-1"></i> About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-question-circle me-1"></i> Help
              </a>
            </li>
            
            <!-- Logged out state -->
            <li class="nav-item d-none">
              <a class="nav-link btn btn-primary auth-btn text-white" href="login.php">
                <i class="fas fa-sign-in-alt me-1"></i> Login
              </a>
            </li>
            <li class="nav-item d-none">
              <a class="nav-link btn btn-outline-primary auth-btn" href="register.php">
                <i class="fas fa-user-plus me-1"></i> Register
              </a>
            </li>
            
            <!-- Logged in state -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="avatar">JD</span>
                <?php echo $_SESSION['username']; ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="profile.php">
                    <i class="fas fa-user me-2"></i> My Profile
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="settings.php">
                    <i class="fas fa-cog me-2"></i> Settings
                  </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <a class="dropdown-item text-danger" href="logout.php">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>