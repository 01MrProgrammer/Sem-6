<?php
session_start();

// Check for existing session or cookie
if (isset($_SESSION['page_views'])) {
  $page_views = $_SESSION['page_views'] + 1;
} elseif (isset($_COOKIE['page_views'])) {
  $page_views = $_COOKIE['page_views'] + 1;
} else {
  $page_views = 1;
}

// Update session and cookie
$_SESSION['page_views'] = $page_views;
setcookie('page_views', $page_views, time() + 3600 * 24 * 30); // Set cookie for 30 days

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Views</title>
</head>
<body>
<p>You have visited this page <?php echo $page_views; ?> times.</p>
</body>
</html>
