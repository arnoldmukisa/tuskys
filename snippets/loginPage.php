<?php 
 require('./includes/config.php');
 include('./includes/login.php');

  if(isset($_SESSION['login_user'])){
    header("location: snippets/home.php");
  }
 ?>

  <section class="main">
      <section class="login-form text-center">
        <form action="" method="POST">
          <span class="label"><label>Username</label></span>&nbsp;<input type="text" required name="username" class="input" placeholder="Username"><br><br><br>
          <span class="label"><label>Password</label></span>&nbsp;<input type="password" required name="password" class="input" placeholder="********"><br><br>
          <button class="btn login" type="submit" value="login" name="login">Login</button>
        </form>
      </section> 
    </section>