<?php include('admin/process/connection.php');?>
<?php
$sql= "SELECT * FROM site_setting_tbl";
$result= mysqli_query($connection, $sql) or die("Query Failed.");
$line = mysqli_fetch_array($result);

$title="RVK ITI Naini Prayagraj";
?>
