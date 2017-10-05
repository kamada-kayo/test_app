<?php
require ('functions.php');
//checkReferer();
//header('location: ./index.php');

$res = checkReferer();
if($res === 'index'){
  header('location: ./index.php');
}else{
  header('location: '.$_SERVER['HTTP_REFERER'].'');
}
?>