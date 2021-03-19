
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <!-- Nhúng file CSS -->
      <link rel="stylesheet" href="./css/style.css" />
   </head>
   <body>
      <!-- Nhúng file JavaScript -->
      <script language="javascript" src="./js/kiemtra.js"></script>
      <form action="register_submit.php" method="POST" >
         <div class="register">
            <h1>Đăng ký</h1>
            <p>Vui lòng điền thông tin để đăng ký</p>
            <hr>
            <label for="username"><b>Tên đăng nhập</b></label>
            <input type="text" placeholder="Dương Quý Phi" name="username" id="username">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="hoaroicuaphat@gmail.com" name="email" id="email">

            <label for="password"><b>Mật khẩu</b></label>
            <input type="password" placeholder="******" name="password" id="password">
            
            <label for="repassword"><b>Nhập lại mật khẩu</b></label>
            <input type="password" placeholder="******" name="repassword" id="repassword">
            <hr>
            <button type="submit" name="submit">Đăng ký</button>
         </div>
         <div class="register login">
            <p>Bạn đã có tài khoản rồi? <a href="./login.php">Đăng nhập</a>.</p>
         </div>
      </form>
   </body>
</html>