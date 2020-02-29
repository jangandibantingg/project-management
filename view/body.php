
<!DOCTYPE html>
<html>

<?php
include 'view/body.head.php';
 ?>

<body class="blank-page">

  <!-- Start: Theme Preview Pane -->
  <?php include "view/body.panel.php"; ?>
  <!-- End: Theme Preview Pane -->

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
    <?php include 'view/body.top.php'; ?>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->

        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <?php include 'view/body.menu.php';; ?>
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->

	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar-Dropdown -->
      <!--  -->
      <!-- End: Topbar-Dropdown -->

      <!-- Start: Topbar -->
      <?php include 'view/body.topbar.php';; ?>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">


                                <?php
                                if (file_exists("view/$page.php")) {
                                      require "view/$page.php";
                                  }elseif($page == '' ){
                                     require "view/beranda.php";
                                  }else {

                                    if ($member['level'] == 'akun') {
                                      echo "<script type='text/javascript'> window.location.href = './penjualan.aspx' </script>";
                                    }
                                      echo '
                                      <div class="col-md-8">


                                      <div class="panel panel-danger">
  <div class="panel-heading">
    <span class="panel-title">Halaman ini dalam Proses pengembangan</span>
    <div class="widget-menu pull-right">
      <code class="mr10 bg-primary dark p3 ph5">404</code>
    </div>
  </div>
  <div class="panel-body">
  <p class="text-left"> © 2019  <i class="fa fa-code"></i> <a href="https://www.cloudflare.com/" target="_blank"> <b> <i class="icon-cup"></i> Developer </b> </a></p>
  </div>
</div></div>
                                      ';
                                  }


                                ?>

      </section>
      <!-- End: Content -->

    </section>

    <!-- Start: Right Sidebar -->
    <?php include 'view/body.rightsidebar.php'; ?>
    <!-- End: Right Sidebar -->

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="library/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="library/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Tagmanager JS -->
  <script src="library/vendor/plugins/tagsinput/tagsinput.min.js"></script>
  <!-- Theme Javascript -->
  <script src="library/assets/js/utility/utility.js"></script>
  <script src="library/assets/js/demo/demo.js"></script>
  <script src="library/assets/js/main.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core
    Core.init();

    // Init Demo JS
    Demo.init();

  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>

</html>
