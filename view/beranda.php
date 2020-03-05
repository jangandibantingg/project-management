
  <?php
  $statusResult =json_decode(tabel_status(), true);
  $projectName = "StartTuts";

   ?>


<div class="tray tray-center">
  <!-- <div class="content-header">
             <h2> With <b>Admin Forms</b> you have everything you need.</h2>
             <p class="lead">We even included dozens of prebuilt form layouts so you can leave work early</p>
           </div> -->

  <div class="task-board ">

      <?php
      foreach ($statusResult as $statusRow) {
          $taskResult = json_decode(tabel_task($statusRow['id'],$projectName), true) ;
          ?>
          <div class="status-card  ">

              <div class="card-header ">
                  <span class="card-header-text"><?php echo $statusRow["status_name"]; ?></span>
              </div>
              <ul class="sortable ui-sortable"
                  id="sort<?php echo $statusRow["id"]; ?>"
                  data-status-id="<?php echo $statusRow["id"]; ?>">
          <?php
          if (! empty($taskResult)) {
              foreach ($taskResult as $taskRow) {
                  ?>

               <li class="text-row ui-sortable-handle blockquote-primary " data-task-id="<?php echo $taskRow["id"]; ?>">



                      <span class="task-desc "><?php echo $taskRow["title"]; ?> </span><br>
                      <span class="task-desc">------------------------------------------------</span><br>
                      <i class="imoon imoon-quill"></i> <?php echo $taskRow["project_name"]; ?><br>
                      <i class="imoon imoon-calendar"></i> Start <?php echo $taskRow["created_at"]; ?><br>
                      <span class="task-desc">------------------------------------------------</span>
                      <span class="task-desc ">
                        <div class="">
                   <div class="btn-group">
                   <button type="button" class="btn btn-xs btn-rounded btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   <span class="imoon imoon-notebook"></span> Manage</button>
                   <ul class="dropdown-menu checkbox-persist pull-left text-left" role="menu">

                   <li>
                   <a><i class="fa fa-user"></i> Detail Planing </a>
                   </li>

                   <li>
                   <a><i class="fa fa-pencil"></i> edit </a>
                   </li>

                   </ul>
                   </div>
                       </span>



                </li>
          <?php
              }
          }
          ?>
                                           </ul>
          </div>
          <?php
      }
      ?>
  </div>
</div>

    <script>
    $( function() {
     var url = 'control/edit-task.php';
     $('ul[id^="sort"]').sortable({
         connectWith: ".sortable",
         receive: function (e, ui) {
             var status_id = $(ui.item).parent(".sortable").data("status-id");
             var task_id = $(ui.item).data("task-id");
             $.ajax({
                 url: url+'?status_id='+status_id+'&task_id='+task_id,
                 success: function(response){
                     }
             });
             }

     }).disableSelection();
     } );
  </script>
