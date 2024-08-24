<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop now</title>
  <!-- Link to CSS-->
  <link rel="stylesheet" href="css/newstyle.css">
  <!--Box Icons-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <!-- Header -->
  <header>
    <!-- Nav -->
    <div class="nav container">
      <a href="#" class="logo">Kat Book Store</a>
      <!-- Cart Icon-->
      <i class='bx bx-shopping-bag' id="cart-icon"></i>
    </div>
  </header>
  <!-- Shop -->
  <section class="shop container">
    <h2 class="section-title">Shop Books</h2>
    <!-- Content -->
    <div class="shop-content">
      <!-- Box 1 -->
      <div class="product-box">
        <img src="images/onepiece.jpg" alt="" class="product-img">
        <h2 class="product-title">One Piece:Romance Dawn</h2>
        <span class="price">R125</span>
            <?php
            if(isset($_POST['btn1'])){
              echo 'Added to cart';
            }
            ?>
        <form method="post">
            <input type="submit" name="btn1" class="bx bx-shopping-bag add-cart" value="add to cart"> 
            </form>
      </div>
        
        <!-- Box 2 -->
        <div class="product-box">
            <img src="images/hulk.jpg" alt="" class="product-img">
            <h2 class="product-title">Immortal Hulk Vol. 11: Apocrypha</h2>
            <span class="price">R115</span>
            <?php
            if(isset($_POST['btn2'])){
              echo 'Added to cart';
            }
            ?>
        <form method="post">
            <input type="submit" name="btn2" class="bx bx-shopping-bag add-cart" value="add to cart"> 
            </form>
          
        </div>
        <!-- Box 3 -->
        <div class="product-box">
            <img src="images/jujutsu.jpg" alt="" class="product-img">
            <h2 class="product-title">Jujutsu Kaisen: vol 30</h2>
            <span class="price">R225</span>
            <?php
            if(isset($_POST['btn3'])){
              echo 'Added to cart';
            }
            ?>
            <form method="post">
            <input type="submit" name="btn3" class="bx bx-shopping-bag add-cart" value="add to cart"> 
            </form>
            
          </div>
          <!-- Box 4 -->
        <div class="product-box">
            <img src="images/bleach.jpg" alt="" class="product-img">
            <h2 class="product-title">Bleach: A thousand deaths</h2>
            <span class="price">R135</span>
            <?php
            if(isset($_POST['btn4'])){
              echo 'Added to cart';
            }
            ?>
            <form method="post">
            <input type="submit" name="btn4" class="bx bx-shopping-bag add-cart" value="add to cart"> 
            </form>
          </div>
          <!-- Box 5 -->
        <div class="product-box">
            <img src="images/gatsy.jpg" alt="" class="product-img">
            <h2 class="product-title">The Great Gatsy</h2>
            <span class="price">R1240</span>
            <i class='bx bx-shopping-bag add-cart' ></i>
          </div>
          <!-- Box 6 -->
        <div class="product-box">
            <img src="images/batman.jpg" alt="" class="product-img">
            <h2 class="product-title">Batman 0: Issue 12</h2>
            <span class="price">R230</span>
            <i class='bx bx-shopping-bag add-cart' ></i>
          </div>
          <!-- Box 7 -->
        <div class="product-box">
            <img src="images/aot.jpg" alt="" class="product-img">
            <h2 class="product-title">Shingeki no kyojin</h2>
            <span class="price">R225</span>
            <i class='bx bx-shopping-bag add-cart' ></i>
          </div>
          <!-- Box 8 -->
          
        <div class="product-box">
            <img src="images/csharp.jpg" alt="" class="product-img">
            <h2 class="product-title">Fundementals of C# Programming</h2>
            <span class="price">R575</span>
            <i class='bx bx-shopping-bag add-cart' ></i>
            <!-- Box 5 -->
        <div class="product-box">
            <img src="images/java.jpg" alt="" class="product-img">
            <h2 class="product-title">Java Programming</h2>
            <span class="price">R775</span>
            <i class='bx bx-shopping-bag add-cart' ></i>
          </div>
      </div>
    </div>
  </section>
</body>
</html>