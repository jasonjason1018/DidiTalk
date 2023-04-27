<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>論壇管理後台登入</title>
    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  </head>
  <body>
    <div class="container">
      <form action="" id="loginForm">
        <h2>論壇管理後台登入</h2>
        <div class="input-group">
          <label for="username">使用者名稱：</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
          <label for="password">密碼：</label>
          <input type="password" id="password" name="password" required>
        </div>
        <center><button type="button" id="loginBtn">登入</button></center>
      </form>
    </div>
  </body>
  <script>
    $("#loginBtn").on("click", function(){
        username = $("#username").val();
        password = $("#password").val();
        if(username !== '' && password !== ''){

        }
    });
  </script>
</html>
