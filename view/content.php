<?php
if (file_exists("view/$page.php")) {
      require "view/$page.php";
  }elseif($page == '' ){
     require "view/beranda.php";
  }else {

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
<p class="text-left"> © 2019  <i class="fa fa-code"></i> <a href="https://www.cloudflare.com/" target="_blank"> <b> <i class="imoon imoon-quill"></i> Developer </b> </a></p>
</div>
</div></div>
      ';
  }


?>
