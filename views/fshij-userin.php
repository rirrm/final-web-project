<?php
 require_once '../new/userMapper.php';

 if(isset($_GET['userID'])){
     $userId = $_GET['userID'];
 }

 $user = new userMapper;
 $user->delete($lajmiId);

?>