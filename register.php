<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/register.css">
<?php require_once "include/head.inc.php";?>

<body>
  <br>
  <div class="container">
    <form>
      <h2>
        <a href="index.php" style="color:black">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
          </svg>
        </a>
        <center>註冊</center>
      </h2>
      <div class="form-control">
        <label for="username">使用者名稱</label>
        <input type="text" id="username" name="username" required>
        <span id="usernamecolumn"></span>
      </div>
      <div class="form-control">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <span id="emailcolumn"></span>
      </div>
      <div class="form-control">
        <label>性別:</label>
        <span>
          <label><input type="radio" name="gender" value="male">男生</label>
          <label><input type="radio" name="gender" value="female">女生</label>
          <label><input type="radio" name="gender" value="other">其他</label>
        </span>
        <span id="gendercolumn"></span>
      </div>
      <div class="form-control">
        <label for="nickname">暱稱</label>
        <input type="text" id="nickname" name="nickname" required>
        <span id="nicknamecolumn"></span>
      </div>
      <div class="form-control">
        <label for="password">密碼</label>
        <input type="password" id="password" name="password" required>
        <span id="passwordcolumn"></span>
      </div>
      <div class="form-control">
        <label for="confirm-password">確認密碼</label>
        <input type="password" id="confirmPassword" name="confirm-password" required>
        <span id="confirmPasswordcolumn"></span>
      </div>
      <button type="button">註冊</button>
      <div class="form-control">
        <p>已經有帳號了? <a href="login.php">登入</a></p>
      </div>
    </form>
  </div>
</body>
<script type="text/javascript">
  $("button").on("click", function(){
    $("span").each(function(value, index){
        if($(this).attr("style") == "color:red"){
          $(this).attr("style", "").text("");
        }
    });
    arr = {
      'username':$("#username").val(),
      'email':$("#email").val(),
      'gender':$('input:radio:checked[name="gender"]').val() == undefined?'':$('input:radio:checked[name="gender"]').val(),
      'nickname':$("#nickname").val(),
      'password':$("#password").val(),
      'confirmPassword':$("#confirmPassword").val(),
    };
    registerFunction("registerSignUp", arr);
  });
</script>
</html>
