<!DOCTYPE html>
<html>
  <head>
    <title>登入</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
  </head>

  <body>
    <?php include_once('./navbar.php')  ?>
    <div class='container'>
        <div class='form__wrapper'>
          <!-- 在同一個頁面顯示錯誤訊息 -->
          <!-- <form class = 'form' method = 'POST' action = './register.php'> -->
          <form class='form' method='POST' action='./handle_login.php'>
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