<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/login.css">
  <?php require_once "include/head.inc.php"; ?>
<body>
  <br>
  <div class="container">
    <form>
      <h2>
        <a href="index.php" style="color:black;position: relative;right:100px;bottom:20px">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
          </svg>
        </a>
        <center>登入</center>
      </h2>
      <div class="form-control">
        <label for="username">使用者名稱</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-control">
        <label for="password">密碼</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-control">
        <p>沒有帳號? <a href="register">馬上註冊</a></p>
      </div>
      <button type="submit">登入</button>
    </form>
  </div>
</body>
</html>
