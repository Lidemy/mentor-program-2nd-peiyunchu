<!--   
  // $is_error = false;

//   // 如果有設定且值不是空的話 , 才會做以下的的事
//   // 如果只是瀏覽訊息而未輸入帳密的情況下,不會出現錯誤訊息
//   if(
//     isset($_POST['username']) && isset($_POST['password']) 
//   ) {
//     if(
//      !empty($_POST['username']) &&
//      !empty($_POST['password'])
//      ) {

//       //判斷是否有拿到東西
//       $username = $_POST['username'];
//       $password = $_POST['password'];
//       echo $username .'<br>'. $password;

//    } else {
//       // // 在同一個頁面顯示錯誤訊息
//       // echo '<script>alert("請輸入帳號密碼!")</script>'; 
//       $is_error = true;
//     } 

//   }  -->




  <!-- $is_error = false;

  if (
    isset ($_POST['username']) &&
    isset ($_POST['password']) &&
    !empty ($_POST['username']) &&
    !empty ($_POST('password'))
  ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
  } else {
   ?>
     <script>
       alert("請輸入帳號密碼!")      
     </script>
  
  } -->


<!DOCTYPE html>
<html>
  <head>
    <title>註冊</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
  </head>

  <body>
    <?php include_once('./navbar.php')  ?>
    <div class='container'>
        <div class='form__wrapper'>
          <form class='form' method='POST' action='./handle_register.php'>
              <div class='form__row'>
                暱稱：<input type='text' name='nickname' />
              </div>
              <div class='form__row'>
                帳號：<input type='text' name='username' />
              </div>
              <div class='form__row'>
                密碼：<input type='password' name='password' />
              </div>
              <input type='submit' />
          </form>
        </div>
    </div>

  </body>

</html>