<!doctype html>
<?php
if (session_status() !== PHP_SESSION_ACTIVE)
{
  session_start();
}

if ((!isset($_SESSION['Name'])) || ($_SESSION['Name'] === ""))
{
  header('Location: index.php');
}

if ($_POST)
{
  $_SESSION['main1'] = $_POST['main1'];
  $_SESSION['main2'] = $_POST['main2'];
  $_SESSION['main3'] = $_POST['main3'];
  $_SESSION['main4'] = $_POST['main4'];
  $_SESSION['main5'] = $_POST['main5'];
  $_SESSION['main6'] = $_POST['main6'];
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <title>Assignment 5</title>
  <link href="./css/main.css" rel="stylesheet">
  <script type="text/javascript" src="./js/main.js"></script>
  </head>
  <body>
    <div class="container">
      <header class="title">
           <h3>Hello <?php echo $_SESSION['Name']; ?> !! Welcome To Community Cafe</h3>
            
      </header>
        <nav>
          <ul>
            <li>
              <a href="fruits.php">Fresh Fruits</a>
            </li>
            <li>
              <a href="mains.php">Mains</a>
            </li>
            <li>
              <a href="sides.php">Sides</a>
            </li>
            <li>
              <a href="#" onclick="signout();"><span style="color:red;">Sign Out</span></a>
            </li>
            <li>
              <a>Please Build up your Order</a>
            </li>
          </ul>
        </nav>
        
      <main>
        <form action="" id="orderForm" class="form" method="post" onsubmit="return form_post();">
          <div class="menu">
            <ul class="uitem">
              
               <li class="item"><img class="imageraw" src="./img/food1.png"  width="140" height="140">
                <h2>Kebabs</h2>
                <p>$17.00</p>
                <input type="number" class="text_field" id="item1" name="main1" placeholder="0" value="<?php echo $_SESSION['main1']; ?>" /></li> 
             
                <li class="item"><img class="imageraw" src="./img/food2.png"  width="140" height="140">
                <h2>Chicken Wings</h2>
                <p>$31.00</p>
                <input type="number" class="text_field" id="item2" name="main2" placeholder="0" value="<?php echo $_SESSION['main2']; ?>" /></li>
              
                <li class="item">
                <img class="imageraw" src="./img/food3.png" width="140" height="140">
                <h2>Classic Hamburger</h2>
                <p>$33.00</p>
                <input type="number" class="text_field" id="item3" name="main3" placeholder="0" value="<?php echo $_SESSION['main3']; ?>"/></li>
                
                <li class="item">
                <img class="imageraw" src="./img/food4.png" width="140" height="140">
                <h2>Burrito</h2>
                <p>$17.00</p>
                <input type="number" class="text_field" id="item4" name="main4" placeholder="0" value="<?php echo $_SESSION['main4']; ?>"/></li>
                 <li class="item">
                <img class="imageraw" src="./img/food5.png" width="140" height="140">
                <h2>Chicken Drumsticks</h2>
                <p>$25.00</p>
                <input type="number" class="text_field" id="item5" name="main5" placeholder="0" value="<?php echo $_SESSION['main5']; ?>"/></li>
                
                <li class="item">
                <img class="imageraw" src="./img/food6.png" width="140" height="140">
                <h2>Classic Hot Dog</h2>
                <p>$27.00</p>
                <input type="number" class="text_field" id="item6" name="main6" placeholder="0" value="<?php echo $_SESSION['main6']; ?>"/></li>
             </ul>
              <div class="imgcontainer">
              <button id="btn">Add Items to Cart</button>
              </div>
          </div>
        </form>
      </main>
      <footer class="footer">
				<p>Aparna Tomar, Chaitanya Uttarwar &copy; 2019</p>
			</footer>
    </div>
  </body>
</html>
