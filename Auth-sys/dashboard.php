<?php
// Start session at the very beginning
session_start();

// Check if user is logged in, redirect to login if not
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Database connection
require "config.php";

// Get user information
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

// Get user stats (this is a placeholder - customize based on your needs)
$query = $conn->prepare("SELECT created_at FROM users WHERE id = ?");
$query->bind_param("i", $user_id);
$query->execute();
$result = $query->get_result();
$user_data = $result->fetch_assoc();
$join_date = date("F j, Y", strtotime($user_data['created_at'] ?? date("Y-m-d")));

// Include header after session
require "includes/header.php";
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <!-- Project Status -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-0">
                            <h5 class="mb-0">Project Overview</h5>
                        </div>
                        <div class="card-body">
                            <p>Welcome to your dashboard, <strong><?php echo htmlspecialchars($username); ?></strong>! Here you can manage your projects, tasks, and view important statistics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php require "includes/footer.php"; ?>
