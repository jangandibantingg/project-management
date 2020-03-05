
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

        <?php include 'content.php';; ?>


      </section>
      <!-- End: Content -->

    </section>

    <!-- Start: Right Sidebar -->
    <?php include 'view/body.rightsidebar.php'; ?>
    <!-- End: Right Sidebar -->

  </div>
  <!-- End: Main -->


 <!-- modal add project -->
 <!--  -->
 <div class="modal fade" id="addproject" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Project</h4>
        </div>
        <div class="modal-body">
          <form id="form" action="add-project.html" method="post"  >
              <div class="form-group">
                  <small>Project Name</small>
                  <input type="text" class="form-control" name="project_name" placeholder="Project Name" value="">
              </div>
              <div class="form-group">

                  <input type="hidden" class="form-control" name="create_at" placeholder="project name" value="<?php echo "$date"; ?>">
              </div>
              <div class="form-group">
                <small>Salary</small>
                  <input type="text" class="form-control money" id="money" name="salary" placeholder="amount due " value="">
              </div>
              <div class="form-group">
                  <input type="hidden" class="form-control" name="email" placeholder="project name" value="<?php echo "$member[email]"; ?>">
              </div>
              <div class="form-group">
                  <small>Finish Date</small>
                  <input type="date" class="form-control" name="finish_date" placeholder="finish date" value="">

              </div>
              <div class="form-group">
                <small>Client / marketer</small>
                  <input type="text" class="form-control" name="project_by" placeholder="project by" value="">
              </div>

              <div class="form-group">
                  <small>Priority</small>
                <select class="form-control" name="priority">
                    <option value=""> priority </option>
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>

                </select>
              </div>
              <div class="form-group">
                <small>File Project</small>
                  <input type="text" class="form-control" name="file" placeholder="file project link " value="">
              </div>
              <div class="form-group">
                <small id="info">succees</small>

              </div>

        </div>
        <div class="modal-footer">
          <button id="submitform" class="btn btn-info" >Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </form>
        </div>

      </div>
  </form>
    </div>
  </div>
 <!--  -->


  <!-- BEGIN: PAGE SCRIPTS -->



  <!-- jQuery -->
  <script src="library/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="library/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <script src="ajax/form.js"></script>


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
  <!-- <script src="https://yandex.st/highlightjs/7.3/highlight.min.js"></script> -->
   <script type="text/javascript" src="ajax/jquery.mask.min.js"></script>
   <script type="text/javascript" src="ajax/inputmask.js"></script>
</body>

</html>
