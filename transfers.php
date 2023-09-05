<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--========== BOX ICONS ==========-->
        <link href='npm/boxicons%402.0.5/css/boxicons.min.css' rel='stylesheet'>
        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> -->

        <title>Trans Bank</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="navins bd-container">
                <a href="index.html" class="nav__logo">
                    <img src="assets/img/logo/lolo.png" alt="" style="height: 40px;">
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>

                        <li class="nav__item"><a href="contact.html" class="nav__link">Contact us</a></li>
                       

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>


        <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">You can tranfer your money to another user</span>
                <h2 class="section-title">Transfer</h2>

                <div class="menu__container bd-grid" style="display: flex; align-content: center; justify-content: center; ">



        <div >





        <?php

          include 'php/db.php';


          $sql = "SELECT * FROM users ";

          $result = mysqli_query($conn,$sql);

          $result_checker = mysqli_num_rows($result);

          if ($result_checker > 0) {
              
              while ($row = mysqli_fetch_assoc($result)) {
                  
                  $username = $row ['username'];
                  $fullname = $row ['fullname'];
                  $email    = $row ['email'];
                  $phone    = $row ['phone'];
                  $account_number = $row ['account_number'];
                  $Account_balance = $row ['account_balance'];
                  $date = $row ['Date'];
               }

            }

        ?>
            

            <form action="php/tranfer.php" method="POST">
                <div>
                    <label>Amount to transfer</label><br>
                    <input type="number" name="amount">
                </div>

                <div>
                    <label>Account Number</label><br>
                    <input type="number" name="account_number">
                </div>

                <div>
                    <label>Account Name</label><br>
                    <input type="user" name="name" readonly>
                </div>

                <div>
                    <label>Transfer Remark</label><br>
                    <textarea name="remark"></textarea>
                </div>

                <div>
                    <button type="submit" name="transfer" style="color:white; background: green; padding: 8px; border-radius: 5px; border: none;">Transfer
                    </button>
                </div>
            </form>
        </div>


        </div>

       </section>

             <!--========== FOOTER ==========-->
        <div class="homing">
            <footer class="footer section bd-container">
                <div class="footer__container bd-grid">

    

                </div>
    
                <p class="footer__copy">&#169; 2022  <a href="#0">Trans_Bank</a>. All right reserved</p>
            </footer>
    
        </div>

    <!--========== SCROLL REVEAL ==========-->
    <script src="scrollreveal%404.0.9/dist/scrollreveal.js"></script>

    <!--========== MAIN JS ==========-->

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    </body>
</html>
