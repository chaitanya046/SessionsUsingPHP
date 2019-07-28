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
  $_SESSION['side1'] = $_POST['side1'];
  $_SESSION['side2'] = $_POST['side2'];
  $_SESSION['side3'] = $_POST['side3'];
  $_SESSION['side4'] = $_POST['side4'];
  $_SESSION['side5'] = $_POST['side5'];
  $_SESSION['side6'] = $_POST['side6'];
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
          </ul>
        </nav>
        
      <main>
        <form action="" id="orderForm" class="form" method="post" onsubmit="return form_post();">
          <div class="menu">
            <ul class="uitem">
              
               <li class="item"><img class="imageraw" src="./img/side1.png" width="140" height="140">
                <h2>Doughnut</h2>
                <p>$7.00</p>
                <input type="number" class="text_field" id="item1" name="side1" placeholder="0" value="<?php echo $_SESSION['side1']; ?>" /></li> 
             
                <li class="item"><img class="imageraw" src="./img/side2.png" width="140" height="140">
                <h2>Fries</h2>
                <p>$2.00</p>
                <input type="number" class="text_field" id="item2" name="side2" placeholder="0" value="<?php echo $_SESSION['side2']; ?>" /></li>
              
                <li class="item">
                <img class="imageraw" src="./img/side3.png" width="140" height="140">
                <h2>Chocolate Scoop</h2>
                <p>$3.00</p>
                <input type="number" class="text_field" id="item3" name="side3" placeholder="0" value="<?php echo $_SESSION['side3']; ?>"/></li>
                
                <li class="item">
                <img class="imageraw" src="./img/side4.png" width="140" height="140">
                <h2>Chicken nuggets</h2>
                <p>$7.00</p>
                <input type="number" class="text_field" id="item4" name="side4" placeholder="0" value="<?php echo $_SESSION['side4']; ?>"/></li>
                 <li class="item">
                <img class="imageraw" src="./img/side5.png" width="140" height="140">
                <h2>Onion Rings</h2>
                <p>$5.00</p>
                <input type="number" class="text_field" id="item5" name="side5" placeholder="0" value="<?php echo $_SESSION['side5']; ?>"/></li>
                
                <li class="item">
                <img class="imageraw" src="./img/side6.png" width="140" height="140">
                <h2>Waffle</h2>
                <p>$7.00</p>
                <input type="number" class="text_field" id="item6" name="side6" placeholder="0" value="<?php echo $_SESSION['side6']; ?>"/></li>
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
