<?php include("auth.php"); ?>
<?php include("../config/database.php");

$id = intval($_GET['id']);

mysqli_query($conn, "UPDATE requests SET status='Rejected' WHERE request_id=$id");

header("Location: view_requests.php");
exit();
?>