<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/favicon.jpg">
</head>
<body>
    <form action="login.php" class="container" method="post">
        <div class='bold-line'></div>
<div class='container'>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <div class='welcome'>Hello There!</div>
      <div class='subtitle'>Hello you can log in to your account by Username.</div>
      <div class='input-fields'>
        <input type='text' name="uname" placeholder='Username' class='input-line full-width'></input>
        <input type='password' name="password" placeholder='Password' class='input-line full-width'></input>
      </div>
      <div><?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?></div>
      <div><button class='ghost-round full-width'>LOGIN</button></div>
      <div class='spacing'><a href="signup.php" class="highlight" >Create an account</a></div>
    </div>
  </div>
</div>
    </form>

    
</body>
</html>