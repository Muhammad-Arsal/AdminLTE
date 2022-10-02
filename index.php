<?php
require_once "../core/database.php";
session_start();
if (!isset($_SESSION['uid']) && !isset($_COOKIE['remember_me'])) {

  header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php

  include "commonADMIN/head.php"
  ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php
    require_once "commonADMIN/sidebar.php"
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php
  require_once "commonADMIN/footer.php";
  ?>
  <?php
  require_once "commonADMIN/commonfooter.php";
  ?>
</body>

</html>