<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
error_reporting(E_NOTICE);
?>

<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
        <!-- Left side column. contains the logo and sidebar -->
        <?php include('menu_left.php');?>
        <!-- Content Wrapper. Contains page content -->
      </div>
      <div class="col-md-6"> 
      <a href="member.php?act=add" class="btn-info btn-sm"> เพิ่ม </a>
      <p></p>
      
      <?php
      
$act = $_GET['act'];
if($act == 'add'){
include('member_form_add.php');
}elseif ($act == 'edit') {
include('member_form_edit.php');
}
else {
include('member.list.php');
}
?>

      </div>
    </div>
  </div>
  </body>
</html>