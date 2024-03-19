<!DOCTYPE html>
<html lang="en">
<?php
 include_once ('include/meta.php')
 ?>
    <body class="sb-nav-fixed">
        <!--navbar  -->
        <?php
 include_once ('include/sidebar.php')
 ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- side bar -->
                <?php
 include_once ('include/header.php')
 ?>
            </div>
            <div id="layoutSidenav_content">
                <!-- header -->
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <?php
 include_once ('../../pertemuan1/latihan.php')
 ?>

                    
                    </div>
                </main>
                <!-- footer -->
                <?php
 include_once ('include/footer.php')
 ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
