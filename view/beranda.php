
  <?php
  $statusResult =json_decode(tabel_status(), true);
  $projectName = "StartTuts";

   ?>



        <div class="task-board">
            <?php
            foreach ($statusResult as $statusRow) {
                $taskResult = json_decode(tabel_task($statusRow['id'],$projectName), true) ;
                ?>
                <div class="status-card">
                    <div class="card-header">
                        <span class="card-header-text"><?php echo $statusRow["status_name"]; ?></span>
                    </div>
                    <ul class="sortable ui-sortable"
                        id="sort<?php echo $statusRow["id"]; ?>"
                        data-status-id="<?php echo $statusRow["id"]; ?>">
                <?php
                if (! empty($taskResult)) {
                    foreach ($taskResult as $taskRow) {
                        ?>

                     <li class="text-row ui-sortable-handle"
                            data-task-id="<?php echo $taskRow["id"]; ?>">
                            <b><?php echo $taskRow["title"]; ?></b>
                            <p> <small><?php echo $taskRow["description"]; ?></small> </p>



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
