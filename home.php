<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" href="images/favicon.jpg">

     <style>
          .content
              {
               position: absolute;
               width: 400px;
               background: #222;  
               z-index: 1000;
               display: flex;
               justify-content: center;
               align-items: center;
               padding: 40px;
               border-radius: 4px;
               box-shadow: 0 15px 35px rgba(0,0,0,9);
               }

          .welcome{
               font-size: small;
          }
          .logout{
               padding: 5px 50px;
               cursor: pointer;
               background: none;
               border: 1px solid rgba(255, 255, 255, 0.65);
               border-radius: 25px;
               color: rgba(255, 255, 255, 0.65);
               font-size: 20px;
               font-family: roboto;
               line-height: 2.5em;
               -webkit-transition: all .2s ease;
               transition: all .2s ease;
               }

               .logout:hover {
               background: rgba(255, 255, 255, 0.15);
               color: #bca3db;
               transition: all .2s ease;
               }
               h1{color: aliceblue;
                    margin-bottom: 20px;
               }
               
               
               *{
               margin: 0;
               padding: 0;
               box-sizing: border-box;
               font-family: 'Quicksand', sans-serif;
               }
               body 
               {
               display: flex;
               justify-content: center;
               align-items: center;
               min-height: 100vh;
               background: #000;
               }
               section 
               {
               position: absolute;
               width: 100vw;
               height: 100vh;
               display: flex;
               justify-content: center;
               align-items: center;
               gap: 2px;
               flex-wrap: wrap;
               overflow: hidden;
               }
               section::before 
               {
               content: '';
               position: absolute;
               width: 100%;
               height: 100%;
               background: linear-gradient(#000,#bca3db,#000);
               animation: animate 5s linear infinite;
               }
               @keyframes animate 
               {
               0%
               {
               transform: translateY(-100%);
               }
               100%
               {
               transform: translateY(100%);
               }
               }
               section span 
               {
               position: relative;
               display: block;
               width: calc(6.25vw - 2px);
               height: calc(6.25vw - 2px);
               background: #181818;
               z-index: 2;
               transition: 1.5s;
               }
               section span:hover 
               {
               background: #bca3db;
               transition: 0s;
               }
     </style>
</head>
<body>
<form action="login.php" class="container" method="post">
          <div class='bold-line'></div>
     <div class='container'>
     
     <div class='content'>
          <div class='welcome'><h1>Welcome again we are so happy be your in here, <?php echo $_SESSION['name']; echo "..." ?></h1></div>     
          <button href="logout.php" class="logout">Logout</button>
     </div>
     </div>
     <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 
     
     
  </section>
</form>
     
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>