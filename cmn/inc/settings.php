<!-- ! HOMEURL設定 ==================== -->
<?php	define( 'HOMEURL', '//demo.soushin-lab.com/default/' ); ?>

<!-- ! ページ毎にクラス付与 ==================== -->
<?php
  if(preg_match("/default\/$/", $_SERVER["REQUEST_URI"])){
    $body_page = "body_top";
    $css = "style";
  }else if(preg_match("/about/", $_SERVER["REQUEST_URI"])){
    $body_page = "body_about";
    $css = "about";
  }else if(preg_match("/contact/", $_SERVER["REQUEST_URI"])){
    $body_page = "body_contact";
    $css = "contact";
  }else {
    $body_page = null;
    $css = null;
  }
?>