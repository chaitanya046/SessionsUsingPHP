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
  $_SESSION['fru1'] = $_POST['fru1'];
  $_SESSION['fru2'] = $_POST['fru2'];
  $_SESSION['fru3'] = $_POST['fru3'];
  $_SESSION['fru4'] = $_POST['fru4'];
  $_SESSION['fru5'] = $_POST['fru5'];
  $_SESSION['fru6'] = $_POST['fru6'];
  
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
              
               <li class="item"><img class="imageraw" src="./img/fruit1.png" width="140" height="140">
                <h2>Strawberry</h2>
                <p>$7.00</p>
                <input type="number" class="text_field" id="item1" name="fru1" placeholder="0" value="<?php echo $_SESSION['fru1']; ?>" /></li> 
             
                <li class="item"><img class="imageraw" src="./img/fruit2.png" width="140" height="140">
                <h2>Green Apples</h2>
                <p>$3.00</p>
                <input type="number" class="text_field" id="item2" name="fru2" placeholder="0" value="<?php echo $_SESSION['fru2']; ?>" /></li>
              
                <li class="item">
                <img class="imageraw" src="./img/fruit3.png" width="140" height="140">
                <h2>Avocados</h2>
                <p>$8.00</p>
                <input type="number" class="text_field" id="item3" name="fru3" placeholder="0" value="<?php echo $_SESSION['fru3']; ?>"/></li>
                
                <li class="item">
                <img class="imageraw" src="./img/fruit4.png" width="140" height="140">
                <h2>Bananas</h2>
                <p>$7.00</p>
                <input type="number" class="text_field" id="item4" name="fru4" placeholder="0" value="<?php echo $_SESSION['fru4']; ?>"/></li>
                
                <li class="item">
                <img class="imageraw" src="./img/fruit5.png" width="140" height="140">
                <h2>Blueberries</h2>
                <p>$5.00</p>
                <input type="number" class="text_field" id="item5" name="fru5" placeholder="0" value="<?php echo $_SESSION['fru5']; ?>"/></li>
                
                <li class="item">
                <img class="imageraw" src="./img/fruit6.png" width="140" height="140">
                <h2>Orange</h2>
                <p>$5.00</p>
                <input type="number" class="text_field" id="item6" name="fru6" placeholder="0" value="<?php echo $_SESSION['fru6']; ?>"/></li>
                
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
