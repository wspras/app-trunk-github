<?php
/**
 * Used to setup and layput global www 
 * the WSPRAS SITE procedural and class library.
 *
 * You should not have to change this file and allows
 * for some configuration all web content
 *
 * @package WSPRAS 
 */
define ("WEB_TITLE","WSPRAS Directory");
define ("WEB_NAME","WSPRAS Directory Package");
  $system_path = 'static/php/dir_web.php';
  if ((include $system_path) != TRUE) {
    include "/" . $system_path;
  }
exit();