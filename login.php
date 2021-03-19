<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <!-- Nhúng file CSS -->
      <link rel="stylesheet" href="./css/style.css" />
   </head>
   <body>
      <!-- Nhúng file JavaScript -->
      <!-- <script language="javascript" src="./js/kiemtra.js"></script> -->
      <form action="login_submit.php" method="POST" >
         <div class="register">
            <h1>Đăng nhập</h1>
            <hr>
            <label for="username"><b>Tên đăng nhập</b></label>
            <input type="text" placeholder="Dương Quý Phi" name="username" id="username">

            <label for="password"><b>Mật khẩu</b></label>
            <input type="password" placeholder="******" name="password" id="password">
            <hr>
            <button type="submit" name="submit">Đăng nhập</button>
            <div class="login">
            <p>Bạn đã có tài khoản rồi? <a href="./register.php">Đăng kí tài khoản</a>.</p>
         </div>
         </div>
      </form>
   </body>
</html>