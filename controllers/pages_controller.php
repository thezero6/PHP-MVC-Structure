<?php

class PageController{
  public function home(){
    require_once('views/pages/home.php');
  }
  public function form(){
    require_once('views/pages/form.php');
  }
  public function about(){
    require_once('views/pages/about.php');
  }
  public function error(){
    require_once('views/pages/error.php');
  }
}
