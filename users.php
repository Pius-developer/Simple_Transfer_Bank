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
        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
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
                        <li class="nav__item"><a href="index.html" class="nav__link active-link">Home</a></li>
                        

                        <li class="nav__item"><a href="transfer.php" class="nav__link">Make Transfer</a></li>
                       

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header><br>

         





            <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">Some of our users</span>
                <h2 class="section-title">Users</h2>

                <div class="menu__container bd-grid">

                  <div style="overflow-x:auto; margin: auto;">
                  <table>
                      <tr>
                         <th>Username</th>
                          <th>Fullname</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Account Number</th>
                          <th>Registration Date</th>

                          <th>Transfer</th>

                       </tr>



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



                  echo "
                      <tr>

                            <td>".$username."</td>
                            <td>".$fullname."</td>
                            <td>".$email."</td>
                            <td>".$phone."</td>
                            <td>".$account_number."</td>
                            <td>".$date."</td>

                            <td><a href = 'transfers.php' style='background-color:green; padding:10px; color:white;'>Transfer</a></td>


                        </tr>

                    ";

                }
                  
          }else{
            echo "No user yet";
          }



  


        ?>


        </table><br>

        </div>       
        </div>
        </section>

    <!--========== CONTACT US ==========-->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's talk</span>
                        <h2 class="section-title contact__initial">Contact us</h2>
                        <p class="contact__description">For any queries information and support contact us on</p>
                        
                    </div>

                    <div class="contact__button">
                        <a href="contact.html" class="button">Contact us now</a>
                    </div>
                </div>
            </section>
        </main>

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
