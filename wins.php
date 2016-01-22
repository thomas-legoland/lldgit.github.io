<?php
header("Content-Type: text/html; charset=utf-8");
session_start();
require "../config.php";

 $auth = new Auth();
if(!empty($_POST['username']) && !empty($_POST['password'])){
    $login=$auth->login($_POST['username'], $_POST['password']);
} 
if(!empty($_GET['key'])){
    $auth->activate($_GET['username'], $_GET['key']);
    header('Location: /win/console/');
}
if($_GET['logout']=="1") {
  $auth->deletesession($_SESSION["auth_session"]);
  unset($_SESSION["auth_session"]);
  header('Location: /win/console/');
} 
$session=$auth->sessioninfo($_SESSION["auth_session"]);
$bereiche=explode("/",$session['win']);
$smarty->assign('bereiche',$bereiche);
$smarty->assign('session',$session);
if(!empty($_GET['show'])) {

  if(!empty($_GET['date'])) {
    include("../data/".$_GET['show']."de.php");
    $smarty->assign('prices',$prices[$_GET['date']]);
    if($_GET['mode']=="run") {
         $entries = $db->rawQuery('SELECT * from win WHERE  project = "'.$_GET['show'].'" AND dstatus="2" AND windate = "'.$_GET['date'].'" ORDER BY rand() LIMIT '.$prices[$_GET['date']][2]);
    } 
    else {
     $db->where ('project = "'.$_GET['show'].'" AND windate = "'.$_GET['date'].'"');
       $db->orderBy("id","desc");
       $entries = $db->get('win',100); 
        $db->where ('project = "'.$_GET['show'].'" AND windate = "'.$_GET['date'].'"');
       $db->orderBy("id","desc");
       $winners = $db->get('winners');
       $smarty->assign('winners',$winners); 
          
    }
    if($_GET['mode']=="runfinal") {
       for ($i = 1; $i <= $prices[$_GET['date']][2]; $i++) {
        if(!empty($_POST['winid'.$i])) {
          $data = Array (
          "project" => $_GET['show'],
          "windate" => $_GET['date'],
          "winid" => $_POST['winid'.$i],
          "hash" => md5(time()).rand(1,9999999)
          );
          $db->insert('winners', $data);
        }
      }
    }

  } else {
    $db->where ('project = "'.$_GET['show'].'"');
      $db->orderBy("id","desc");
   $entries = $db->get('win');
        
        $db->where ('project = "'.$_GET['show'].'"');
       $db->orderBy("id","desc");
       $winners = $db->get('winners');
       $smarty->assign('winners',$winners); 
  }
  

  $zeiten=array();
  foreach ($entries as $entr) {
     if(!in_array($entr['windate'],$zeiten)) {
      $zeiten[]=$entr['windate'];
     }
  }
  $smarty->assign('zeiten',$zeiten);
  $smarty->assign('entries',$entries);
}

$smarty->assign('get',$_GET); 
$smarty->display('wins.tpl'); 
 ?>                      