<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>

<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="assets/css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="assets/css/stylesign.css">
    <!-- Resource style -->
    <script src="assests/js/modernizr.js"></script>
    <!-- Modernizr -->
    <title>Signup for Qsbook | Innovase Limited</title>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['signup'])) { //user logging in

        require 'register.php';
        
    }
}
?>

<body>
    <header class="cd-main-header">
        <h1><a href="index.html">QSBOOK</a></h1>
    </header>

    <ul class="cd-pricing">
        <li>
            <header class="cd-pricing-header">
                <h2>QS Users</h2>

                <div class="cd-price">
                    <span>ksh 999</span>
                    <span>quartely</span>
                </div>
            </header>
            <!-- .cd-pricing-header -->

            <div class="cd-pricing-features">
                <ul>
                    <li class="available"><em>Feature 1</em></li>
                    <li><em>Feature 2</em></li>
                    <li><em>Feature 3</em></li>
                    <li><em>Feature 4</em></li>
                </ul>
            </div>
            <!-- .cd-pricing-features -->

            <footer class="cd-pricing-footer">
                <a href="#0">Select</a>
            </footer>
            <!-- .cd-pricing-footer -->
        </li>

        <li>
            <header class="cd-pricing-header">
                <h2>Contractor Users</h2>

                <div class="cd-price">
                    <span>Ksh 199</span>
                    <span>quartely</span>
                </div>
            </header>
            <!-- .cd-pricing-header -->

            <div class="cd-pricing-features">
                <ul>
                    <li class="available"><em>Feature 1</em></li>
                    <li class="available"><em>Feature 2</em></li>
                    <li><em>Feature 3</em></li>
                    <li><em>Feature 4</em></li>
                </ul>
            </div>
            <!-- .cd-pricing-features -->

            <footer class="cd-pricing-footer">
                <a href="#0">Select</a>
            </footer>
            <!-- .cd-pricing-footer -->
        </li>

        <li>
            <header class="cd-pricing-header">
                <h2>Trader Users</h2>

                <div class="cd-price">
                    <span>Ksh 299</span>
                    <span>quartely</span>
                </div>
            </header>
            <!-- .cd-pricing-header -->

            <div class="cd-pricing-features">
                <ul>
                    <li class="available"><em>Feature 1</em></li>
                    <li class="available"><em>Feature 2</em></li>
                    <li class="available"><em>Feature 3</em></li>
                    <li class="available"><em>Feature 4</em></li>
                </ul>
            </div>
            <!-- .cd-pricing-features -->

            <footer class="cd-pricing-footer">
                <a href="#0">Select</a>
            </footer>
            <!-- .cd-pricing-footer -->
        </li>
    </ul>
    <!-- .cd-pricing -->

    <div class="cd-form">

        <div class="cd-plan-info">
            <!-- content will be loaded using jQuery - according to the selected plan -->
        </div>

        <div class="cd-more-info">
            <h3>For MPESA</h3>
            <p>Step 1.Go to Mpesa Menu</p>
            <p>Step 2.Select "Lipa na Mpesa"</p>
            <p>Step 3.Select "Paybill"</p>
            <p>Step 4.Enter "Paybill Number(1234)"</p>
            <p>Step 5.Enter "Account Number(Your phone number e.g. 0712345678)"</p>
            <p>Step 7.Confirm and send.</p>
            <p>Step 8.Enter your "Transaction ID" and press "SIGNUP"</p>
        </div>

        <form action="signup.php" method="post" autocomplete="off">
            <fieldset>
                <legend>Account Info</legend>

                <div class="half-width">
                    <label>First Name<span class="req">*</span></label>
                    <input type="text" required autocomplete="off" name='firstname' />
                </div>

                <div class="half-width">
                    <label>Last Name<span class="req">*</span></label>
                    <input type="text" required autocomplete="off" name='lastname' />
                </div>

                <div class="half-width">
                    <label>Email Address<span class="req">*</span></label>
                    <input type="email" required autocomplete="off" name='email' />
                </div>

                <div class="half-width">
                    <label>Phone Number<span class="req">*</span></label>
                    <input type="text" required autocomplete="off" name="userphone">
                </div>

                <div class="half-width">
                    <label>Set A Password<span class="req">*</span></label>
                    <input type="password" required autocomplete="off" name='password' />
                </div>
 <!--
                <div class="half-width">
                        <label>Repeat Password<span class="req">*</span></label>
                        <input type="password" required autocomplete="off" name="PasswordRepeat">
                </div>
-->
                <div>
                    <p class="half-width">
                        <label>MPESA Transaction ID<span class="req">*</span></label>
                        <input type="text" required autocomplete="off" name="transactionid">
                    </p>
                </div>

                 <div><input type="submit" name="submit"></div>
    </div>
    </fieldset>

    <a href="#0" class="cd-close"></a>
    </div>
    <!-- .cd-form -->

    <div class="cd-overlay"></div>
    <!-- shadow layer -->
    <script src="assets/js/jquery-2.1.4.js"></script>
    <script src="assets/js/velocity.min.js"></script>
    <script src="assets/js/mainsign.js"></script>
    <!-- Resource jQuery -->
</body>

</html>