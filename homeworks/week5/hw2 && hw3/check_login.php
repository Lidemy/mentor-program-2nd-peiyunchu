<!-- 判斷是否是登入的狀態 -->
<?php
  include_once('./conn.php');
  include_once('./utils.php');

  $user = getUserByToken($conn, $_COOKIE['token']);
  // if (isset($_COOKIE['token']) && !empty($_COOKIE['token'])) {
  //   $user = $_COOKIE['token'];
  //   $sql = "SELECT * from peiyunchu_certificates where token = '$token'";
  //   $result = $conn->query($sql);
  //   if(!$result || $result->num_rows <= 0) {
  //     $user = null;
  //   } else {
  //     $row = $result->fetch_assoc();
  //     $user = $row['username'];
  //   }
  // } else {
  //   $user = null;
  // }
?>