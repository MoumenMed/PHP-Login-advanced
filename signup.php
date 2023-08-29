<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/favicon.jpg">
    <style>
      .subtitle{
        padding-top: 40px;
      }
      .highlight{
        text-decoration: none;
      }
      .error{
        width: 90%;
      }
      .success{
        background: #D4EDDA;
        color: #40754C;
        padding: 10px;
        margin-bottom: 30px;
        width: 90%;
        border-radius: 5px;
      }
    </style>
</head>
<body>
    <form action="signup-check.php" class="container" method="post">
        <div class='bold-line'></div>
<div class='container'>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <div class='subtitle'>Welcome to here, all for you, we are best community.</div>
      <div class='input-fields'>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      class='input-line full-width'
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      class='input-line full-width'><br>
          <?php }?>

          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      class='input-line full-width'
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      class='input-line full-width'><br>
          <?php }?>


     	<input type="password" 
                 name="password" 
                 placeholder="Password"
                 class='input-line full-width'><br>

          <input type="password" 
                 name="Confirmation_password" 
                 placeholder="Confirmation password"
                 class='input-line full-width'><br>
      </div>
      <div><?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?></div>

        <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
      <div><button class='ghost-round full-width'>SIGNUP</button></div>
      <div class='spacing'><a href="index.php" class="highlight" >Already have an account?</a></div>
    </div>
  </div>
</div>
    </form>

    
</body>
</html>