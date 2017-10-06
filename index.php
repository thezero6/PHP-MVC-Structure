<!-- php mvc project -->
<!-- version 1.0 -->
<!-- model-view-controller -->

<?php

if (isset($_REQUEST['controller']) && isset($_REQUEST['action'])) {
  $controller = $_REQUEST['controller'];
  $action = $_REQUEST['action'];
}else {
  $controller = 'pages';
  $action = 'home';
}
require_once('views/index_page.php');
