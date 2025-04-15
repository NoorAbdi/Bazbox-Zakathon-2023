<!DOCTYPE html>
<html>
  <head>
    <!-- <link rel="stylesheet" href="globals.css" /> -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  	<form class="login-form" method="post" action="dsb.php">
  		<img src="imgs/BZS.png" style="display:block;height: 250px;width:auto;margin-left:auto;margin-right:auto;">
  		<br>
  		<font class="login_text">Username:</font>
  		<input class="login_box" type="text" id="loginField" name="loginField">
  		<br>
  		<font class="login_text" type="text">Password:</font>
  		<input class="login_box" type ="password" id="password" name="password">
  		<br>
  		<font class="login_text">Kode Daerah:</font>
  		<input class="login_box" type="text">
      <a href="regis.php">
      <font class="login_text">Buat Akun</font>
      </a>
  		<button type="submit" name="btn_login" value="Login">Login</button>
  	</form>
    <!-- <div class="box"><div class="form">
    	<img src="BZS.png">
    </div> -->
</div>
  </body>
</html>